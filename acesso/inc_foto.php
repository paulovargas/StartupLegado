 

<div id="content">


<div id="page-heading"><h1>Imagem do Animal</h1></div>




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
			<div class="step-dark-left"><a href="cadastro.html">Adicionar foto
			</a></div> 
			<div class="step-dark-center">&nbsp;</div>
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	
		<!-- start id-form -->
		<?php
// Incluindo arquivo de conexão
require_once('config/conn.php');

// Selecionando fotos
$stmt = $pdo->query('SELECT id, nome, tipo, tamanho FROM fotos');
?>


    <div class="row">
	
	

        <?php while ($foto = $stmt->fetchObject()): ?>

            <div class="col-sm-6 col-md-4">

                <div class="thumbnail">

                    <img src="imagem.php?id=<?php echo $foto->id ?>" />

                    <div class="caption">
                        <strong>Nome:</strong> <?php echo $foto->nome ?> <br/>
                        <strong>Tipo:</strong> <?php echo $foto->tipo ?> <br/>
                        <strong>Tamanho:</strong> <?php echo $foto->tamanho ?> bytes <br/>
                    </div>

                </div>

            </div>

        <?php endwhile ?>

    </div>


	
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