<?php

class Seguranca
{
	
	var $naoProtegidas = array('login', 'esqueci', 'recuperar', 'cadastro');
	//private $redirecionar = "".BASE_SITE_MENU."inicial";

	function __construct($url="inicial")
	{
		session_start();

		//DESENVOLVER AQUI OS COOKIES!!!!

		/*
		* Verificar se o usuário está logado
		* Caso não, redireciona para o login
		*/
		if(!isset($_SESSION['usuario']) || empty($_SESSION['usuario'])) 
		{
		    /*
		    * Se o usuário não estiver logado 
		    * E estiver acessando páginas protegidas, vão para login
		    */
		    if(!in_array($url, $this->naoProtegidas))
		   	{
		   		header("Location: ".BASE_SITE_MENU."login");
 		   	}
		}
		else
		{
			//Se o usuário está logado, bloqueia acesso a páginas não protegidas
			if(in_array($url, $this->naoProtegidas))
			{
				header("Location: ".BASE_SITE_MENU."inicial");
			}

			//Se não estiver nenhuma empresa selecionada para verificação dos dados
			if(!isset($_SESSION['empresa']) || empty($_SESSION['empresa'])) 
			{
				header("Location: ".BASE_SITE_MENU."seleciona");
			}			
		}
	


	}
}
?>