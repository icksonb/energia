<?php
require_once(BASE_DAO.DS.'usuariosDAO.php');
class cadastroModel
{

	var $cadastro = array();
	var $mensagem;
	var $bancoDados;

	function __construct()
	{
		$this->cadastro['primeiro'] = "";
		$this->cadastro['sobrenome'] = "";
		$this->cadastro['email'] = "";
		$this->cadastro['telefone'] = "";
		$this->cadastro['usuario'] = "";
		$this->cadastro['genero'] = "";

		$this->mensagem = "";

		$this->bancoDados = new usuariosDAO();
	}

	public function dadosCadastro()
	{
		return $this->cadastro;
	}

	public function retornaMensagem()
	{
		return $this->mensagem;
	}

	public function retornaDados()
	{
		return $this->cadastro;
	}

	/*
	* VERIFICA SE OS DADOS SEGUEM OS PADRÕES ESTABELECIDOS
	*/	

	public function verificaDados()
	{

		if (isset($_POST['primeiro']) && !empty($_POST['primeiro']) &&
		strlen($_POST['primeiro']) > 5)
			$this->cadastro['primeiro'] = $_POST['primeiro'];
		else 
			$this->mensagem = "Erro no campo Primeiro Nome";

		if (isset($_POST['sobrenome']) && !empty($_POST['sobrenome']) &&
		strlen($_POST['sobrenome']) > 5)
			$this->cadastro['sobrenome'] = $_POST['sobrenome'];
		else 
			$this->mensagem = "Erro no campo Sobrenome";

		if (isset($_POST['email']) && !empty($_POST['email']))
			$this->cadastro['email'] = $_POST['email'];
		else 
			$this->mensagem = "Erro no campo email";

		if (isset($_POST['telefone']) && !empty($_POST['telefone']))
			$this->cadastro['telefone'] = $_POST['telefone'];
		else 
			$this->mensagem = "Erro no campo telefone";

		if (isset($_POST['usuario']) && !empty($_POST['usuario']))
			$this->cadastro['usuario'] = $_POST['usuario'];
		else 
			$this->mensagem = "Erro no campo usuario";

		if (isset($_POST['genero']) && !empty($_POST['genero']))
			$this->cadastro['genero'] = $_POST['genero'];
		else 
			$this->mensagem = "Erro no campo genero";

		//Se já estiver ocorrido um erro anterior
		if ($this->mensagem != "")
			return false;
		
		$this->cadastro['senha'] = $_POST['senha'];
		return true;
	}


	/*
	* VERIFICA SE O USUÁRIO JÁ EXISTE
	*/
	public function verificaUsuario()
	{
		$retornoDB = $this->bancoDados->count('usuario', 
		'usuario=\''.$this->cadastro['usuario'].'\'');

		foreach($retornoDB as $row)
		{
   			$contaUsuario = $row['COUNT(usuario)'];
		}	

		if(intval($contaUsuario) > 0 || count($contaUsuario) > 1)
		{
			$this->mensagem = "Usuário já cadastrado.";

			return false;
		}
		else
		{
			return true;
		}
		
	}

	/*
	* VERIFICA SE O EMAIL JÁ EXISTE
	*/
	public function verificaEmail()
	{
		$retornoDB = $this->bancoDados->count('email', 
		'email=\''.$this->cadastro['email'].'\'');

		foreach($retornoDB as $row)
		{
   			$contaUsuario = $row['COUNT(email)'];
		}	

		if(intval($contaUsuario) > 0 || count($contaUsuario) > 1)
		{
			$this->mensagem = "Email já cadastrado.";

			return false;
		}
		else
		{
			return true;
		}
	}

	/*
	* CADASTRA O USUÁRIO
	*/
	public function cadastraUsuario()
	{
		$fields = "usuario, senha, email, telefone, primeiroNome, sobrenome, genero";
		$senha = password_hash($this->cadastro['senha'], PASSWORD_DEFAULT);
		$valores = array($this->cadastro['usuario'], $senha, $this->cadastro['email'], 
			$this->cadastro['telefone'], $this->cadastro['primeiro'], 
			$this->cadastro['sobrenome'], $this->cadastro['genero']);

		if( intval($this->bancoDados->insert($fields, $valores))) 
		{
			$this->mensagem = "Cadastro realizado com sucesso. 
			Confirme seu e-mail e <a href='login'>clique para entrar</a>.";
			return true;
		}
		else return false;
	}


}

?>