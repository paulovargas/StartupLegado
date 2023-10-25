 

<div id="content">


<div id="page-heading"><h1>Adicionar Animal</h1></div>


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
	
	<!-- start id-form -->
	<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		
		<tr valign="top">
	<td>
	
	
		
		<div id="step-holder">
			<div class="step-no">1</div>
			<div class="step-dark-left"><a href="">Adicionar Detalhes  
			</a></div> 
			<div class="step-dark-center">&nbsp;</div>
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<form action="inc_envia_animal.php" method="post" enctype="multipart/form-data">	
		
		
		<tr>
		<tr>
			<th valign="center">Brinco:</th>
			<td><input type="text" class="inp-form" name="numero_brincos" /></td>
			<td></td>
		</tr>
		<td></td>
		</tr>
		<tr>
		<tr>
			<th valign="center">Espécie:</th>
			<td><input type="text" class="inp-form" name="especie" /></td>
			<td></td>
		</tr>
		<td></td>
		</tr>
		<tr>
		<tr>
		<th valign="center">Data de Nascimento:</th>
		<td><strong><input type="date" class="inp-form" name="data_nascimento" /></strong></td>	
		</tr>
		<td></td>
		</tr>
		
		
		<?php				
							
							echo "<tr><th valign='top'>Status:</th>";
							echo "<td>";
							echo "<select class='styledselect_form_1' name = 'status'>";
							
							echo "<option value='Em campo' selected>Em campo</option>";
							echo "<option value='Vendido'>Vendido</option>";
							echo "<option value='Desaparecido'>Desaparecido</option>";
							echo "<option value='Morto'>Morto</option>";
							
							echo "</select>";
							echo "</td>";
							echo "</tr>";								
				
		?>
		
		<td></td>
		<tr>
		<tr>
			<th valign="center">Raça:</th>
			<td><input type="text" class="inp-form" name="raca" /></td>
			<td></td>
		</tr>
		<td></td>
		</tr>
		<tr>
		<tr>
			<th valign="center">Pelagem:</th>
			<td><input type="text" class="inp-form" name="pelagem" /></td>
			<td></td>
		</tr>
		<td></td>
		</tr>
		<?php				
							
							
							
							// echo "<tr><th valign='top'>Sexo:</th>";
							// echo "<td>";
							// echo "<select class='styledselect_form_1' name = 'sexo'>";
							
							// echo "<option value='macho' selected>Macho</option>";
							// echo "<option value='femea'>Fêmea</option>";
														
							// echo "</select>";
							// echo "</td>";
							// echo "</tr>";
		?>
		<td></td>
		<?php						
							// echo "<tr><th valign='top'>Prenhez:</th>";
							// echo "<td>";
							// echo "<select class='styledselect_form_1' name = 'prenhez'>";
									
							// echo "<option value='vazia' selected>Vazia</option>";
							// echo "<option value='prenha'>Prenha</option>";
																
							// echo "</select>";
							// echo "</td>";
							// echo "</tr>";	
									
								

													
				
		?>
		<tr>
		<tr>
			<th valign="center">Peso:</th>
			<td><input type="text" class="inp-form" name="peso" /></td>
		<td></td>
		</tr>
		<td></td>
		</tr>
		
		<?php													
							$id = $_GET['id'];
							
							$sql = "SELECT * FROM rebanho";
							$result = mysqli_query($conecta, $sql); 
							
							
							echo "<tr><th valign='top'>Grupo:</th>";
							echo "<td>";
							echo "<select class='styledselect_form_1' name = 'rebanho_id'>";
							
							while($consulta = mysqli_fetch_array($result)) {							
								
								if($consulta['id'] != 11)
									echo "<option value = {$consulta['id']} id = 'rebanho_id'>{$consulta['nomeRebanho']}</option>";								
								
							}mysqli_free_result($result);
							
								echo "</select>";
								echo "</td>";			
				
		// ?>
		<?php													
							$id = $_GET['id'];
							
							$sql = "SELECT * FROM propriedade";
							$result = mysqli_query($conecta, $sql); 
							
							
							echo "<tr><th valign='top'>Propriedade:</th>";
							echo "<td>";
							echo "<select class='styledselect_form_1' name = 'propriedade_id'>";
							
							while($consulta = mysqli_fetch_array($result)) {							
								
								if($consulta['id'] != 1)//if($_SESSION['usuario']['cliente_id'] == $consulta['cliente_id'])
									echo "<option value = {$consulta['id']} id = 'rebanho_id'>{$consulta['nomePropriedade']}</option>";								
								
							}mysqli_free_result($result);
							
								echo "</select>";
								echo "</td>";			
				
		// ?>
		<tr>
		<td></td>
		</tr>
		 <?php			
					
					
							// $sql = "SELECT * FROM finalidade_animal";
							// $result = mysqli_query($conecta, $sql); 							
							
							// echo "<tr><th valign='top'>Finalidade:</th>";
							// echo "<td>";
							// echo "<select class='styledselect_form_1' name = 'finalidade_animal_id'>";
							
							// while($consulta = mysqli_fetch_array($result)) { 								
								
								// echo "<option value = {$consulta['id']} id = 'finalidade_animal_id'>{$consulta['nomeFinalidade']}</option>";							
								
							// }mysqli_free_result($result);
							
								// echo "</select>";
								// echo "</td>";			
				
		// ?>	 
		<tr>
		<td></td>
		</tr>
		<!--<tr>
		<th>Imagem do animal:</th>
		<td>  <input type="file"  class="file_1" name="foto" /></td>
		<td><div class="bubble-left"></div>
		<div class="bubble-inner">JPEG, GIF 5MB max por imagem</div>
		<div class="bubble-right"></div></td>
		</tr> -->
		<tr>
		<tr>
			<th valign="center">Descrição:</th>
			<td><input type="text" class="form-textarea" name="descricao" /></td>
			<td></td>
		</tr>
		<td></td>
		</tr>
		<td></td>
	</tr>
	<tr>
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
		</form>  <!-- end id-form  -->
	</table>
	<!-- end id-form  -->
 
<div class="clear"></div>
 

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