<?php
class Logout
{
	var $Model;

	public function logout()
	{
		
		//Destrói sessão
		$_SESSION = array();
		session_destroy();

		header("Location: ".BASE_SITE_MENU."login");

	}


}
?>