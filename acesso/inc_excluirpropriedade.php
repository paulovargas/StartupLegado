<?php

	
	$host = "localhost";
	$user = "root";
	$pass = "";
	$bank = "estagio";
	
	$conn = mysqli_connect( $host, $user, $pass, $bank);
	
	if(mysqli_connect_errno($conn)){
		echo "Erro na conexão";
	}else{
		
		echo "Conexão Ativa!";
	
		$vid = $_GET['id'];
   
		$sql = "delete from propriedade where id = $vid";
      
		$exec = mysqli_query($conn,$sql);
	
		header('index.php');
		include('inc_verPropriedades.php');
		
		}

?>