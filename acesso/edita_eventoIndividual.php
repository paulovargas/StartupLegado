<?php
	
	
	
	$host = "localhost";
	$user = "root";
	$pass = "";
	$bank = "estagio";
	
	$conn = mysqli_connect( $host, $user, $pass, $bank);
	
	
		$vid = $_POST['idevenR'];
		$id = $_POST['idAnimal'];
		
   
		$sql = "update eventos_rebanho set idevenR = '{$_POST['idevenR']}', rebanho_id = '{$_POST['rebanho_id']}', nome = '{$_POST['nome']}', local_eve = '{$_POST['local_eve']}', descri = '{$_POST['descri']}' where idevenR = $vid";
      
		$exec = mysqli_query($conn,$sql);
		
		//mysqli_close($conn);
			
		header("location: index.php?pagina=verEventosAnimal&id=id");

?>