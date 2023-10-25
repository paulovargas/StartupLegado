<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Sistema Buffalo</title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<!--  jquery core -->
<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>

<!-- Custom jquery scripts -->
<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
</head>
<body id="login-bg"> 
 
<!-- Start: login-holder -->
<div id="login-holder">


	
	<!-- start logo -->
	<div id="logo-login">
	<?php
	
	echo "<h1 style= color:#FFF;>Faça parte da família Búffalo!</h1>";
	
	?>

		
	</div>
	<!-- end logo -->
	
	<div class="clear"></div>
	
	<!--  start loginbox ................................................................................. -->
	<div id="loginbox">
	
	<!--  start login-inner -->
	
	<div id="login-inner">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr></tr>
				
		<form action="envia_orç.php" method="POST">
		<tr>
			<th>Nome</th>
			<td><input type="name" name="nome" class="login-inp" /></td>
		</tr>
		<tr>
			<th>Email</th>
			<td><input type="email" name="email" class="login-inp" /></td>
		</tr>
		<tr>
			<th>Telefone</th>
			<td><input type="name" name="telefone" class="login-inp" /></td>
		</tr>
		<tr>
			<th>Quantidade de animais</th>
			<td><input type="name" name="animais" class="login-inp" /></td>
		</tr>
			<th></th>
			<td><input type='submit' class="submit-login"  /></td>
		</tr>
		<td><label type="" value = "1" class="" name="data" /></td>
		</form>
		
		</table>
	</div>
 	<!--  end login-inner -->
	
	
	
	<div class="clear"></div>
	
	
	
	
 </div>
 
 
 <!--  end loginbox -->
 
	<!--  start forgotbox ................................................................................... -->
		
	<a href="../"><img src="images/shared/logo.png" width="156" height="40" alt="" /></a>
	<!--  end forgotbox -->

</div>
<!-- End: login-holder -->
</body>
</html>