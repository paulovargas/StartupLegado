<?php


	$host = "mysql08-farm76.kinghost.net";
	$user = "sistemabuf_add1";
	$pass = "Senha123*";
	$bank = "sistemabuffalo";	
	
	$conn = mysqli_connect( $host, $user, $pass, $bank);
	
	if(mysqli_connect_errno($conn)){
		
		exit;
	}
	else
	{
	
		$vid = $_GET['id'];
		$idA = $_GET['idAnimal'];
   
		$sql = "delete from eventos where idevenR = $vid";
      
		$exec = mysqli_query($conn,$sql);
			
		
		header("location: index.php?pagina=verEventosAnimal&id=$idA");
		
		
		
	}
	
?>