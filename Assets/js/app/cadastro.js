function cadastraDados()
{
	console.log("ENTROU");
	var request =  $.ajax({
		url: "API/cadastro.php", 
		method: "POST",
		data: "TESTE"
	});

	request.done( function(msg)
	{
		console.log(msg);
	});

	request.fail( function(response)
	{
		console.log("ERRO");
	});
} 