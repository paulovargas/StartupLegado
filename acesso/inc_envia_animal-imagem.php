<?php

		$rebanho_id = $_POST['rebanho_id'];
		$finalidade_animal_id = $_POST['finalidade_animal_id'];
		$nome = $_POST['nomeAnimal'];
		$especie = $_POST['especie'];
		$raca = $_POST['raca'];
		$pelagem = $_POST['pelagem'];
		$numero_brincos = $_POST['numero_brincos'];
		$data_nascimento = $_POST['data_nascimento'];
		$peso = $_POST['peso'];
		$imagem = $_FILES['imagem'];
		$descricao = $_POST['descricao'];
		
		$host = "localhost";
		$username = "root";
		$password = "";
		$db = "bufalo";

if($imagem != NULL) { 
	$nomeFinal = time().'.jpg';
	if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
		$tamanhoImg = filesize($nomeFinal); 

		$mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg)); 

		mysql_connect($host,$username,$password) or die("Impossível Conectar"); 

		@mysql_select_db($db) or die("Impossível Conectar"); 

		mysql_query("INSERT INTO animais (foto) VALUES ('$mysqlImg')") or die("O sistema não foi capaz de executar a query");
		
		unlink($nomeFinal);
		
		//mysql_query("INSERT INTO animais VALUES ('$rebanho_id','$finalidade_animal_id','$nome','$especie','$raca','$pelagem','$numero_brincos','$data_nascimento','$peso','$mysqlImg','$descricao')") or die("O sistema não foi capaz de executar a query");

		
		
		header("location:exibir.php");
	}
} 
else { 
	echo"Você não realizou o upload de forma satisfatória."; 
} 


?>