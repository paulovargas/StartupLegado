<?php
	
	
	$host = "localhost";
	$user = "root";
	$pass = "";
	$bank = "estagio";
	
	$conn = mysqli_connect( $host, $user, $pass, $bank);
	
	
		$vid = $_POST['idEvenR'];
		$id = $_POST['idAnimal'];
		
   
		$sql = "update eventos set nome = '{$_POST['nome']}', local = '{$_POST['local']}', data_evento = '{$_POST['data']}', descri = '{$_POST['descri']}' , obser = '{$_POST['obser']}' where idevenR = $vid";
      
		$exec = mysqli_query($conn,$sql);
		
		//mysqli_close($conn);
			
		header("location: index.php?pagina=verEventosAnimal&id=$id");

?>