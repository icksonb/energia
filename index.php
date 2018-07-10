<?php

	//Páginas que não necessitam de Controller
	$paginaSemController = array('API', 'Assets');

	//Adiciona os headers necessários
	header('Content-Type: text/html; charset=utf-8');

	//Define os separadores para importar os arquivos
	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', dirname(__FILE__));
	
	require(ROOT.DS.'App'.DS.'Core'.DS.'config.php');

	/* Adiciona o arquivo AutoLoad 
	*  (responsável por chamar o controller e módulos adicionais)
	*/
	require 'App'.DS.'Core'.DS.'AutoLoad.php';

	/*
	* Separa em dois arquivos, separados por '/'
	* o primeiro é o controller (chamado logo a seguir)
	* o segundo é o action do controller
	*/

	$var = explode("/", $_SERVER['PATH_INFO']);
	
	//Se tiver sem endereço
	if(count($var) == 1)
		header("Location: ".BASE_SITE_MENU."inicial");
	
	/*
	* Se a página não tiver controller, não ativa o AutoLoad
	* Páginas - API, Assets
	*/
	if(!in_array($var[1], $paginaSemController))
	{
		//Se tiver apenas o primeiro parâmetros
		if (count($var) <= 2)
			$AutoLoad = new AutoLoad($var[1], ""); //Adiciona o php do Controller (a 2 variável é igual a 1)
		else
			$AutoLoad = new AutoLoad($var[1], $var[2]); //Adiciona o php do Controller
	}	
?>