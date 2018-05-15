<?php

define("LOCAL_ESTABELECIMENTO", ROOT.DS."View".DS."Estabelecimento");

class Estabelecimento
{

	var $Model;
	
	function __construct()
	{
		require_once(ROOT.DS."Model".DS."estabelecimentoModel.php");
		require_once(BASE_CLASS.DS."empresas.php");
		$this->Model = new estabelecimentoModel();
	}

	public function cadastro()
	{
		//Somente atualiza dados das empresas
		if ($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_POST['tipo']))
		{
			if($this->Model->atualizaCadastro())
			{
				$mensagem = array("success", "Dados atualizados com sucesso.");
			}
			else
			{
				$mensagem = array("danger", "Erro ao atualizar dados.");	
			}
		}

		//Adiciona ou deleta usuário
		if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['tipo']))
		{
			//Adicionar usuário
			if ($_POST['tipo'] == '1')
			{
				if($this->Model->adicionaUsuario($_POST['id']))
				{
					$mensagemUsuario = array("success", "Usuário adicionado com sucesso.");
				}
				else
				{
					$mensagemUsuario = array("danger", "Erro ao adicionar usuário.");	
				}
			}
			else
			{
				//Deleta usuário
				if ($_POST['tipo'] == '2')
				{
					$this->Model->deletaUsuario($_POST['userid']);
				}
			}
		}

		$empresa = $this->Model->getDadosEmpresa($_SESSION['empresa']);
		$usuarios = $this->Model->getUsuarios($_SESSION['empresa']);
		require(LOCAL_ESTABELECIMENTO.DS."cadastro.php");
	}

}
?>