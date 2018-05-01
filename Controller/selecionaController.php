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
			if($this->Model->verificaUsuarioEmpresa())
			{
				$_SESSION["empresa"] = $_POST["empresa"];
				header("Location: ".BASE_SITE_MENU."inicial");
			}
		}

		$empresas = $this->Model->listaEmpresasUsuarios();
		require(ROOT.DS."View".DS."seleciona.php");
	}
}
?>