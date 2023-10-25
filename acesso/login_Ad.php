<?
	include('config.php');
	
	echo $_POST['email'] . ' e ' .$_POST['senha'];

	$senha = MD5($_POST['senha']);
	
	$sql = "SELECT * FROM admin where email = '{$_POST['email']}' and senha = '{$senha}' ";
	$result = mysqli_query($conecta, $sql); 

	if($consulta = mysqli_fetch_array($result)){ 
		$_SESSION['logado'] = 1;
		$_SESSION['admin']['id'] = $consulta['id'];
		$_SESSION['admin']['nome'] = $consulta['nome'];
		$_SESSION['admin']['cpf'] = $consulta['cpf'];
		$_SESSION['admin']['cargo'] = $consulta['cargo'];
		$_SESSION['admin']['email'] = $consulta['email'];
		$_SESSION['admin']['senha'] = $consulta['senha'];

		header("location:admin.php");
	}
	else
			header("location: ../");
?>