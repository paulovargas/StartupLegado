﻿<?php
	
	
	
	$host = "mysql08-farm76.kinghost.net";
	$user = "sistemabuf_add1";
	$pass = "Senha123*";
	$bank = "sistemabuffalo";
	
	$conn = mysqli_connect( $host, $user, $pass, $bank);
	
		$vid = $_POST['idanimal'];	
	
		$numero_brincos = $_POST['numero_brincos'];
		$especie = $_POST['especie'];	
		$data_nascimento = $_POST['data_nascimento'];
		$status =  $_POST['status'];
		$raca = $_POST['raca'];
		$pelagem = $_POST['pelagem'];
		$peso = $_POST['peso'];
		$rebanho_id = $_POST['rebanho_id'];
		$propriedade_id = $_POST['propriedade_id'];
		$descricao = $_POST['descricao'];
   
		$sql = "update animais set numero_brincos = '{$_POST['numero_brincos']}', especie = '{$_POST['especie']}', data_nascimento = '{$_POST['data_nascimento']}', status = '{$_POST['status']}', raca = '{$_POST['raca']}', pelagem = '{$_POST['pelagem']}', prenhez = '{$_POST['prenhez']}', rebanho_id = '{$_POST['rebanho_id']}', propriedade_id = '{$_POST['propriedade_id']}', descricao = '{$_POST['descricao']}' where idanimal = $vid";
       
		$exec = mysqli_query($conn,$sql);
		
		//mysqli_close($conn);
			
		header("location: sessao.php");

?>