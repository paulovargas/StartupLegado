 <?php

 require_once('php/conecta.php'); 

 $busca = 'SELECT * FROM rebanho ';

$result = $db->query($busca, PDO::FETCH_ASSOC) or die("erro");

  

 ?>

 <!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Estados e cidades</title>
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/meuCodigo.js"></script>


</head>

<body>
<h1>Estados e Cidades</h1>
<table>
<form name="frmSelect">

	<tr>
		<td>
		<label>
			Grupo
		</label>

		</td>
		<td colspan="2"> 
			<select id="categoria-selecta">
				<option value="">
					Selecione
				</option>

				<?php 
				 foreach ($result as $row){
				    echo '<option value='.$row['id'].'>'.$row['nomeRebanho'].'</option>';

				}
				?>
			
			</select>

		</td>
	</tr>
	<tr>
		<td>
			<label>
				Brinco
			</label>

		</td>
		<td>

			<div id="resultado">
				<small>Aguardando....</small>

			</div>

		</td>
		<td><span id="loading"><img src="img/pequeno-loader.gif"></span></td>
	</tr>
	
	

	


</form>
</table>
</body>

</html> 