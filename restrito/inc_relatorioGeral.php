<div id="content">


<div id="page-heading"><h1>Relatório Geral</h1></div>


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
		
		
	<td>
	
	
		<!--
		<div id="step-holder">
			<div class="step-no">1</div>
			<div class="step-dark-left"><a href=""> Animais </a></div> 
			<div class="step-dark-center">&nbsp;</div>
			<div class="clear"></div>
		</div>
		  end step-holder -->
	
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="">
		<?php
							//$id = $_GET['id'];
								
							$sql = "SELECT count(*) as total FROM animais";
							$result = mysqli_query($conecta, $sql); 

							
							while($consulta = mysqli_fetch_array($result)){ 
							
							
							
							$total = $consulta['total'];				

								
								
								echo "<tr>";
								echo "<tr>";
								echo "	<th><a>TOTAL DE ANIMAIS CADASTRADOS: $total CABEÇAS</a></th>";
								echo "<td></td>";
								echo "</tr>";
								echo "<td></td>";
								echo "</tr>";								
								
								
							}

							mysqli_free_result($result);
							
								
								$sql = "SELECT count(animais.idanimal) as animaisRebanho, nomeRebanho FROM animais join rebanho on animais.rebanho_id = rebanho.id where rebanho.id != 11 group by nomeRebanho";
								$result = mysqli_query($conecta, $sql); 							
							
								echo "<tr><th>Total de animais por Grupo:</th>";
								echo "<tr>";
								//echo "<select class='styledselect_form_1' name = 'propriedade_id'>";
								
								//echo "<option value='$idPropriedade' selected>$nomePropriedade</option>";
										
								
								while($consulta = mysqli_fetch_array($result)){ 
								
									
								
										echo "<th>{$consulta['nomeRebanho']} : {$consulta['animaisRebanho']} cabeças</th>";
										echo "<tr>";
									
									
										
								}mysqli_free_result($result);
								
									//echo "</select>";
									echo "</td>";
									
								$sql = "SELECT count(animais.idanimal) as animaisPropriedade, nomePropriedade FROM animais join propriedade on animais.propriedade_id = propriedade.id where propriedade.id != 1 group by nomePropriedade";
								$result = mysqli_query($conecta, $sql); 							
							
								echo "<tr><th>Total de animais por Propriedade:</th>";
								echo "<tr>";
								//echo "<select class='styledselect_form_1' name = 'propriedade_id'>";
								
								//echo "<option value='$idPropriedade' selected>$nomePropriedade</option>";
										
								
								while($consulta = mysqli_fetch_array($result)) { 
								
									
									
										echo "<th>{$consulta['nomePropriedade']} : {$consulta['animaisPropriedade']} cabeças</th>";
										echo "<tr>";
									
									
										
								}mysqli_free_result($result);
								
									//echo "</select>";
									echo "</td>";
							
								
								
								



								
				
		?>	 
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