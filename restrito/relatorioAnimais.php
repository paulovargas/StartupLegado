<?php 
 include ('mpdf60/mpdf.php');
 
 session_start();
 
 include('config.php');
 
 /* if($_SESSION['logado']==1)
						{
							$sql = "SELECT * FROM cliente where id = {$_SESSION['usuario']['cliente_id']}";
							
							$result = mysqli_query($conecta, $sql); 

							
							
							while($consulta = mysqli_fetch_array($result)){ 
								
							$cliente = $consulta['nome_cliente'];
								
							}mysqli_free_result($result);
							
							
							
							} */

 $html = '<div id="page-heading">
		<h1>Sistema Búffalo <br> Relatório de animais cadastrados</h1>
		<div id="page-heading">
		<h1>Cliente : '.$cliente.'</h1>
		<form id="mainform" action="">
				<table border="0" width="95%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					
					<th class="table-header-repeat line-left minwidth-1"><a></a></th>
					<th class="table-header-repeat line-left minwidth-1"><a>Rebanho</a></th>
					<th class="table-header-repeat line-left minwidth-2"><a>Finalidade</a></th>
					<th class="table-header-repeat line-left minwidth-1"><a>Especie</a></th>
					<th class="table-header-repeat line-left minwidth-1"><a>Raça</a></th>
					<th class="table-header-repeat line-left minwidth-1"><a>Pelagem</a></th>
					<th class="table-header-repeat line-left minwidth-2"><a>Brinco</a></th>
					<th class="table-header-repeat line-left minwidth-2"><a>Peso</a></th>
				</tr>
				
				
				<tr>
			
				</tr>
											
				</table>
				
				
				<!--  end product-table................................... --> 
				</form>
			<hr>	
								

			</div>'
;
				
				
							
				
							session_start();										
							
							$id = $_SESSION['usuario']['cliente_id'];
							
							$sql = "SELECT * FROM animais"; 
							$result = mysqli_query($conecta, $sql); 

							
							
							while($consulta = mysqli_fetch_array($result)){ 
								
								$num = $num + 1;
											
								$id = $consulta['idanimal'];
								
								//$nascimento = $consulta['data_nascimento'];
								
								//include('funcoes.php');								
								
								$html.='<table border="0" width="100%" cellpadding="20" cellspacing="20" id="product-table">
				<tr>
								
							
								<td>'.$consulta['nomeRebanho'].'</td>
								<td>'.$consulta['nomeFinalidade'].'</td>
								<td>'.$consulta['especie'].'</td>
								<td>'.$consulta['raca'].'</td>
								<td>'.$consulta['pelagem'].'</td>
								<td>'.$consulta['numero_brincos'].'</td>
								
				
				
				
			
				';
								
								/* $data_nasc = date('d/m/Y', strtotime($consulta['data_nascimento']));
								
								$data_d = date('d');
								$data_m = date('m');
								$data_a = date('Y');
								
								$data_nasc_d = substr($data_nasc, 0,2);
								
								$data_nasc_m = substr($data_nasc, 3,2);
								
								$data_nasc_a = substr($data_nasc, 6,4);
								
								$idade_ano = $data_a - $data_nasc_a;
								
								$idade_mes = $data_m - $data_nasc_m;
								
								$idade_dia = $data_d - $data_nasc_d;
								
								$idadedia = "";
								
								$idademes = "";
								
								$idadeano = "";							
								
								
								if($idade_ano >= 1)
									$idadeano = "$idade_ano anos";
								if($idade_mes >= 1)
									$idademes = "$idade_mes meses";
								elseif($idade_dia >= 1)
									$idadedia = "$idade_dia dias";	 */					
								
									
								$html.='<td>'.$consulta['peso'].'</td>
								</tr>
											
				</table><hr>';
								
															
								
								
								
								
							}mysqli_free_result($result);						
				
				
 
 $arquivo = "relatorioAnimais.pdf";
 $mpdf=new mPDF();
 
 $mpdf->WriteHTML($html);
 $mpdf->Output($arquivo, 'I');

 exit;