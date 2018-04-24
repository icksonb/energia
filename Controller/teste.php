<?php

class Teste
{
	public function actionTeste()
	{
		echo "<br> Entrou no teste";
		require(ROOT.DS."View".DS."teste.php");
	}
}

?>