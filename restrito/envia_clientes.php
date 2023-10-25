<?php
// Se não postar nada
if ( ! isset( $_POST ) || empty( $_POST ) ) {
	
	// Mensagem para o usuário
	echo 'Nada a publicar!';
	
	// Mata o script
	exit;
}

	$data = date("Y/m/d H:i:s");

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
	   ! isset( $nome_cliente	)  
	|| ! isset( $endereco		)
	|| ! isset( $cidade 		)
	|| ! isset( $estado 		)
	|| ! isset( $telefone		)
	|| ! isset( $email			)
	|| ! isset( $CPF_CNPJ		)
	|| ! isset( $inscricao_est	)
	|| ! isset( $num_usuarios	)
	|| ! isset( $data		)
	   
) {
	// Mensagem para o usuário
	echo 'Existem variáveis não definidas.';

	// Mata o script
	exit;
}






// Inclui o arquivo de conexão
include('pdo.php');

// Prepara o envio
$prepara = $conexao_pdo->prepare("
	INSERT INTO `bufalo`.`cliente` (
		`nome_cliente`,
		`endereco`,
		`cidade`,
		`estado`,
		`telefone`,
		`email`,
		`CPF_CNPJ`,
		`inscricao_est`,
		`num_usuarios`,
		`dta_inclu`
	) 
	VALUES
	( ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )
");

// Envia
$verifica = $prepara->execute(
	array(
		$nome_cliente,
		$endereco,
		$cidade,
		$estado,
		$telefone,
		$email,
		$CPF_CNPJ,
		$inscricao_est,
		$num_usuarios,
		$data,
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