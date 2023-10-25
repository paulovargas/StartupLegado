<!-- start content -->
<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		<h1>Todos os Animais</h1>
		<a target ="_blank" href="relatorioAnimais.php" id="acc-details">Imprimir relatório </a>
	</div>
	<!-- end page-heading <a target ="_blank" href="relatorioAnimais.php" id="acc-details">Imprimir relatório </a> -->

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
			
				<!--  start message-yellow -->
				
				<!--  end message-yellow -->
				
				<!--  start message-red -->
				
				<!--  end message-red -->
				
				<!--  start message-blue -->
				
				<!--  end message-blue -->
			
				<!--  start message-green -->
				
				<!--  end message-green -->
		
		 
				<!--  start product-table ..................................................................................... -->
				
							
				
				<form id="mainform" action="">
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					<th class="table-header-check"><a id="" ></a> </th>
					<th class="table-header-repeat line-left minwidth-2"><a>Brinco</a></th>
					<th class="table-header-repeat line-left minwidth-1"><a>Descrição</a></th>
					<!-- <th class="table-header-repeat line-left minwidth-1"><a></a></th> -->
					<th class="table-header-repeat line-left minwidth-1"><a>Grupo</a></th>
					<th class="table-header-repeat line-left minwidth-1"><a>Propriedade</a></th>
					<th class="table-header-repeat line-left minwidth-1"><a>Status</a></th>					
					<th class="table-header-repeat line-left minwidth-2"><a>Pelagem</a></th>
					<!-- <th class="table-header-repeat line-left minwidth-2"><a>Peso</a></th> -->
					<th class="table-header-repeat line-left minwidth-2"><a>Opções</a></th>
				</tr>
				
				
				<tr>
				
				
