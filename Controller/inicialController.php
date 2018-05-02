<?php
class Inicial
{
	var $Model;

	function __construct()
	{
		require(ROOT.DS."Model".DS."inicialModel.php");
		$this->Model = new inicialModel();
	}

	public function inicial()
	{
		require(ROOT.DS."View".DS."inicial.php");
	}
}
?>