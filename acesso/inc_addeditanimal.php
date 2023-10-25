 

<div id="content">


<div id="page-heading"><h1>Editar Animal</h1></div>


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
			<?php $id = $_GET['id'];
				echo" <div class='step-dark-left'><a href='index.php?pagina=addeditaeventoIndividual&id=$id'>Editar Detalhes  </a></div>" 
			?> 
			<div class="step-dark-center">&nbsp;</div>
			<div class="clear"></div>
		</div>
		
		
		<!--  end step-holder -->
	
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<form action="edita_animal.php" method="POST">	
		
		
		<tr>
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
		<td></td>
		<?php
							$id = $_GET['id'];
								
							$sql = "SELECT * FROM animais JOIN rebanho ON animais.rebanho_id = rebanho.id JOIN propriedade ON animais.propriedade_id = propriedade.id where idanimal = $id";
							$result = mysqli_query($conecta, $sql); 

							
							while($consulta = mysqli_fetch_array($result)){ 
							
							
							$especie = $consulta['especie'];
							$brincos = $consulta['numero_brincos'];
							$data_nascimento = $consulta['data_nascimento'];
							$status = $consulta['status'];
							$raca = $consulta['raca'];							
							$pelagem = $consulta['pelagem'];
							$sexo = $consulta['sexo'];							
							$peso = $consulta['peso'];
							$nomeGrupo = $consulta['nomeRebanho'];
							$idGrupo = $consulta['rebanho_id'];
							$nomePropriedade = $consulta['nomePropriedade'];
							$idPropriedade = $consulta['propriedade_id'];
							$descricao = $consulta['descricao'];
							
							$id = $_SESSION['usuario']['cliente_id'];
								
								$vid = $consulta['idanimal'];

								echo "	<td><input value = '$vid' type='hidden' name='idanimal' /></td>";
								
								
								echo "<tr>";
								echo "<tr>";
								echo "	<th valign='center'>Brinco:</th>";
								echo "	<td><input value = '$brincos' type='text' class='inp-form' name='numero_brincos' /></td>";
								echo "	<td></td>";
								echo "</tr>";
								echo "<td></td>";
								echo "</tr>";
								
								
								echo "<tr>";
								echo "<tr>";
								echo "	<th valign='center'>Espécie:</th>";
								echo "	<td><input value = '$especie' type='text' class='inp-form' name='especie' /></td>";
								echo "	<td></td>";
								echo "</tr>";
								echo "<td></td>";
								echo "</tr>";
								
								echo "<tr>";
								echo "<tr>";
								echo "	<th valign='center'> Data de nascimento:</th>";
								echo "	<td><input value = '$data_nascimento' type='date' class='inp-form' name='data_nascimento' /></td>";
								echo "	<td></td>";
								echo "</tr>";
								echo "<td></td>";
								echo "</tr>";
								
								echo "<tr><th valign='top'>Status:</th>";
								echo "<td>";
								echo "<select class='styledselect_form_1' name = 'status'>";
								
								echo "<option value='$status' selected>{$consulta['status']}</option>";
								
								echo "<option value='Em Campo'>Em Campo</option>";
								echo "<option value='Vendido'>Vendido</option>";
								echo "<option value='Desaparecido'>Desaparecido</option>";
								echo "<option value='Morto'>Morto</option>";
								
								echo "</select>";
								echo "</td>";
								echo "</tr>";
								
								
								echo "<tr>";
								echo "<tr>";
								echo "	<th valign='center'>Raça:</th>";
								echo "	<td><input value = '$raca' type='text' class='inp-form' name='raca' /></td>";
								echo "	<td></td>";
								echo "</tr>";
								echo "<td></td>";
								echo "</tr>";
								echo "<tr>";
								echo "<tr>";
								echo "	<th valign='center'>Pelagem:</th>";
								echo "	<td><input value = '$pelagem' type='text' class='inp-form' name='pelagem' /></td>";
								echo "	<td></td>";
								echo "</tr>";
								echo "<td></td>";
								echo "</tr>";
								
								
								// echo "<tr><th valign='top'>Sexo:</th>";
								// echo "<td>";
								// echo "<select class='styledselect_form_1' name = 'sexo'>";							
								// echo "<option value='$sexo' selected>{$consulta['sexo']}</option>";
								// echo "<option value='Fêmea'>Fêmea</option>";
								// echo "<option value='Macho'>Macho</option>";								
								// echo "</select>";
								// echo "</td>";
								// echo "</tr>";
								
								
								// echo "<tr><th valign='top'>Prenhez:</th>";
								// echo "<td>";
								// echo "<select class='styledselect_form_1' name = 'prenhez'>";										
								// echo "<option value='$prenhez' selected>{$consulta['prenhez']}</option>";
								// echo "<option value='Vazia'>Vazia</option>";
								// echo "<option value='Prenha'>Prenha</option>";																	
								// echo "</select>";
								// echo "</td>";
								// echo "</tr>";								
								
															
								
								
								echo "<tr>";
								echo "<tr>";
								echo "	<th valign='center'>Peso:</th>";
								echo "	<td><input value = '$peso' type='text' class='inp-form' name='peso' /></td>";
								echo "	<td></td>";
								echo "</tr>";
								echo "<td></td>";
								echo "</tr>";
								
								
								
								
								
								
								
								
								
															
								
							}

							mysqli_free_result($result);
							
								$sql = "SELECT * FROM rebanho";
								$result = mysqli_query($conecta, $sql); 							
							
								echo "<tr><th valign='top'>Grupo:</th>";
								echo "<td>";
								echo "<select class='styledselect_form_1' name = 'rebanho_id'>";
								
								echo "<option value='$idGrupo' selected>$nomeGrupo</option>";
										
								
								while($consulta = mysqli_fetch_array($result)) { 
								
									
									if($consulta['id'] != 11)
									{
										echo "<option value = {$consulta['id']} id = 'rebanho_id'>{$consulta['nomeRebanho']}</option>";							
									
									}
										
								}mysqli_free_result($result);
								
									echo "</select>";
									echo "</td>";
									
								$sql = "SELECT * FROM propriedade";
								$result = mysqli_query($conecta, $sql); 							
							
								echo "<tr><th valign='top'>Propriedade:</th>";
								echo "<td>";
								echo "<select class='styledselect_form_1' name = 'propriedade_id'>";
								
								echo "<option value='$idPropriedade' selected>$nomePropriedade</option>";
										
								
								while($consulta = mysqli_fetch_array($result)) { 
								
									
									if($consulta['id'] != 1)
									{
										echo "<option value = {$consulta['id']} id = 'propriedade_id'>{$consulta['nomePropriedade']}</option>";							
									
									}
										
								}mysqli_free_result($result);
								
									echo "</select>";
									echo "</td>";
							
								echo "<tr>";
								echo "<tr>";
								echo "	<th valign='top'>Descrição:</th>";
								echo "	<td valign='top'><input value = '$descricao' type='text' class='form-textarea' name='descricao' /></td>";
								echo "	<td></td>";
								echo "</tr>";
								echo "<td></td>";
								echo "</tr>";
								
								



								
				
		?>	 
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