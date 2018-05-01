<?php

require_once(ROOT.DS.'DAO'.DS.'empresasDAO.php');
require_once(ROOT.DS.'DAO'.DS.'usuariosEmpresasDAO.php');

class selecionaModel
{

	var $empresasDAO;
	var $usuariosEmpresasDAO;
	
	var $idsNomesEmpresas;

	var $usuariosIds;
	var $nomesEmpresas;
	
	function __construct()
	{
		$this->usuariosIds = "";
		$this->nomesEmpresas = "";

		$this->idsNomesEmpresas = "";

		$this->empresasDAO = new empresasDAO();
		$this->usuariosEmpresasDAO = new usuariosEmpresasDAO();
	}

	/*
	* RETORNA OS IDS + NOMES DAS EMPRESAS, VERIFICANDO SE O USUÁRIO TEM ACESSO
	*/
	public function listaEmpresasUsuarios()
	{
		//Seleciona o Array com os IdsEmpresas que os usuários podem acessar
		$retornoDB = $this->usuariosEmpresasDAO->select("EMPRESAS_ID", "WHERE USUARIOS_ID=?", array($_SESSION['id']));

		foreach ($retornoDB as $row)
		{
			$this->usuariosIds[] = $row['EMPRESAS_ID'];
		}

		//Seleciona o nome das empresas
		foreach($this->usuariosIds as $usuarioId)
		{
			$retornoDB = $this->empresasDAO->select("NOME", "WHERE ID=?", array($usuarioId));
			foreach($retornoDB as $row)
			{
				$this->nomesEmpresas[] = $row['NOME'];
				$this->idsNomesEmpresas[$usuarioId] = $row['NOME'];
			}
		}

		return $this->idsNomesEmpresas;
		
	}

	/*
	* VERIFICA SE O USUÁRIO TEM PERMISSÃO PARA AQUELA EMPRESA
	*/
	public function verificaUsuarioEmpresa()
	{
		if($this->usuariosEmpresasDAO->count("USUARIOS_ID", "USUARIOS_ID=? AND EMPRESAS_ID=?", 
			array($_SESSION['id'], $_POST["empresa"])) > 0)
			return true;
		else
			return false;
	}

	public function retornaUsuariosIds()
	{
		return $this->usuariosIds;
	}

	public function retornaNomesEmpresas()
	{
		return $this->nomesEmpresas;
	}



}
?>