<?php

require_once(BASE_DAO.DS.'empresasDAO.php');
require_once(BASE_DAO.DS.'usuariosDAO.php');
require_once(BASE_DAO.DS.'usuariosEmpresasDAO.php');
require_once(BASE_DAO.DS.'dispositivosDAO.php');


class estabelecimentoModel
{

	private $empresasBD;
	private $usuariosEmpresasBD;
	private $usuariosBD;
	private $dispositivosBD;
	
	function __construct()
	{
		$this->empresasBD = new empresasDAO();
		$this->usuariosBD = new usuariosDAO();
		$this->usuariosEmpresasBD = new usuariosEmpresasDAO();
		$this->dispositivosBD = new dispositivosDAO();
	}

	public function getDadosEmpresa($id)
	{
		return $this->empresasBD->select('*', "WHERE ID=?", 
			array($id), "empresas");
	}	

	public function getUsuarios($id)
	{
		//Seleciona o Array com os Usuarios por empresa
		$retornoDB = $this->usuariosEmpresasBD->select("USUARIOS_ID", "WHERE EMPRESAS_ID=?", 
			array($_SESSION['empresa']));

		$usuarios = array();

		foreach ($retornoDB as $row)
		{
			array_push($usuarios, $this->usuariosBD->select('*', "WHERE id=?", 
				array($row['USUARIOS_ID']), "usuarios"));
		}

		return $usuarios;

	}

	public function atualizaCadastro()
	{
		$campos = array();
		$valores = array();
		foreach ($_POST as $key => $value) 
		{
			array_push($campos, $key);
			array_push($valores, $value);
		}

		return $this->empresasBD->update($campos, $valores, "ID=".$_SESSION['empresa']);
	}

	public function adicionaUsuario($usuario="-")
	{
		$retornoDB = $this->usuariosBD->select('id', "WHERE usuario=?", array($usuario));

		//Verifica se o usuário existe
		if(count($retornoDB) == 0)
			return false;
		else
		{
			//Pega o ID do usuário fornecido
			foreach ($retornoDB as $row)
			{
				$id = $row['id'];
			}

			//Lista os usuários disponíveis por empresa
			$retornoDB = $this->usuariosEmpresasBD->select("USUARIOS_ID", "WHERE EMPRESAS_ID=?", 
			array($_SESSION['empresa']));
			$ids = array();
			foreach ($retornoDB as $row)
			{
				array_push($ids, $row['USUARIOS_ID']);
			}

			//Verifica se o usuário já está adicionado
			if(in_array($id, $ids))
				return false;

			if ($this->usuariosEmpresasBD->insert("EMPRESAS_ID, USUARIOS_ID", 
				array($_SESSION['empresa'], $id)) > 0)
				return true;
			else
				return false;
		}
	}

	public function deletaUsuario($usuario="-")
	{
		$this->usuariosEmpresasBD->delete("EMPRESAS_ID=? AND USUARIOS_ID=?", 
			array($_SESSION['empresa'], $usuario));
	}

	/*
	* RETORNA OS DADOS DOS DISPOSITIVOS
	*/
	public function getDispositivos()
	{
		
		$dispositivos = $this->dispositivosBD->select("*", "WHERE ATIVADO=?", array("1"), "dispositivos");	
		return $dispositivos;
	}
}

?>