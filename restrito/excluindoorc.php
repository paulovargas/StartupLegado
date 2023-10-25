<?php

	
	$host = "localhost";
	$user = "root";
	$pass = "";
	$bank = "bufalo";
	
	$conn = mysqli_connect( $host, $user, $pass, $bank);
	
	if(mysqli_connect_errno($conn)){
		echo "Erro na conexão";
	}else{
		
		echo "Conexão Ativa!";
	
		$vid = $_GET['id'];
   
		$sql = "delete from orcamento where id = $vid";
      
		$exec = mysqli_query($conn,$sql);
	
		header("location: admin.php");}

?>