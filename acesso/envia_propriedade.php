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
		header('location: index.php?pagina=addPropriedade');
		
		// Mata o script
		exit;
	}
}

	//$data_nascimento = date("Y/m/d");

// Verifica se todas as variáveis estão definidas
if (  
	   ! isset( $nomePropriedade    )	
	|| ! isset( $localidade  		)
	   
) {
	// Mensagem para o usuário
	echo 'Existem variáveis não definidas.';
	
	echo "<br>$nomePropriedade";
	echo "<br>$localidade";	

	// Mata o script
	exit;
}

// Inclui o arquivo de conexão
include('pdo.php');

// Prepara o envio
$prepara = $conexao_pdo->prepare("
	INSERT INTO `estagio`.`propriedade` (
		
		
		`nomePropriedade`,		
		`localidade`
	) 
	VALUES
	( ?, ? )
");

// Envia
$verifica = $prepara->execute(
	array(

		
		$nomePropriedade,
		$localidade,		
		)
);

if ( $verifica ) {
	
	header("location: index.php?pagina=verPropriedades");
	
	// Mata o script
	exit;
} else {
	echo 'Erro ao enviar dados.';
	
	// Mata o script
	exit;
}

?>