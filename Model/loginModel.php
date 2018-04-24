<?php
require_once(ROOT.DS.'DAO'.DS.'usuariosDAO.php');
class loginModel
{

	var $usuario;
	var $senha;
	var $mensagem;
	var $bancoDados;

	var $id;
	var $email;
	var $primeiroNome;
	var $verificacao;

	function __construct()
	{
		$this->mensagem = "";
		$this->usuario = "";
		$this->senha = "";

		$this->id = "";
		$this->usuario = "";
		$this->email = "";
		$this->primeiroNome = "";
		$this->verificacao = '0';

		$this->bancoDados = new usuariosDAO();
	}

	public function retornaMensagem()
	{
		return $this->mensagem;
	}

	public function organizaDados()
	{
		$this->usuario = $_POST['usuario'];
		$this->senha = $_POST['senha'];
	}

	public function verificaLogin()
	{
		$this->organizaDados();

		$retornoDB = $this->bancoDados->select('id, senha, usuario, email, primeiroNome, verificacao',
		'WHERE usuario=\''.$this->usuario.'\'');

		//Se o usuário não for encontrado
		if (!isset($retornoDB) || empty($retornoDB))
		{
			$this->mensagem = "Usuário e/ou senha incorretos.";
			return false;
		}

		else
		{
			$senhaStr = $this->senha;
			foreach($retornoDB as $row)
			{
				$this->id = $row['id'];
				$this->senha = $row['senha'];
				$this->usuario = $row['usuario'];
				$this->email = $row['email'];
				$this->primeiroNome = $row['primeiroNome'];
				$this->verificacao = $row['verificacao'];
			}

			//Se tiver tudo certo
			var_dump($senhaStr." ".$this->senha);
			if(password_verify($senhaStr, $this->senha))
			{
				//Verifica se o e-mail está confirmado
				if ($verificacao === '0')
				{
					$this->mensagem = "E-mail não confirmado.";
					return false;
				}
				else
				{
					return true;
				}
			}
			//Se a senha não corresponde
			else
			{
				$this->mensagem = "Usuário e/ou senha incorretos.";
				return false;
			}
		}
	}

	public function cadastraSessao()
	{
		$_SESSION['id'] = $this->id;
		$_SESSION['usuario'] = $this->usuario;
		$_SESSION['email'] = $this->email;
		$_SESSION['primeiroNome'] = $this->primeiroNome;
	}

	
}

?>