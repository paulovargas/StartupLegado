<!-- start content -->
<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		<h1>Todos os Clientes</h1>
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
				
							
				
				<form id="mainform" action="" method="POST">
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					<th class="table-header-check"><a id="" ></a> </th>
					<th class="table-header-repeat line-left minwidth-1"><a>Nome</a>	</th>
					<th class="table-header-repeat line-left minwidth-1"><a>Endereço</a></th>
					<th class="table-header-repeat line-left minwidth-1"><a>Cidade</a></th>
					<th class="table-header-repeat line-left minwidth-3"><a>Estado</a></th>
					<th class="table-header-repeat line-left minwidth-1"><a>Telefone</a></th>
					<th class="table-header-repeat line-left"><a>Email</a></th>					
					<th class="table-header-repeat line-left minwidth-1"><a>CPF/CNPJ</a></th>					
					<th class="table-header-repeat line-left minwidth-2"><a>I.E</a></th>					
					<th class="table-header-repeat line-left minwidth-2"><a>Usuários</a></th>					
					<th class="table-header-repeat line-left minwidth-1"><a>Data de inclusão</a></th>
					<th class="table-header-repeat line-left minwidth-2"><a>Opções</a></th>
				</tr>				
				<tr>				
				<?php
					
					include('config.php');

							$sql = "SELECT * FROM cliente";
							$result = mysqli_query($conecta, $sql); 
							
							while($consulta = mysqli_fetch_array($result)){								
								
								$vid = $consulta['id'];
								
								echo "<td><strong>{$consulta['id']}</strong></td>";
								echo "<td><strong>{$consulta['nome_cliente']}</strong></td>";
								echo "<td><strong>{$consulta['endereco']}</strostart footerng></td>";
								echo "<td><strong>{$consulta['cidade']}</strong></td>";
								echo "<td><strong>{$consulta['estado']}</strong></td>";
								echo "<td><strong>{$consulta['telefone']}</strong></td>";
								echo "<td><strong>{$consulta['email']}</strong></td>";
								echo "<td><strong>{$consulta['cpf_cnpj']}</strong></td>";
								echo "<td><strong>{$consulta['inscricao_est']}</strong></td>";
								echo "<td><strong>{$consulta['num_usuarios']}</strong></td>";
								echo "<td><strong>{$consulta['dta_inclu']}</strong></td>";
								
								echo "<td class='options-width'><a href='admin.php?pagina=addeditcliente&id=$vid' title='Editar' class='icon-1 info-tooltip' type='submit''></a><a href='' title=Excluir class=icon-2 info-tooltip></a></td>";
								
								
								echo "<tr>";
								
							}
							
								

							mysqli_free_result($result);
						
				
				
				?>	
					
					
				<!--  end product-table................................... --> 
				</tr>
				
				
							
				</table>
				<!--  end product-table................................... --> 
				</form>
				

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