<div id="content">


<div id="page-heading"><h1>Minha Conta</h1></div>


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
		<form action="edita_usu.php" method="post">
		<?php		
					
					
					
							include('config.php');
					
							//$id = $_SESSION['usuario']['idusu'];
														
							$sql = "SELECT * FROM usuario";
							$result = mysqli_query($conecta, $sql); 

							
							while($consulta = mysqli_fetch_array($result)) { 
							
							if($_SESSION['usuario']['idusu'] == $consulta['idusu']){
								
								echo "<td><input value = '{$consulta['idusu']}' type='hidden' class='' name='id' /></td>";
								echo "<tr><th valign='center'>Nome:</th>";
								echo "<td><input value = '{$consulta['nome']}' type='' class='inp-form' name='nome' /></td>";
								echo "<td></td>";
								echo "</tr>";
								echo "<td></td>";
								echo "</tr>";
								echo "<tr>";
								echo "<tr>";
								echo "	<th valign='center'>Email:</th>";
								echo "	<td><input value = '{$consulta['email']}' type='' class='inp-form' name='email' /></td>";
								echo "	<td></td>";
								echo "</tr>";
								echo "<td></td>";
								echo "</tr>";
								echo "<tr>";
								echo "<tr>";
								echo "	<th valign='center'>Senha:</th>";
								echo "	<td><input value = '' type='password' class='inp-form' name='senha' /></td>";
								echo "	<td></td>";
								echo "</tr>";
								echo "<td></td>";
								echo "</tr>";
								echo "<tr>";
								echo "<tr>";
								echo "	<th valign='center'>Confirme a senha:</th>";
								echo "	<td><input value = '' type='password' class='inp-form' name='senha' /></td>";
								echo "	<td></td>";
								echo "</tr>";
								echo "<td></td>";
								echo "</tr>";								
							}
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