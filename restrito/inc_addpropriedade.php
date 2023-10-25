 

<div id="content">


<div id="page-heading"><h1>Adicionar Propriedade</h1></div>


<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
	<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
	<th class="topleft"></th>
	<td id="tbl-border-top">&nbsp;</td>
	<th class="topright"></th>
	<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
</tr>
<script type="text/javascript" language="javascript">
function valida_form (){
if(document.getElementById("nome").value.length < 3){
alert('Por favor, preencha o campo nome');
document.getElementById("nome").focus();
return false
}
}
</script>
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
		<form action="envia_propriedade.php" method="post">	
		
		<?php					
							$id = $_SESSION['usuario']['cliente_id'];							
							
							//$id = $_GET['id'];
							
							echo "<input type = 'hidden' value = '$id' name = 'cliente_id'>";				
		?>	 
		
		<tr>
		<tr>
			<th valign="center">Nome da Propriedade:</th>
			<td><input type="text" class="inp-form" name="nomePropriedade" /></td>
			<td></td>
		</tr>
		<td></td>
		</tr>
		
		<tr>
		<tr>
			<th valign="center">Localidade:</th>
			<td><input type="text" class="form-textarea" name="localidade" /></td>
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