  

<div id="content">


<div id="page-heading"><h1>Editar Evento Grupo</h1></div>


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
			<div class="step-dark-left"><a href="">Editar Detalhes  
			</a></div> 
			<div class="step-dark-center">&nbsp;</div>
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<form action="editar_evento.php" method="POST">	
		
		<?php						
														
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
                                                        		
				
		 ?>
		<?php
							$id = $_GET['id'];
                                                        $idevenR = $_GET['id'];
								
							$sql = "SELECT * FROM eventos where idevenR = $id";
							$result = mysqli_query($conecta, $sql); 

							
							while($consulta = mysqli_fetch_array($result)){ 
								
								$nome = $consulta['nome'];
								$local = $consulta['local'];
								$data_evento = $consulta['data_evento'];
								$descri = $consulta['descri'];
								
								
								echo "<td><input type='hidden' value ='$idevenR' class='' name='idevenR' /></td>";
								echo "<tr><th valign='center'>Evento:</th>";
								echo "<td><input value ='$nome' type='$nome' class='inp-form' name='nome' /></td>";
								echo "<td></td>";
								echo "</tr>";
								echo "<td></td>";
								echo "</tr>";
								echo "<tr>";
								echo "<tr>";
								echo "	<th valign='center'>Local:</th>";
								echo "	<td><input value = '$local' type='text' class='inp-form' name='local' /></td>";
								echo "	<td></td>";
								echo "</tr>";
								echo "<td></td>";
								echo "</tr>";
								echo "<tr>";
								echo "<tr>";
								echo "	<th valign='center'> Data do evento:</th>";
								echo "	<td><input value = '$data_evento' type='date' class='inp-form' name='data_evento' /></td>";
								echo "	<td></td>";
								echo "</tr>";
								echo "<td></td>";
								echo "</tr>";
								echo "<tr>";
								echo "<tr>";
								echo "	<th valign='top'>Descrição:</th>";
								echo "	<td valign='top'><input value = '$descri' type='text' class='form-textarea' name='descri' /></td>";
								echo "	<td></td>";
								echo "</tr>";
								echo "<td></td>";
								echo "</tr>";
								
								
															
								
							}

							mysqli_free_result($result);



								
				
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