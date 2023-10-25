<?php
// Se não postar nada
if ( ! isset( $_POST ) || empty( $_POST ) ) {
	
	// Mensagem para o usuário
	echo 'Nada a publicar!';

	// Mata o script
	exit;
}

print_r($_POST);

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

		echo '<br>Cliente_id:'.$cliente_id;
		echo '<br>Nome'.$nome;
		echo '<br>Email'.$email;
		echo '<br>Senha'.$senha;


// Verifica se todas as variáveis estão definidas
if (  
	   ! isset( $cliente_id	)
	|| ! isset( $nome		)	   
	|| ! isset( $email		)
	|| ! isset( $senha		)
	   
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
	INSERT INTO `bufalo`.`usuario` (
		`Cliente_id`,
		`nome`,
		`email`,
		`senha`
	) 
	VALUES
	( ?, ?, ?, ? )
");

// Envia
$verifica = $prepara->execute(
	array(
		$cliente_id,
		$nome,
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