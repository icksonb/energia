<?php
	
class AutoLoad
{
	private $Controller;

	function __construct($url="inicial", $action="")
	{
		
		require('seguranca.php');		

		//Verifica a segurança
		$Seguranca = new Seguranca($url);

		
		if ($url != 'Assets')
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