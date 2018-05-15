<?php

class Empresas
{
	private $ID;
	private $NOME;
	private $ENDERECO;
	private $AREA;
	private $RESPONSAVEL;
	private $TELEFONE;
	private $CPF_CNPJ;
	private $COMENTARIOS;
	private $FATURAMENTO_CADASTRO;
	private $FATURAMENTO_ATUAL;


	public function getID()
	{
	    return $this->ID;
	}
	
	public function setID($ID)
	{
	    return $this->ID = $ID;
	}

	public function getNOME()
	{
	    return $this->NOME;
	}
	
	public function setNOME($NOME)
	{
	    return $this->NOME = $NOME;
	}

	public function getENDERECO()
	{
	    return $this->ENDERECO;
	}
	
	public function setENDERECO($ENDERECO)
	{
	    return $this->ENDERECO = $ENDERECO;
	}

	public function getAREA()
	{
	    return $this->AREA;
	}
	
	public function setAREA($AREA)
	{
	    return $this->AREA = $AREA;
	}

	public function getRESPONSAVEL()
	{
	    return $this->RESPONSAVEL;
	}
	
	public function setRESPONSAVEL($RESPONSAVEL)
	{
	    return $this->RESPONSAVEL = $RESPONSAVEL;
	}

	public function getTELEFONE()
	{
	    return $this->TELEFONE;
	}
	
	public function setTELEFONE($TELEFONE)
	{
	    return $this->TELEFONE = $TELEFONE;
	}

	public function getCPF_CNPJ()
	{
	    return $this->CPF_CNPJ;
	}
	
	public function setCPF_CNPJ($CPF_CNPJ)
	{
	    return $this->CPF_CNPJ = $CPF_CNPJ;
	}

	public function getCOMENTARIOS()
	{
	    return $this->COMENTARIOS;
	}
	
	public function setCOMENTARIOS($COMENTARIOS)
	{
	    return $this->COMENTARIOS = $COMENTARIOS;
	}

	public function getFATURAMENTO_CADASTRO()
	{
	    return $this->FATURAMENTO_CADASTRO;
	}
	
	public function setFATURAMENTO_CADASTRO($FATURAMENTO_CADASTRO)
	{
	    return $this->FATURAMENTO_CADASTRO = $FATURAMENTO_CADASTRO;
	}

	public function getFATURAMENTO_ATUAL()
	{
	    return $this->FATURAMENTO_ATUAL;
	}
	
	public function setFATURAMENTO_ATUAL($FATURAMENTO_ATUAL)
	{
	    return $this->FATURAMENTO_ATUAL = $FATURAMENTO_ATUAL;
	}
}

?>