<?php
class Login
{
	var $Model;

	function __construct()
	{
		require(ROOT.DS."Model".DS."loginModel.php");
		$this->Model = new loginModel();
	}

	public function login()
	{
		
		$mensagem = "";
		$tipoMensagem = "";
		if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			if(!$this->Model->verificaLogin())
			{
				$mensagem = $this->Model->retornaMensagem();
				$tipoMensagem = "alert-danger";
			}
			else
			{
				//Se conseguir logar, manda para tela inicial
				$this->Model->cadastraSessao();
				header("Location: ".BASE_SITE_MENU."inicial");
			}
		}

		require(ROOT.DS."View".DS."login.php");
	}


}
?>