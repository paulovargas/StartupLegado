 

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
<tr>
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
		<tr>
		<tr>
		<form action="listbox.php" method="post">		
		
		<?php						
							
							$id = $_GET['id'];
							
							$sql = "SELECT * FROM rebanho";
							$result = mysqli_query($conecta, $sql); 
							
							
							echo "<tr><th valign='top'>Grupo:</th>";
							echo "<td>";
							echo "<select class='styledselect_form_1' name = 'rebanho_id'>";
							
							echo "<option value = '' id = 'rebanho_id'></option>";
							
							
							while($consulta = mysqli_fetch_array($result)) {							
								
								
								if($_SESSION['usuario']['cliente_id'] == $consulta['cliente_id'])
									echo "<option $grupo = {$consulta['id']} id = 'rebanho_id'>{$consulta['nomeRebanho']}</option>";
								    
									
							
							}mysqli_free_result($result);
							
							
							
							 
							
								echo "</select>";
								echo "</td>";
								
								
								
								
						//include("listbox.php");		
				
 ?>
 
<script language="JavaScript">
function move(MenuOrigem, MenuDestino){
    var arrMenuOrigem = new Array();
    var arrMenuDestino = new Array();
    var arrLookup = new Array();
    var i;
    for (i = 0; i < MenuDestino.options.length; i++){
        arrLookup[MenuDestino.options[i].text] = MenuDestino.options[i].value;
        arrMenuDestino[i] = MenuDestino.options[i].text;
    }
    var fLength = 0;
    var tLength = arrMenuDestino.length;
    for(i = 0; i < MenuOrigem.options.length; i++){
        arrLookup[MenuOrigem.options[i].text] = MenuOrigem.options[i].value;
        if (MenuOrigem.options[i].selected && MenuOrigem.options[i].value != ""){
            arrMenuDestino[tLength] = MenuOrigem.options[i].text;
            tLength++;
        }
        else{
            arrMenuOrigem[fLength] = MenuOrigem.options[i].text;
            fLength++;
        }
    }
    arrMenuOrigem.sort();
    arrMenuDestino.sort();
    MenuOrigem.length = 0;
    MenuDestino.length = 0;
    var c;
    for(c = 0; c < arrMenuOrigem.length; c++){
        var no = new Option();
        no.value = arrLookup[arrMenuOrigem[c]];
        no.text = arrMenuOrigem[c];
        MenuOrigem[c] = no;
    }
    for(c = 0; c < arrMenuDestino.length; c++){
        var no = new Option();
        no.value = arrLookup[arrMenuDestino[c]];
        no.text = arrMenuDestino[c];
        MenuDestino[c] = no;
   }
}
</script>

<form name="combo_box">
    
        <tr>
            <td>
			
                <select multiple size="10" name="list1" style="width:150">		
				
				
				
				<?php						
							
							//$rebanhoId = $_POST['id'] ;							
							
							$sql = "SELECT * FROM animais where rebanho_id = $grupo";
							$result = mysqli_query($conecta, $sql); 
							
							//echo "<option value='1'>"         "</option>";
							
							
							while($consulta = mysqli_fetch_array($result)) {							
								
								
								echo "<option value='{$consulta['idanimal']}'>{$consulta['numero_brincos']}</option>";
								    
								
							}mysqli_free_result($result);
							
											
				
		// ?>
                
                </select>
            </td>
            <td align="center" valign="middle">
                <input type="button" onClick="move(this.form.list2,this.form.list1)" value="<<">
                <input type="button" onClick="move(this.form.list1,this.form.list2)" value=">>">
            </td>
            <td>
                <select multiple size="10" name="list2" style="width:150">
                </select>
            </td>
        </tr>
    
</form>
		
	
		
		
		
		
		
		
	
	</form>
	 <?php						
							
							// $id = $_GET['id'];
							
							// $sql = "SELECT * FROM rebanho";
							// $result = mysqli_query($conecta, $sql); 
							
							
							// echo "<tr><th valign='top'>Grupo:</th>";
							// echo "<td>";
							// echo "<select class='styledselect_form_1' name = 'rebanho_id'>";
							
							// while($consulta = mysqli_fetch_array($result)) {							
								
								// if($_SESSION['usuario']['cliente_id'] == $consulta['cliente_id'])
									// echo "<option value = {$consulta['id']} id = 'rebanho_id'>{$consulta['nomeRebanho']}</option>";
								    // $grupo = $consulta['id'];
								
							// }mysqli_free_result($result);
							
								// echo "</select>";
								// echo "</td>";
								// include("listbox.php");
				
		?>
		<tr>
			<th valign="center"><?php
				
		
				
		?></th>
			
			<td></td>
		</tr>
		
		</tr>
		<td></td>
		</tr>
		<tr>
		<tr>
		<tr>
			<th valign="center">Evento:</th>
			<td><input type="text" class="inp-form" name="nome" /></td>
			<td></td>
		</tr>
		<td></td>
		</tr>
		<tr>
		<tr>
		<tr>
			<th valign="center">Local:</th>
			<td><input type="text" class="inp-form" name="local_eve" /></td>
			<td></td>
		</tr>
		<td></td>
		</tr>
		<tr>
		<th valign="center">Data do Evento:</th>
		<td><input type='date' class='inp-form' name='data_eve' /></td>
		<td></td>
		</tr>
		<td></td>
		</tr>

		<tr>
		<tr>
			<th valign="center">Descrição:</th>
			<td><input type="text" class="form-textarea" name="descri" /></td>
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