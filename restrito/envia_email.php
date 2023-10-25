<?php
	// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
	require_once('phpmailer/class.PHPMailer.php');
	require_once('phpmailer/class.SMTP.php');

	// Inicia a classe PHPMailer
	$mail = new PHPMailer();

	// Define os dados do servidor e tipo de conexão
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	$mail->IsSMTP(true); // Define que a mensagem será SMTP
	$mail->Host = "smtp.gmail.com"; // Endereço do servidor SMTP
	$mail->Port = 465;
	$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
	$mail->SMTPSecure = 'ssl';
	$mail->Username = $_POST['remetente']; // Usuário do servidor SMTP
	$mail->Password = $_POST['senha']; // Senha do servidor SMTP
	
	// para funcionar com o GMAIL, deve ir em configurações e ATIVAR o acesso IMAP;
	// depois de tentar executar o código uma vez o gmail vai enviar uma mensagem 
	// de segurança perguntando se deseja liberar acesso aplicações menos seguras.
	// é necessário acessar esta mensagem e ativar este recurso para que funcione.

	// Define o remetente
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	$mail->From = $_POST['remetente']; // Seu e-mail
	$mail->FromName = $_POST['nome']; // Seu nome

	// Define os destinatário(s)
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	$mail->AddAddress($_POST['destinatario']);

	// Define os dados técnicos da Mensagem
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	$mail->IsHTML(true); // Define que o e-mail será enviado como HTML

	// Define a mensagem (Texto e Assunto)
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	$mail->Subject  = $_POST['assunto']; // Assunto da mensagem
	$mail->Body = $_POST['mensagem'];

	// Define os anexos (opcional)
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	//$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo

	// Envia o e-mail
	$enviado = $mail->Send();

	// Limpa os destinatários e os anexos
	$mail->ClearAllRecipients();
	$mail->ClearAttachments();

	// Exibe uma mensagem de resultado
	if ($enviado) {
	  echo "E-mail enviado com sucesso!";
	}
	else {
	  echo "Não foi possível enviar o e-mail.";
	  echo "<b>Informações do erro:</b> " . $mail->ErrorInfo;
	  echo $_POST['remetente'];
	  echo $_POST['destinatario'];
	}

	//header("location: formulario_email.php");
?>


