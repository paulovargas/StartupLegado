<?php


// Se não postar nada
if ( ! isset( $_POST ) || empty( $_POST ) ) {
	
	// Mensagem para o usuário
	echo 'Nada a publicar!';
	
	// Mata o script
	exit;
}
	//$id = $_POST[''];
	$data_nascimento = $_POST['Y'].$_POST['m'].$_POST['d'];

// Verifica campos em branco
foreach ( $_POST as $chave => $valor ) {
	// Cria as variáveis dinamicamente
	$$chave = $valor;
	
	// Verifica campos em branco
	if ( empty( $valor ) ) {
		// Mensagem para o usuário
		echo 'Existem campos em branco.';
		
		// Mata o script
		exit;
	}
}

	//$data_nascimento = date("Y/m/d");

// Verifica se todas as variáveis estão definidas
if (  
	   ! isset( $rebanho_id			)
	|| ! isset( $finalidade_animal_id)
	|| ! isset( $nome				 )
	|| ! isset( $especie			 )
	|| ! isset( $raca				 )	
	|| ! isset( $pelagem			 )
	|| ! isset( $numero_brincos		 )
	|| ! isset( $data_nascimento	 )
	|| ! isset( $peso				 )	
	|| ! isset( $descricao			 )
	   
) {
	// Mensagem para o usuário
	echo 'Existem variáveis não definidas.';
	echo "<br>$rebanho_id";
	echo "<br>$finalidade_animal_id";
	echo "<br>$nome";
	echo "<br>$especie";
	echo "<br>$raca";	
	echo "<br>$pelagem";
	echo "<br>$numero_brincos";
	echo "<br>$peso";
	echo "<br>$descricao";	

	// Mata o script
	exit;
}

// Inclui o arquivo de conexão
include('pdo.php');

// Prepara o envio
$prepara = $conexao_pdo->prepare("
	INSERT INTO `bufalo`.`animais` (
		
		`rebanho_id`,
		`finalidade_animal_id`,
		`nomeAnimal`,
		`especie`,
		`raca`,		
		`pelagem`,
		`numero_brincos`,
		`data_nascimento`,
		`peso`,	
		`descricao`
	) 
	VALUES
	( ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )
");

// Envia
$verifica = $prepara->execute(
	array(

		$rebanho_id,
		$finalidade_animal_id,
		$nome,
		$especie,
		$raca,		
		$pelagem,
		$numero_brincos,
		$data_nascimento,
		$peso,
		$descricao,		
		)
);

if ( $verifica ) {
	
	$id = $_POST['id'];
	
	header('location: sessao.php');
	
	// Mata o script
	exit;
} else {
	echo 'Erro ao enviar dados.';
	
	// Mata o script
	exit;
}

?>