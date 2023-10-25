<?php
	
	
	
	$host = "localhost";
	$user = "root";
	$pass = "";
	$bank = "estagio";
	
	$conn = mysqli_connect( $host, $user, $pass, $bank);
	
	
		$vid = $_POST['id'];
   
		$sql = "update propriedade set nomePropriedade = '{$_POST['nomePropriedade']}', localidade = '{$_POST['localidade']}' where id = $vid";
      
		$exec = mysqli_query($conn,$sql);
			
		header("location: index.php?pagina=verPropriedades");

?>