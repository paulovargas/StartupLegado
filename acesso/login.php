<?php

	include('config.php');
	
	echo $_POST['email'] . ' e ' .$_POST['senha'];

	$senha = MD5($_POST['senha']);
	
	$sql = "SELECT * FROM usuario where email = '{$_POST['email']}' and senha = '{$senha}' ";
	$result = mysqli_query($conecta, $sql); 

	if($consulta = mysqli_fetch_array($result)) { 
		$_SESSION['logado'] = 1;
		$_SESSION['usuario']['id'] = $consulta['id'];
		$_SESSION['usuario']['cliente_id'] = $consulta['cliente_id
		'];
		$_SESSION['usuario']['nome'] = $consulta['nome'];
		$_SESSION['usuario']['email'] = $consulta['email'];

		header("location: index.php?pagina=relatorioGeral");
	}
	else
			header("location: ../");
?>