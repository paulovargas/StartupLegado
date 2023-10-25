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

	//$data_nascimento = date("Y/m/d");

// Verifica se todas as variáveis estão definidas
if (  
	   ! isset( $cliente_id			)
	|| ! isset( $nomeRebanho        )	
	|| ! isset( $descriRebanho		)
	   
) {
	// Mensagem para o usuário
	echo 'Existem variáveis não definidas.';
	echo "<br>$cliente_id";
	echo "<br>$nomeRebanho";
	echo "<br>$descriRebanho";	

	// Mata o script
	exit;
}

// Inclui o arquivo de conexão
include('pdo.php');

// Prepara o envio
$prepara = $conexao_pdo->prepare("
	INSERT INTO `cabanhacustodi`.`rebanho` (
		
		`cliente_id`,
		`nomeRebanho`,		
		`descriRebanho`
	) 
	VALUES
	( ?, ?, ? )
");

// Envia
$verifica = $prepara->execute(
	array(

		$cliente_id,
		$nomeRebanho,
		$descriRebanho,		
		)
);

if ( $verifica ) {
	
	header("location: index.php?pagina=verRebanhos");
	
	// Mata o script
	exit;
} else {
	echo 'Erro ao enviar dados.';
	
	// Mata o script
	exit;
}

?>