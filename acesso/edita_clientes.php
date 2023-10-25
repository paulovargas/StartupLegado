<?php
	
	
	
	$host = "localhost";
	$user = "root";
	$pass = "";
	$bank = "bufalo";
	
	$conn = mysqli_connect( $host, $user, $pass, $bank);
	
	
		$vid = $_POST['id'];
   
		$sql = "update cliente set nome_cliente = '{$_POST['nome_cliente']}', endereco = '{$_POST['endereco']}', cidade = '{$_POST['cidade']}', estado = '{$_POST['estado']}', telefone = '{$_POST['telefone']}', email = '{$_POST['email']}', cpf_cnpj = '{$_POST['cpf_cnpj']}', inscricao_est = '{$_POST['inscricao_est']}', num_usuarios = '{$_POST['num_usuarios']}' where id = $vid";
      
		$exec = mysqli_query($conn,$sql);
			
		header("location: admin.php?pagina=vertodosclientes");

?>