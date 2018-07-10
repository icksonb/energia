<?php
	
class AutoLoad
{
	private $Controller;

	function __construct($url="inicial", $action="")
	{
		
		require('seguranca.php');		

		//Verifica o nível de acesso
		if($url == 'API')
			$Seguranca = new Seguranca($url, $action); //Páginas de API
		else
			$Seguranca = new Seguranca($url); //Páginas normais (sem ser API)

		
		if ($url != 'Assets' || $url != 'API')
		{
			require(ROOT.DS."Controller".DS.$url."Controller.php");
		

			if($action == "")
			{
				$action = $url;
			}

			$Controller = new $url(); //Inicia classe do controller
			$Controller->$action(); //Invoca objeto (action) do controller
		}

	}


}

?>