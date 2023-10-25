 

<div id="content">


<div id="page-heading"><h1>Agendar Evento</h1></div>



<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
	<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
	<th class="topleft"></th>
	<td id="tbl-border-top">&nbsp;</td>
	<th class="topright"></th>
	<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
</tr>
	<td id="tbl-border-left"></td>
	<td>
	<!--  start content-table-inner -->
	<div id="content-table-inner">
	
	<!-- start id-form -->
	<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		
		<tr valign="top">
	<td>
	
	
		<!--  start step-holder -->
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
		<form action="envia_evento.php" method="post">
		
		
		
	
		<tr>			
			<td><input type="hidden" value="1" class="inp-form" name="evento_grupo" /></td>
			<td></td>
		</tr>
		<tr>			
			<td><input type="hidden" value="1" class="inp-form" name="animal_id" /></td>
			<td></td>
		</tr>
		<?php						
							
							$id = $_GET['id'];
							
							$sql = "SELECT * FROM rebanho";
							$result = mysqli_query($conecta, $sql); 
							
							
							echo "<th valign='top'>Grupo:</th>";
							echo "<td>";
							echo "<select class='styledselect_form_1' name = 'rebanho_id'>";
							
							echo "<option value = '' id = 'rebanho_id'>Selecione</option>";						
							
							while($consulta = mysqli_fetch_array($result)) {							
								
								
								if($_SESSION['usuario']['cliente_id'] == $consulta['cliente_id'])
									echo "<option value = {$consulta['id']} id = 'rebanho_id'>{$consulta['nomeRebanho']}</option>";
								    
									
							
							}mysqli_free_result($result);
							
							
							
							 
							
								echo "</select>";
								echo "</td>";
								
								
								
								
						
				
 ?>
	 
		<tr>
			<th valign="center"></th>
			
			<td></td>
		</tr>
		
		
		<td></td>
				
		<tr>
		<tr>
		<tr>
			<th valign="center">Evento:</th>
			<td><input type="text" class="inp-form" name="nome" /></td>
			<td></td>
		</tr>
		</tr>		
		</tr>
		<td></td>
		<tr>
		<tr>
		<tr>
			<th valign="center">Local:</th>
			<td><input type="text" class="inp-form" name="local" /></td>
			<td></td>
		</tr>		
		</tr>
		</tr>
		<td></td>
		<tr>
		<tr>
		<tr>
		<th valign="center">Data do Evento:</th>
		<td><input type='date' class='inp-form' name='data_evento' /></td>
		<td></td>
		</tr>
		</tr>
		</tr>
		<td></td>
		

		<tr>
		<tr>
		<tr>
			<th valign="center">Descrição:</th>
			<td><input type="text" class="form-textarea" name="descri" /></td>
			<td></td>
		</tr>
		</tr>
		</tr>
		<td></td>
		
		<tr>
		<tr>
		<tr>
			<th valign="center">Observações:</th>
			<td><input type="text" class="form-textarea" name="obser" /></td>
			<td></td>
		</tr>
		</tr>
		</tr>
		<td></td>
	
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