 

<div id="content">


<div id="page-heading"><h1>Editar Cliente</h1></div>

<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
	<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
	<th class="topleft"></th>
	<td id="tbl-border-top">&nbsp;</td>
	<th class="topright"></th>
	<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
</tr>
<tr>
	<td id="tbl-border-left"></td>
	<td>
	<!--  start content-table-inner -->
	<div id="content-table-inner">
	
	<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr valign="top">
	<td>
	
	
		<!--  start step-holder -->
		<div id="step-holder">
			<div class="step-no">1</div>
			<div class="step-dark-left"><a href="">Editar Detalhes</a></div>
			<div class="step-dark-center">&nbsp;</div>
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<form action="edita_clientes.php" method="post">
		<?php		
					
					
					
					//include('config.php');
					
					$id=$_GET['id'];
					
							$cli = $id;
							
							$sql = "SELECT * FROM cliente where id = $id";
							$result = mysqli_query($conecta, $sql); 

							
							while($consulta = mysqli_fetch_array($result)) { 
								
								
								$id = $consulta['id'];
								$cliente = $consulta['nome_cliente'];
								$endereco = $consulta['endereco'];
								$cidade = $consulta['cidade'];
								$estado = $consulta['estado'];
								$fone = $consulta['telefone'];
								$email = $consulta['email'];
								$cpf_cnpj = $consulta['cpf_cnpj'];
								$ie = $consulta['inscricao_est'];
								$usu = $consulta['num_usuarios'];
								
								
								echo "<td><input value = '$id' type='hidden' class='' name='id'/></td>";
								echo "<tr><th valign='center'>Nome do Cliente:</th>";
								echo "<td><input value = '$cliente' type='text' class='inp-form' name='nome_cliente' /></td>";
								echo "<td></td>";
								echo "</tr>";
								echo "<td></td>";
								echo "</tr>";
								echo "<tr>";
								echo "<tr>";
								echo "	<th valign='center'>Endereço:</th>";
								echo "	<td><input value = '$endereco' type='text' class='inp-form' name='endereco' /></td>";
								echo "	<td></td>";
								echo "</tr>";
								echo "<td></td>";
								echo "</tr>";
								echo "<tr>";
								echo "<tr>";
								echo "	<th valign='center'>Cidade:</th>";
								echo "	<td><input value= '$cidade' type='text' class='inp-form' name='cidade' /></td>";
								echo "	<td></td>";
								echo "</tr>";
								echo "<td></td>";
								echo "</tr>";
								echo "<tr>";
								echo "<tr>";
								echo "	<th valign='center'>Estado:</th>";
								echo "	<td><input value = '$estado' type='text' class='inp-form' name='estado' /></td>";
								echo "	<td></td>";
								echo "</tr>";
								echo "<td></td>";
								echo "</tr>";
								echo "<tr>";
								echo "<tr>";
								echo "	<th valign='center'>Telefone:</th>";
								echo "	<td><input value = '$fone' type='tex' class='inp-form' name='telefone' /></td>";
								echo "	<td></td>";
								echo "</tr>";
								echo "<td></td>";
								echo "</tr>";
								echo "<tr>";
								echo "<tr>";
								echo "	<th valign='center'>Email:</th>";
								echo "	<td><input value = '$email' type='text' class='inp-form' name='email' /></td>";
								echo "	<td></td>";
								echo "</tr>";
								echo "<td></td>";
								echo "</tr>";
								echo "<tr>";
								echo "<tr>";
								echo "	<th valign='center'>CPF/CNPJ:</th>";
								echo "	<td><input value = '$cpf_cnpj' type='text' class='inp-form' name='cpf_cnpj' /></td>";
								echo "	<td></td>";
								echo "</tr>";
								echo "<td></td>";
								echo "</tr>";
								echo "<tr>";
								echo "<tr>";
								echo "	<th valign='center'>Inscrição Estadual:</th>";
								echo "	<td><input value = '$ie' type='text' class='inp-form' name='inscricao_est' /></td>";
								echo "	<td></td>";
								echo "</tr>";
								echo "<td></td>";
								echo "</tr>";
								echo "<tr>";
								echo "<tr>";
								echo "	<th valign='center'>Usuários:</th>";
								echo "	<td><input value = '$usu' type='text' class='inp-form' name='num_usuarios' /></td>";
								echo "	<td></td>";
								echo "</tr>";
								echo "<td></td>";
								echo "</tr>";
								
								
															
								
							}

							mysqli_free_result($result);
						
				
				
				?>
<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="" class="form-submit" />
			<input type="clear" value="" class="form-reset"  />
		</td>
		<td></td>
	</tr>
	</form>
	</table>
	<!-- end id-form  -->
	</td>
	<td>

	<!--  start related-activities -->
	
		<!-- end related-act-top -->
		
		<!--  start related-act-bottom -->
		<div id="related-act-bottom">
		
			<!--  start related-act-inner -->
			<!-- end related-act-inner -->
			<div class="clear"></div>
		
		</div>
		<!-- end related-act-bottom -->
	
	</div>
	<!-- end related-activities -->

</td>
</tr>
<tr>
<td><img src="images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
<td></td>
</tr>
</table>
 
<div class="clear"></div>
 

</div>
<!--  end content-table-inner  -->
</td>
<td id="tbl-border-right"></td>
</tr>
<tr>
	<th class="sized bottomleft"></th>
	<td id="tbl-border-bottom">&nbsp;</td>
	<th class="sized bottomright"></th>
</tr>
</table>