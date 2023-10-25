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
    
        
            
                <select multiple size="10" name="list1" style="width:150">
                <option value="1">Acre</option>
                <option value="2">Alagoas</option>
                <option value="3">Amapá</option>
                <option value="4">Amazonas</option>
                <option value="5">Bahia</option>
                <option value="6">Ceará</option>
                <option value="7">Distrito Federal</option>
                <option value="8">Espírito Santo</option>
                <option value="9">Goiás</option>
                <option value="10">Maranhão</option>
                <option value="11">Mato Grosso</option>
                <option value="12">Mato Grosso do Sul</option>
                <option value="13">Minas Gerais</option>
                <option value="14">Pará</option>
                <option value="15">Paraíba</option>
                <option value="16">Paraná</option>
                <option value="17">Pernambuco</option>
                <option value="18">Piauí</option>
                <option value="19">Rio de Janeiro</option>
                <option value="20">Rio Grande do Norte</option>
                <option value="21">Rio Grande do Sul</option>
                <option value="22">Rondônia</option>
                <option value="23">Roraima</option>
                <option value="24">Santa Catarina</option>
                <option value="25">São Paulo</option>
                <option value="26">Sergipe</option>
                <option value="27">Tocantins</option>
                </select>
            
            
                <input type="button" onClick="move(this.form.list2,this.form.list1)" value="<<">
                <input type="button" onClick="move(this.form.list1,this.form.list2)" value=">>">
            
            
                <select multiple size="10" name="list2" style="width:150">
                </select>
            
       
</form>

