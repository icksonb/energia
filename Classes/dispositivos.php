<?php

class Dispositivos
{
	private $ID;
	private $LOCAL;
	private $IDEMPRESA;
	private $DESCRICAO;
	private $CONSUMO;
	private $ATIVADO;

	public function getID()
	{
	    return $this->ID;
	}
	
	public function setID($ID)
	{
	    return $this->ID = $ID;
	}

	public function getIDEMPRESA()
	{
	    return $this->IDEMPRESA;
	}
	
	public function setIDEMPRESA($IDEMPRESA)
	{
	    return $this->IDEMPRESA = $IDEMPRESA;
	}

	public function getLOCAL()
	{
	    return $this->LOCAL;
	}
	
	public function setLOCAL($LOCAL)
	{
	    return $this->LOCAL = $LOCAL;
	}

	public function getDESCRICAO()
	{
	    return $this->DESCRICAO;
	}
	
	public function setDESCRICAO($DESCRICAO)
	{
	    return $this->DESCRICAO = $DESCRICAO;
	}

	public function getCONSUMO()
	{
	    return $this->CONSUMO;
	}
	
	public function setCONSUMO($CONSUMO)
	{
	    return $this->CONSUMO = $CONSUMO;
	}

	public function getATIVADO()
	{
	    return $this->ATIVADO;
	}
	
	public function setATIVADO($ATIVADO)
	{
	    return $this->ATIVADO = $ATIVADO;
	}

	public function isATIVADO()
	{
		if($this->ATIVADO == "1")
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function isCONSUMO()
	{
		if($this->CONSUMO == "1")
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function estadoCONSUMO()
	{
		if($this->CONSUMO == "1")
		{
			return "SIM";
		}
		else
		{
			return "NÃO";
		}
	}

}

?>