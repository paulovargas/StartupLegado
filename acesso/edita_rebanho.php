<?php
	
	
	
	$host = "localhost";
	$user = "root";
	$pass = "";
	$bank = "estagio";
	
	$conn = mysqli_connect( $host, $user, $pass, $bank);
	
	
		$vid = $_POST['id'];
   
		$sql = "update rebanho set nomeRebanho = '{$_POST['nomeRebanho']}', descriRebanho = '{$_POST['descriRebanho']}' where id = $vid";
      
		$exec = mysqli_query($conn,$sql);
			
		header("location: index.php?pagina=verRebanhos");

?>