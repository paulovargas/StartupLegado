<?php
require_once('php/conecta.php');

$busca = 'SELECT * FROM rebanho where cliente_id = 2';

$result = $db->query($busca, PDO::FETCH_ASSOC) or die("erro");
?>
<div id="content">

    <div id="content-table-inner">

        <form action="envia_eventoIndividual.php" method="post" name="frmSelect">

            <table border="0" cellpadding="0" cellspacing="0"  id="id-form">




                <tr>	

                    <td valign='top'>Grupo:</td>
                    <td>
                        <select class='styledselect_form_1' id="categoria-selecta" name="rebanho_id">
                            <option value="">
                                Selecione
                            </option>

<?php
foreach ($result as $row) {
    echo "<option value=" . $row['id'] . ">" . $row['nomeRebanho'] . "</option>";
}
?>

                        </select>
                    </td>

                </tr>			






                <tr>
                    <th valign='top'>Brinco do animal:</th>

                    <td valign='top'>
                        <div id="resultado">
                            <small>Aguardando....</small>										
                        </div>
                        <span id="loading"><img src="img/pequeno-loader.gif"></span>
                    </td>



                </tr>



                <tr>
                    <td><input type="hidden" value="2" class="inp-form" name="evento_grupo" /></td>
                </tr>
				
				<tr>
                    <th valign="center">Procedimento:</th>
                    <td><input type="text" class="inp-form" name="nome" /></td>
                </tr>





                <tr>
                    <th valign="center">Local:</th>
                    <td><input type="text" class="inp-form" name="local" /></td>
                </tr>



                <tr>
                    <td valign="center">Data do Evento:</td>
                    <td><input type='date' class='inp-form' name='data_evento' /></td>
                </tr>




                <tr>
                    <td valign="center">Descrição:</td>
                    <td><input type="text" class="form-textarea" name="descri" /></td>
                </tr>
				
				<tr>
                    <td valign="center">Observação:</td>
                    <td><input type="text" class="form-textarea" name="obser" /></td>
                </tr>
				
                <tr>
                    <td>&nbsp;</td>
                    <td valign="top">
                        <input type="submit" value="" class="form-submit" />
                        <input type="clear" value="" class="form-reset"  />
                    </td>
                </tr>


            </table>

        </form>

    </div>
</div>