<!-- start content -->
<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		<h1>Próximos Eventos dos Grupos</h1>
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
					<th class="table-header-repeat line-left minwidth-1"><a>Grupo</a></th>
					<th class="table-header-repeat line-left minwidth-1"><a>Evento</a></th>
					<th class="table-header-repeat line-left minwidth-1"><a>Local</a></th>
					<th class="table-header-repeat line-left minwidth-1"><a>Data</a></th>
					<th class="table-header-repeat line-left minwidth-1"><a>Descrição</a></th>
					<th class="table-header-repeat line-left minwidth-1"><a>Opções</a></th>
				</tr>
				
				
				<tr>
				
				
				<?php
					
							//$id = $_GET['id'];

							$id = $_SESSION['usuario']['cliente_id'];
							
							$sql = "SELECT * FROM eventos JOIN rebanho on eventos.rebanho_id = rebanho.id where rebanho.cliente_id = $id order by data_evento asc";
							$result = mysqli_query($conecta, $sql);
							
								while($consulta = mysqli_fetch_array($result)){
									
									if($consulta['evento_grupo'] == 1){
								
										$dt_atual = date("d-m-Y"); // data atual
										$timestamp_dt_atual 	= strtotime($dt_atual); // converte para timestamp Unix
										$dt_expira		= $consulta['data_evento']; // data de expiração do evento
										$timestamp_dt_expira	= strtotime($dt_expira); // converte para timestamp Unix
										
								
										if($timestamp_dt_atual <= $timestamp_dt_expira){
								
											$id = $consulta['idevenR'];
											
											$num = $num + 1;
											
											echo "<td><strong>$num</strong></td>";
											echo "<td><strong>{$consulta['nomeRebanho']}</strong></td>";
											echo "<td><strong>{$consulta['nome']}</strong></td>";
											echo "<td><strong>{$consulta['local']}</strong></td>";
											echo "<td><strong>";
											echo date('d/m/Y', strtotime($consulta['data_evento']));
											"</strong></td>";
											echo "<td><strong>{$consulta['descri']}</strong></td>";
											
											
											//$passaId = {$consulta['nome_cliente']};
											
											echo "<td class='options-width'><a href='index.php?pagina=addeditaevento&id=$id' title='Editar' class='icon-1 info-tooltip'></a><a href='index.php?pagina=excluirEvento&id=$id' title='Excluir' class='icon-2 info-tooltip'></a></td>";
											
											
											echo "<tr>";
									}
								}
							}mysqli_free_result($result);
								
							
									
											
				
				?>	
					
					
				<!--  end product-table................................... --> 
				</tr>
				
				
							
				</table>
				<!--  end product-table................................... --> 
				</form>
				
				<?php
				
						if($num < 1)
							echo "<strong><h2>Você não tem eventos agendados!</h2></strong>";
				
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