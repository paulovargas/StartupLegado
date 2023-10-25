<?php
        $host = "mysql08-farm76.kinghost.net";
	$user = "sistemabuf_add1";
	$pass = "Senha123*";
	$bank = "sistemabuffalo";
	
	$conn = mysqli_connect( $host, $user, $pass, $bank);
	
	
		$vid = $_POST['idevenR'];               

		$id = $_POST['idAnimal'];
   
		$sql = "update eventos set rebanho_id = '{$_POST['rebanho_id']}', nome = '{$_POST['nome']}', local = '{$_POST['local']}', data_evento = '{$_POST['data_evento']}', descri = '{$_POST['descri']}' , obser = '{$_POST['obser']}' where idevenR = $vid";
      
		$exec = mysqli_query($conn,$sql);
		
		//mysqli_close($conn);

                session_start();
		
                $idC = $_SESSION['usuario']['cliente_id'];
			
		header("location: index.php?pagina=vereventos&id=$idC");

?>	