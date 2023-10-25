<?php


	$host = "localhost";
	$user = "root";
	$pass = "";
	$bank = "estagio";	
	
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
		
		
		//echo "<br>Evento número :$vid";
		//echo "<br>Animal : $id";
		
		exit;
			
		
		header("location: index.php?pagina=verEventosAnimal&id=$idA");
		//include('inc_verEventosAnimal&id=$idA');
		
		exit;
		
		
		
	}
	
?>