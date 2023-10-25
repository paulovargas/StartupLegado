<?php
// Se não postar nada
if ( ! isset( $_POST ) || empty( $_POST ) ) {
	
	// Mensagem para o usuário
	echo 'Nada a publicar!';
	
	// Mata o script
	exit;
}

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
	   ! isset( $nome	)  
	|| ! isset( $cpf	)
	|| ! isset( $cargo	)
	|| ! isset( $email	)
	|| ! isset( $senha)
	   
) {
	// Mensagem para o usuário
	echo 'Existem variáveis não definidas.';

	// Mata o script
	exit;
}

// Inclui o arquivo de conexão
include('pdo.php');

// Prepara o envio
	
	$senha = MD5($senha);

$prepara = $conexao_pdo->prepare("
	INSERT INTO `bufalo`.`admin` (
		`nome`,
		`cpf`,
		`cargo`,
		`email`,
		`senha`
	) 
	VALUES
	( ?, ?, ?, ?, ? )
");

// Envia
$verifica = $prepara->execute(
	array(
		$nome,
		$cpf,
		$cargo,
		$email,
		$senha,
		)
);

if ( $verifica ) {
	
	header("location: admin.php");
	
	// Mata o script
	exit;
} else {
	echo 'Erro ao enviar dados.';
	
	// Mata o script
	exit;
}

?>