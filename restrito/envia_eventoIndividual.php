<?php
// Se não postar nada
if ( ! isset( $_POST ) || empty( $_POST ) ) {
	
	// Mensagem para o usuário
	echo 'Nada a publicar!';
	
	// Mata o script
	exit;
}
echo "<pre>";

print_r($_POST);
echo "</pre>";
// Verifica campos em branco
foreach ( $_POST as $chave => $valor ) {
	// Cria as variáveis dinamicamente
	$$chave = $valor;
	
	// Verifica campos em branco
	if ( empty( $valor ) ) {
		// Mensagem para o usuário
		header('location: index.php?pagina=agendaeventoindividual');
		
		// Mata o script
		exit;
	}
}

	//$data_nascimento = date("Y/m/d");

// Verifica se todas as variáveis estão definidas
if (  
	   ! isset( $rebanho_id		)
	|| ! isset( $animal_id		)
	|| ! isset( $evento_grupo   )
	|| ! isset( $nome			)
	|| ! isset( $local			)		
	|| ! isset( $data_evento	)
	|| ! isset( $descri			)	
	|| ! isset( $obser			)
	   
) {
	// Mensagem para o usuário
	
	echo 'Existem variáveis não definidas.';
	echo "<br>$rebanho_id";
	echo "<br>$animal_id";
	echo "<br>$evento_grupo";
	echo "<br>$nome";
	echo "<br>$local";
	echo "<br>$data_evento";	
	echo "<br>$descri";
	echo "<br>$obser";	

	// Mata o script
	exit;
}

	$id_animal = $animal_id;


// Inclui o arquivo de conexão
include('pdo.php');

// Prepara o envio
$prepara = $conexao_pdo->prepare("
	INSERT INTO `sistemabuffalo`.`eventos` (
		
		`rebanho_id`,
		`animal_id`,
		`evento_grupo`,
		`nome`,
		`local`,
		`data_evento`,
		`descri`,		
		`obser`
	) 
	VALUES
	( ?, ?, ?, ?, ?, ?, ?, ? )
");

// Envia
$verifica = $prepara->execute(
	array(

		$rebanho_id,
		$animal_id,
		$evento_grupo,
		$nome,
		$local,
		$data_evento,
		$descri,
		$obser,
		)
);

if ( $verifica ) {
	
	header("location: index.php?pagina=verEventosAnimal&id=$id_animal");
	
	// Mata o script
	exit;
} else {
	echo 'Erro ao enviar dados.';
	
	// Mata o script
	exit;
}

?>