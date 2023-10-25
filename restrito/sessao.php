<?
		session_start();
		
		$id = $_SESSION['usuario']['cliente_id'];
	
		header("location: index.php?pagina=verAnimais&id=$id");
?>