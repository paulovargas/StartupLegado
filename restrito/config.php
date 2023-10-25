<?php
	// inicia a sessão 
	session_start();
	
	
	$servidor = "p7890v.vps-kinghost.net";
	$login = "dba";
	$senha = "Senha123*";
	$base = "cabanha_custodia";
	
	

	// conecta ao bd
	$conecta = mysqli_connect($servidor, $login, $senha, $base) or die ("Erro: ".mysqli_connect_error());
	
		
?>