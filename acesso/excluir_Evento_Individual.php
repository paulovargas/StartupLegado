<?php


	$host = "localhost";
	$user = "root";
	$pass = "";
	$bank = "estagio";
	
	//$host = "localhost";
	//$user = "root";
	//$pass = "";
	//$bank = "estagio";
	
	//$id = $_SESSION['usuario']['cliente_id'];
	
	$vid = $_GET['id'];
	//$id = $_GET['aid'];
	
	
	
	
	$conn = mysqli_connect( $host, $user, $pass, $bank);
	
	if(mysqli_connect_errno($conn)){
		echo "Erro na conexão";
	}else{
		
		//echo "Conexão Ativa!";
	
		//$vid = $_GET['id'];
   
		$sql = "delete from eventos where idevenR = $vid";
      
		$exec = mysqli_query($conn,$sql);
		
		header("location: index.php?pagina=verAnimais");
	
		//header('index.php');
		//include('inc_verAnimais.php');
		
		}
	
	//$conn = mysqli_connect( $host, $user, $pass, $bank);
	
	//if(mysqli_connect_errno($conn)){
		//echo "Erro na conexão";
	//}
	//else{
		
		//echo "Conexão Ativa!";
	
		
   
		//$sql = "delete from eventos where idevenR = $vid and animal_id = $id";
		
		
		
		//$exec = mysqli_query($conn,$sql);

		//exit;
		
		//}
		
		//header("location: index.php?pagina=verEventosAnimal&id=$id");
	
		
?>