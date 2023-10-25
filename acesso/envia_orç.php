<?php
// Se não postar nada
if ( ! isset( $_POST ) || empty( $_POST ) ) {
	
	// Mensagem para o usuário
	echo 'Nada a publicar!';
	
	// Mata o script
	exit;
}

	$data = date("Y/m/d");

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

// Verifica se todas as variáveis estão definidas
if (  
	   ! isset($nome	)
	|| ! isset($email   )
	|| ! isset($telefone)
	|| ! isset($animais )
	|| ! isset($data	)
	   
) {
	// Mensagem para o usuário
	echo "Existem variáveis não definidas.<br>";
	echo "<br>$nome<br>";
	echo "<br>$email<br>";
	echo "<br>$telefone<br>";
	echo "<br>$animais<br>";
	echo "<br>$data<br>";
	
	
	// Mata o script
	exit;
}

// Inclui o arquivo de conexão
include('pdo.php');

// Prepara o envio
$prepara = $conexao_pdo->prepare("
	INSERT INTO `bufalo`.`orcamento` (
		`nome`,
		`email`,
		`telefone`,		
		`qtd_animais`,		
		`data`
	) 
	VALUES
	( ?, ?, ?, ?, ? )
");

// Envia
$verifica = $prepara->execute(
	array(
		$nome,
		$email,		
		$telefone,
		$animais,
		$data,
		)
);

if ( $verifica ) {
	
	header("location: ../index.php");
	
	// Mata o script
	exit;
} else {
	echo 'Erro ao enviar dados.';
	
	// Mata o script
	exit;
}

?>