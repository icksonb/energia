<?php
class Seleciona
{
	var $Model;

	function __construct()
	{
		require(ROOT.DS."Model".DS."selecionaModel.php");
		$this->Model = new selecionaModel();
	}

	public function seleciona()
	{

		if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			//Se for admin, já retorna normalmente
			if($this->Model->verificaUsuarioEmpresa() || $_SESSION['admin'])
			{
				$_SESSION["empresa"] = $_POST["empresa"];
				header("Location: ".BASE_SITE_MENU."inicial");
			}
		}

		$empresas = $this->Model->listaEmpresasUsuarios();

		//Lista todas as empresas, caso seja o admin
		if($_SESSION['admin'])
			$empresas = $this->Model->listaEmpresasAdmin();
		
		//Se tiver somente uma empresa, já redireciona
		if(is_array($empresas) && count($empresas) == 1)
		{
			foreach($empresas as $id => $nome)
			{
				$idEmpresa = $id;
			}

			$_SESSION["empresa"] = $idEmpresa;
			header("Location: ".BASE_SITE_MENU."inicial");
		}
		else
		{
			require(ROOT.DS."View".DS."seleciona.php");	
		}
		
	}
}
?>