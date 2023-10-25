<?php

	
	$host = "localhost";
	$user = "root";
	$pass = "";
	$bank = "estagio";
	
	$id = $_SESSION['usuario']['cliente_id'];
	
	$conn = mysqli_connect( $host, $user, $pass, $bank);
	
	if(mysqli_connect_errno($conn)){
		echo "Erro na conexão";
	}else{
		
		echo "Conexão Ativa!";
	
		$vid = $_GET['id'];
   
		$sql = "delete from eventos where idevenR = $vid";
      
		$exec = mysqli_query($conn,$sql);

		header('index.php');
		include('inc_vereventos.php');
	
		
		}

?>