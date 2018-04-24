<?php
class Cadastro
{
	var $Model;

	function __construct()
	{
		require(ROOT.DS."Model".DS."cadastroModel.php");
		$this->Model = new cadastroModel();
	}

	public function cadastro()
	{
		

		$tipoMensagem = "";
		$mensagem = "";

		if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			//VALIDA DADOS A SEREM CADASTRADOS
			if($this->Model->verificaDados())
			{
				//VALIDA USUARIO E EMAIL (CAMPOS UNIQUE)
				if($this->Model->verificaUsuario() && $this->Model->verificaEmail())
				{
					if($this->Model->cadastraUsuario())
					{
						$tipoMensagem = "alert-success";
						$mensagem = $this->Model->retornaMensagem();	
					}
					else
					{
						$tipoMensagem = "alert-danger";
						$mensagem = $this->Model->retornaMensagem();
						$cadastro = $this->Model->retornaDados();
					}
				}
				else
				{
					$tipoMensagem = "alert-danger";
					$mensagem = $this->Model->retornaMensagem();
					$cadastro = $this->Model->retornaDados();
				}
				
			}
			else
			{
				$tipoMensagem = "alert-danger";
				$mensagem = $this->Model->retornaMensagem();
				$cadastro = $this->Model->retornaDados();
			}
		}

		require(ROOT.DS."View".DS."cadastro.php");
	}


}
?>