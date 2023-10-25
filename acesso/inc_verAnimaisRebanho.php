<!-- start content -->
<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		<h1>Todos os Animais do Grupo <?php echo $grupo = $_GET['grupo']; ?></h1>
		
		<a target ="_blank" href="relatorioAnimaisGrupo.php" id="acc-details">Imprimir relatório </a>
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
					<th class="table-header-repeat line-left minwidth-2"><a>Descrição</a></th>
					<!--<th class="table-header-repeat line-left minwidth-1"><a>Especie</a></th>-->
					<th class="table-header-repeat line-left minwidth-1"><a>Grupo</a></th>
					<th class="table-header-repeat line-left minwidth-1"><a>Propriedade</a></th>
					<th class="table-header-repeat line-left minwidth-1"><a>Status</a></th>					
					<th class="table-header-repeat line-left minwidth-2"><a>Pelagem</a></th>					
					<!--<th class="table-header-repeat line-left minwidth-2"><a>Peso</a></th>-->
					<th class="table-header-repeat line-left minwidth-2"><a>Opções</a></th>
				</tr>
				
				
				<tr>
				
				
				<?php				
				
							session_start();
														
							$id = $_GET['id'];
							
							//$id = $_SESSION['usuario']['cliente_id'];
							
							$sql = "SELECT * FROM animais JOIN rebanho ON animais.rebanho_id = rebanho.id JOIN Propriedade ON animais.propriedade_id = propriedade.id  where rebanho.id = $id order by nomePropriedade asc";  //JOIN finalidade_animal ON animais.finalidade_animal_id = finalidade_animal.id
							$result = mysqli_query($conecta, $sql); 

							
							
							while($consulta = mysqli_fetch_array($result)){ 
								
								$num = $num + 1;
											
								$id = $consulta['idanimal'];
								
								//$nascimento = $consulta['data_nascimento'];
								
								//include('funcoes.php');								
								
								echo "<td><strong>$num</strong></td>";
								echo "<td><strong>{$consulta['numero_brincos']}</strong></td>";
								echo "<td><strong>{$consulta['descricao']}</strong></td>";
								//echo "<td><strong>{$consulta['especie']}</strong></td>";										
								echo "<td><strong>{$consulta['nomeRebanho']}</strong></td>";
								echo "<td><strong>{$consulta['nomePropriedade']}</strong></td>";
								echo "<td><strong>{$consulta['status']}</strong></td>";
								echo "<td><strong>{$consulta['pelagem']}</strong></td>";
								
								
								// $data_nasc = date('d/m/Y', strtotime($consulta['data_nascimento']));
								
								// $data_d = date('d');
								// $data_m = date('m');
								// $data_a = date('Y');
								
								// $data_nasc_d = substr($data_nasc, 0,2);
								
								// $data_nasc_m = substr($data_nasc, 3,2);
								
								// $data_nasc_a = substr($data_nasc, 6,4);
								
								// $idade_ano = $data_a - $data_nasc_a;
								
								// $idade_mes = $data_m - $data_nasc_m;
								
								// $idade_dia = $data_d - $data_nasc_d;
								
								// $idadedia = "";
								
								// $idademes = "";
								
								// $idadeano = "";							
								
								
								// if($idade_ano >= 1)
									// $idadeano = "$idade_ano anos";
								// if($idade_mes >= 1)
									// $idademes = "$idade_mes meses";
								// elseif($idade_dia >= 1)
									// $idadedia = "$idade_dia dias";
									//echo "<td><strong>$idademes</strong></td>";
								//else
									// echo "<td><strong>$idadeano $idademes $idadedia</strong></td>";
								
									
								//echo "<td><strong>{$consulta['peso']}</strong></td>";
								
								
															
								echo "<td class='options-width'><a href='index.php?pagina=verEventosAnimal&id=$id' title='Histórico do animal' class='icon-3 info-tooltip'></a><a href='index.php?pagina=foto&id=$id' title='Ver foto' class='icon-3 info-tooltip'></a><a href='index.php?pagina=addeditanimal&id=$id' title='Editar' class='icon-1 info-tooltip'></a><a href='index.php?pagina=excluianimal&id=$id' title='Excluir' class='icon-2 info-tooltip'></a></td>";
								
								
								echo "<tr>";
								
							}mysqli_free_result($result);						
				
				
				?>					
					
				<!--  end product-table................................... --> 
				</tr>
											
				</table>
				
				
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

</div>