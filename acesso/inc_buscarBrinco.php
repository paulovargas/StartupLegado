<head>
<meta http-equiv="Content-Type" content="text/html;" />
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<style type="text/css">
		#pesquisaCliente{
			width:500px;
		}
		#form_pesquisa{
			margin-top:50px;
		}
	</style>
	<script type="text/javascript" src="js/jquery-2.1.0.js"></script>

	<script type="text/javascript">
	$(document).ready(function(){

    //Aqui a ativa a imagem de load
    function loading_show(){
		$('#loading').html("<img src='img/loading.gif'/>").fadeIn('fast');
    }
    
    //Aqui desativa a imagem de loading
    function loading_hide(){
        $('#loading').fadeOut('fast');
    }       
    
    
    // aqui a função ajax que busca os dados em outra pagina do tipo html, não é json
    function load_dados(valores, page, div)
    {
        $.ajax
            ({
                type: 'POST',
                dataType: 'html',
                url: page,
                beforeSend: function(){//Chama o loading antes do carregamento
		              loading_show();
				},
                data: valores,
                success: function(msg)
                {
                    loading_hide();
                    var data = msg;
			        $(div).html(data).fadeIn();				
                }
            });
    }
    
    //Aqui eu chamo o metodo de load pela primeira vez sem parametros para pode exibir todos
    load_dados(null, 'pesquisa.php', '#MostraPesq');
    
    
    //Aqui uso o evento key up para começar a pesquisar, se valor for maior q 0 ele faz a pesquisa
    $('#pesquisaCliente').keyup(function(){
        
        var valores = $('#form_pesquisa').serialize()//o serialize retorna uma string pronta para ser enviada
        
        //pegando o valor do campo #pesquisaCliente
        var $parametro = $(this).val();
        
        if($parametro.length >= 1)
        {
            load_dados(valores, 'pesquisa.php', '#MostraPesq');
        }else
        {
            load_dados(null, 'pesquisa.php', '#MostraPesq');
        }
    });

	});
	</script>	
</head>

	<center>
		<article>
			
			
				<!-- start content -->
<div id="content">


	
	
	
	<!--  start page-heading -->
	<div id="page-heading">
		<tr></tr>
	
	
	<form name="form_pesquisa" id="form_pesquisa" method="post" action="">
				
					
						<div class="input-form">
							<span class="add-on"><i></i></span>
							<h1>Digite o Brinco :</h1><input type="text" class="input-form"name="pesquisaCliente" id="pesquisaCliente" value="" placeholder="Pesquisar por brinco..." />
						</div>
				
			</form>
	
	</div>
	<!-- end page-heading -->

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
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
		
			<!--  start table-content  -->
			<div id="table-content">
			
			
											
				
				<form id="mainform" action="">
				
				
				<div id="MostraPesq">
						</div>
				
				
					
				</section>
				</form>
				
				
					
				
				
				
				<!--  end product-table................................... --> 
				
				 <?php
				
						// if($num < 1)
							// echo "<strong><h2>Você não tem animais cadastrados!</h2></strong>";
				
			 ?>
				

			</div>
			
			
			<!--  end content-table  -->
		
			<!--  start actions-box ............................................... -->
		
			<!-- end actions-box........... -->
			
			<!--  start paging..................................................... -->
			<table border="0" cellpadding="0" cellspacing="0" id="paging-table">
			<tr>
			<td>
				<a href="" class="page-far-left"></a>
				<a href="" class="page-left"></a>
				<div id="page-info">Página <strong>1</strong> / 15</div>
				<a href="" class="page-right"></a>
				<a href="" class="page-far-right"></a>
			</td>
			<td>
			<select  class="styledselect_pages">
				<option value="">Registros por Página</option>
				<option value="10">10</option>
				<option value="20">20</option>
				<option value="30">30</option>
			</select>
			</td>
			</tr>
			</table>
			
			<?php
				
						if($num > 0)
							echo "<strong>O total de animais é de $num cabeças.</strong>";
				
				?>
			<!--  end paging................ -->
			
			<div class="clear"></div>
		 
		</div>
		<!--  end content-table-inner ............................................END  -->
		</td>
		<td id="tbl-border-right"></td>
	</tr>
	<tr>
		<th class="sized bottomleft"></th>
		<td id="tbl-border-bottom">&nbsp;</td>
		<th class="sized bottomright"></th>
	</tr>
	</table>
	<div class="clear">&nbsp;</div>

</div></div>
			
</article>
</center>