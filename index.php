<?php

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
	if (count($var) <= 2)
		$AutoLoad = new AutoLoad($var[1], ""); //Adiciona o php do Controller
	else
		$AutoLoad = new AutoLoad($var[1], $var[2]); //Adiciona o php do Controller
	

	/*

	CHAMAR NO MODEL!!!!!!!!!!!

	echo "<br>METODO: ".$_SERVER['REQUEST_METHOD'];

	$param = $_REQUEST;

	foreach($param as $key=>$val) 
	{
		echo "<br>CHAVE: ".$key;
		echo "<br>VALOR: ".$val;
	}
	*/
?>