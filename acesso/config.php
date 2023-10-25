<?
	// inicia a sessão 
	session_start();
	
	
	// atribui valores às variáveis de conexão ao bd
	$servidor = "localhost";
	$login = "root";
	$senha = "";
	$base = "cabanha_custodia";
	
	

	// conecta ao bd
	$conecta = mysqli_connect($servidor, $login, $senha, $base) or die ("Erro: ".mysqli_connect_error());
	
		
?>