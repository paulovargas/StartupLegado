<?php
	
	
	
	$host = "localhost";
	$user = "root";
	$pass = "";
	$bank = "bufalo";
	
	$conn = mysqli_connect( $host, $user, $pass, $bank);
	
	
		$vid = $_POST['id'];
   
		$sql = "update admin set nome = '{$_POST['nome']}', cpf = '{$_POST['cpf']}', cargo = '{$_POST['cargo']}', email = '{$_POST['email']}' where id = $vid";
      
		$exec = mysqli_query($conn,$sql);
			
		header("location: admin.php?pagina=vertodosadmin");

?>