<?php				
				
							session_start();
																					
							//$id = $_GET['id'];
							
							$id = $_SESSION['usuario']['cliente_id'];
							
							
							/* Constantes de configuração */  
 define('QTDE_REGISTROS', 10);   
 define('RANGE_PAGINAS', 1);   
   
 /* Recebe o número da página via parâmetro na URL */  
 $pagina_atual = (isset($_GET['page']) && is_numeric($_GET['page'])) ? $_GET['page'] : 1;   
   
 /* Calcula a linha inicial da consulta */  
 $linha_inicial = ($pagina_atual -1) * QTDE_REGISTROS;  
   
 /* Cria uma conexão PDO com MySQL */  
 $opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND);  
 $pdo = new PDO("mysql:host=localhost; dbname=estagio;", "root", "", $opcoes);  
   
 /* Instrução de consulta para paginação com MySQL */  
 $sql = "SELECT * FROM animais JOIN rebanho ON animais.rebanho_id = rebanho.id JOIN propriedade ON animais.propriedade_id = propriedade.id where rebanho.cliente_id = $id LIMIT {$linha_inicial}," . QTDE_REGISTROS;  
 $stm = $pdo->prepare($sql);   
 $stm->execute();   
 $dados = $stm->fetchAll(PDO::FETCH_OBJ);   
   
 /* Conta quantos registos existem na tabela */  
 $sqlContador = "SELECT COUNT(*) as total_registros FROM animais";   
 $stm = $pdo->prepare($sqlContador);   
 $stm->execute();   
 $valor = $stm->fetch(PDO::FETCH_OBJ);   
   
 /* Idêntifica a primeira página */  
 $primeira_pagina = 1;   
   
 /* Cálcula qual será a última página */  
 $ultima_pagina  = ceil($valor->total_registros / QTDE_REGISTROS);   
   
 /* Cálcula qual será a página anterior em relação a página atual em exibição */   
 $pagina_anterior = ($pagina_atual > 1) ? $pagina_atual -1 : 0 ;   
   
 /* Cálcula qual será a pŕoxima página em relação a página atual em exibição */   
 $proxima_pagina = ($pagina_atual < $ultima_pagina) ? $pagina_atual +1 : 0 ;  
   
 /* Cálcula qual será a página inicial do nosso range */    
 $range_inicial  = (($pagina_atual - RANGE_PAGINAS) >= 1) ? $pagina_atual - RANGE_PAGINAS : 1 ;   
   
 /* Cálcula qual será a página final do nosso range */    
 $range_final   = (($pagina_atual + RANGE_PAGINAS) <= $ultima_pagina ) ? $pagina_atual + RANGE_PAGINAS : $ultima_pagina ;   
   
 /* Verifica se vai exibir o botão "Primeiro" e "Pŕoximo" */   
 $exibir_botao_inicio = ($range_inicial < $pagina_atual) ? 'mostrar' : 'esconder'; 
   
 /* Verifica se vai exibir o botão "Anterior" e "Último" */   
 $exibir_botao_final = ($range_final > $pagina_atual) ? 'mostrar' : 'esconder';  
   
 
							
							
							
							
							
							//$num = $num + 1;
							 
								foreach($dados as $artigo):
									if($artigo->propriedade_id != 1)
										{
									
										$num = $num+1;
													
										$id = $artigo->idanimal;																							
																	
										echo "<td><strong>$num</strong></td>";
										echo "<td><strong>$artigo->numero_brincos</strong></td>";
										echo "<td><strong>$artigo->descricao</strong></td>";
										//echo "<td><strong>$artigo->especie</strong></td>";										
										echo "<td><strong>$artigo->nomeRebanho</strong></td>";
										echo "<td><strong>$artigo->nomePropriedade</strong></td>";
										echo "<td><strong>$artigo->status</strong></td>";
										echo "<td><strong>$artigo->pelagem</strong></td>";
										
										
										//echo "<td><strong>$artigo->peso</strong></td>";
										
																	
										echo "<td class='options-width'><a href='index.php?pagina=verEventosAnimal&id=$id' title='Histórico do animal' class='icon-3 info-tooltip'></a><a href='index.php?pagina=foto&id=$id' title='Ver foto' class='icon-3 info-tooltip'></a><a href='index.php?pagina=addeditanimal&id=$id' title='Editar' class='icon-1 info-tooltip'></a><a href='index.php?pagina=excluianimal&id=$id' title='Excluir' class='icon-2 info-tooltip'></a></td>";
										
										
										echo "<tr>";
										
										}
								endforeach;
										
								
									
														
				
			
				?>					
				
				<!--  end product-table................................... --> 
				</tr>
											
				</table>
				<div class='box-paginacao'>     
       
      <?php  
      /* Loop para montar a páginação central com os números */   
      for ($i=$range_inicial; $i <= $range_final; $i++):   
        $destaque = ($i == $pagina_atual) ? 'destaque' : '' ;  
        ?>   
        <?php endfor; ?>    
   
       </div> 
				
				<!--  end product-table................................... --> 
				</form>
				
				<?php
				
						if($num < 1)
							echo "<strong><h2>Você não tem animais cadastrados!</h2></strong>";
				
				?>
				

			</div>
			
			
			<!--  end content-table  -->
		
			<!--  start actions-box ............................................... -->
		
			<!-- end actions-box........... -->
			
			<!--  start paging..................................................... -->
			<table border="0" cellpadding="0" cellspacing="0" id="paging-table">
			<tr>
			<td>
				<a href="index.php?pagina=verAnimais&page=<?=$primeira_pagina?>" class="page-far-left"></a>
				<a href="index.php?pagina=verAnimais&page=<?=$pagina_anterior?>" class="page-left"></a>
				<div id="page-info">Página <strong><?echo $pagina_atual?></strong> / <?echo $ultima_pagina?></div>
				<a href="index.php?pagina=verAnimais&page=<?=$proxima_pagina?>" class="page-right"></a>
				<a href="index.php?pagina=verAnimais&page=<?=$ultima_pagina?>" class="page-far-right"></a>
			</td>
			<td>
			</td>
			</tr>
			</table>
			
			
				
						
				
		
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

</div>