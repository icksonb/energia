<?php
class Usuarios
{
	private $id;
	private $usuario;
	private $email;
	private $telefone;
	private $primeiroNome;
	private $sobrenome;
	private $genero;
	private $verificacao;

	public function getId()
	{
	    return $this->id;
	}
	
	public function setId($id)
	{
	    return $this->id = $id;
	}
	
	public function getUsuario()
	{
	    return $this->usuario;
	}
	
	public function setUsuario($usuario)
	{
	    return $this->usuario = $usuario;
	}

	public function getEmail()
	{
	    return $this->email;
	}
	
	public function setEmail($email)
	{
	    return $this->email = $email;
	}

	public function getTelefone()
	{
	    return $this->telefone;
	}
	
	public function setTelefone($telefone)
	{
	    return $this->telefone = $telefone;
	}

	public function getPrimeiroNome()
	{
	    return $this->primeiroNome;
	}
	
	public function setPrimeiroNome($primeiroNome)
	{
	    return $this->primeiroNome = $primeiroNome;
	}

	public function getSobrenome()
	{
	    return $this->sobrenome;
	}
	
	public function setSobrenome($sobrenome)
	{
	    return $this->sobrenome = $sobrenome;
	}

	public function getGenero()
	{
	    return $this->genero;
	}
	
	public function setGenero($genero)
	{
	    return $this->genero = $genero;
	}

	public function getVerificacao()
	{
	    return $this->verificacao;
	}
	
	public function setVerificacao($verificacao)
	{
	    return $this->verificacao = $verificacao;
	}
}
?>