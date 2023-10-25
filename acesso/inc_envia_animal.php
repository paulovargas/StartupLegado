<?php
	
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
	
	
	//session_start();
	//$vidc = $_SESSION['usuario']['cliente_id'];
	
	if($numero_brincos == '')
		header('location: index.php?pagina=addanimal');

   /*  $host = "localhost";
	$user = "root";
	$pass = "";
	$bank = "estagio";
	
	$conn = mysqli_connect( $host, $user, $pass, $bank);
	
	
		
		$especie = $_POST['especie'];
		$numero_brincos = $_POST['numero_brincos'];
		$data_nascimento = $_POST['data_nascimento'];
		$status =  $_POST['status'];
		$raca = $_POST['raca'];
		$pelagem = $_POST['pelagem'];
		$sexo = $_POST['sexo'];
		$peso = $_POST['peso'];
		$rebanho_id = $_POST['rebanho_id'];
		$finalidade_animal_id = $_POST['finalidade_animal_id'];		
		$descricao = $_POST['descricao']; 
   
		$sql = "INSERT INTO animais (rebanho_id, finalidade_animal_id, especie, numero_brincos, data_nascimento, status, raca, pelagem, sexo,  peso, descricao)
      
		VALUES ('rebanho_id', 'finalidade_animal_id', 'especie', 'numero_brincos', 'data_nascimento', 'status', 'raca', 'pelagem', 'sexo', 'peso', 'descricao')";
		//'{$_POST['rebanho_id']}','{$_POST['finalidade_animal_id']}','{$_POST['nomeAnimal']}','{$_POST['especie']}','{$_POST['raca']}','{$_POST['pelagem']}','{$_POST['numero_brincos']}','{$_POST['data_nascimento']}','{$_POST['peso']}','{$_POST['descricao']}')
		$exec = mysqli_query($conn,$sql);
		
		//mysqli_close($conn);
			
		header("location: sessao.php"); */


			/* function gravar_incluir(){
            //$fdatacad=$_POST['carDataCad'];  // recebe data
            $foto=$_FILES['foto'];  //recebe imagem
            $sql="INSERT INTO animais (foto) VALUES ('$foto')";
            if($this->resultado=$this->con->banco->Execute($sql)){
                alerta("Registro incluido com SUCESSO");
                return(true);
            }
            else{
                alerta("ERRO: O registro não foi salvo.");
                return(falso);
            }
        } */


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
	
	
}

	
if (  
	   ! isset( $numero_brincos		 )
	|| ! isset( $especie			 )
	|| ! isset( $data_nascimento	 )
	|| ! isset( $status	 			 )
	|| ! isset( $raca				 )
	|| ! isset( $pelagem			 )
	|| ! isset( $peso				 )	
	|| ! isset( $rebanho_id			 )
	|| ! isset( $propriedade_id		 )		
	|| ! isset( $descricao			 )
	   
) {
	// Mensagem para o usuário
	echo 'Existem variáveis não definidas.';
	echo "<br>$numero_brincos";
	echo "<br>$especie";
	echo "<br>$data_nascimento";
	echo "<br>$status";
	echo "<br>$raca";
	echo "<br>$pelagem";
	echo "<br>$peso";	
	echo "<br>$rebanho_id";
	echo "<br>$propriedade";	
	echo "<br>$descricao";	

	// Mata o script
	exit;
}

// Inclui o arquivo de conexão
include('pdo.php');

// Prepara o envio
$prepara = $conexao_pdo->prepare("
	INSERT INTO `estagio`.`animais` (
		
		`numero_brincos`,
		`especie`,
		`data_nascimento`,		
		`status`,
		`raca`,		
		`pelagem`,	
		`peso`,		
		`rebanho_id`,		
		`propriedade_id`,
		`descricao`
	) 
	VALUES
	( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
");

// Envia
$verifica = $prepara->execute(
	array(

		$numero_brincos,
		$especie,
		$data_nascimento,
		$status,
		$raca,
		$pelagem,
		$peso,
		$rebanho_id,
		$propriedade_id,		
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