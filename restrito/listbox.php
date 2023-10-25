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
							
							$grupo = $_POST['id'] ;
							
							$sql = "SELECT * FROM animais where rebanho_id = 1";
							$result = mysqli_query($conecta, $sql); 
							
							
							
							
							while($consulta = mysqli_fetch_array($result)) {							
								
								
								echo "<option value='1'>{$consulta['numero_brincos']}</option>";
								    
								
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

