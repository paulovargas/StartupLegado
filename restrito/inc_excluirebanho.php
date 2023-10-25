<?php

	
	$host = "mysql16-farm76.kinghost.net";
	$user = "cabanhacus_add1";
	$pass = "Senha123*";
	$bank = "cabanhacustodi";

	
	$conn = mysqli_connect( $host, $user, $pass, $bank);
	
	if(mysqli_connect_errno($conn)){
		echo "Erro na conexão";
	}else{
		
			
		$vid = $_GET['id'];
   
		$sql = "delete from rebanho where id = $vid";
      
		$exec = mysqli_query($conn,$sql);

                header("location: index.php?pagina=verRebanhos");
		
		
		}

?>	