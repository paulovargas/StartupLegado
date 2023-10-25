<?php
	
	
	
	$host = "mysql08-farm76.kinghost.net";
	$user = "sistemabuf_add1";
	$pass = "Senha123*";
	$bank = "sistemabuffalo";
	
	$conn = mysqli_connect( $host, $user, $pass, $bank);
	
	
		$vid = $_POST['id'];
   
		$sql = "update rebanho set nomeRebanho = '{$_POST['nomeRebanho']}', descriRebanho = '{$_POST['descriRebanho']}' where id = $vid";
      
		$exec = mysqli_query($conn,$sql);
			
		header("location: index.php?pagina=verRebanhos");

?>