
<?php
	//recebemos nosso parâmetro vindo do form
	$parametro = isset($_POST['pesquisaCliente']) ? $_POST['pesquisaCliente'] : null;
	//$msg .= "<form id='mainform' action="">";
	$msg .="<table width='100%' cellpadding='0' cellspacing='0' id='product-table'>";
	$msg .="<tr>";
	$msg .="<th class='table-header-check'><a id='' ></a> </th>";
	$msg .="<th class='table-header-repeat line-left minwidth-2'><a>Brinco</a></th>";
	$msg .="<th class='table-header-repeat line-left minwidth-1'><a>Grupo</a></th>";
	$msg .="<th class='table-header-repeat line-left minwidth-2'><a>Propriedade</a></th>";
	$msg .="<th class='table-header-repeat line-left minwidth-2'><a>Descrição</a></th>";	
	$msg .="<th class='table-header-repeat line-left minwidth-1'><a>Status</a></th>";
	$msg .="<th class='table-header-repeat line-left minwidth-1'><a>Pelagem</a></th>";
	$msg .="<th class='table-header-repeat line-left minwidth-2'><a>Opções</a></th>";
	// $msg .="			<th>Status:</th>";
	// $msg .="		</tr>";
	// $msg .="	</thead>";
	// $msg .="	<tbody>";
				
				//requerimos a classe de conexão
				require_once('class/Conexao.class.php');
					try {
						$pdo = new Conexao(); 
						$resultado = $pdo->select("SELECT * FROM propriedade join animais on propriedade.id = animais.propriedade_id join rebanho on animais.rebanho_id = rebanho.id WHERE numero_brincos LIKE '$parametro%' ORDER BY numero_brincos ASC");
						$pdo->desconectar();
								
						}catch (PDOException $e){
							echo $e->getMessage();
						}	
						//resgata os dados na tabela
						if(count($resultado)){
							
						
							
							foreach ($resultado as $res){
								
								if($res['rebanho_id'] != 11){
									
									
	$msg .="				<tr>";
	
	$id = $res['idanimal'];
	
	$data_nasc = date('d/m/Y', strtotime($res['data_nascimento']));
										
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
											$idadedia = "$idade_dia dias";
	
	$num = $num + 1;
	$msg .="<td><strong>" .$num. "</strong></td>";
	$msg .="<td><strong>".$res['numero_brincos']."</strong></td>";
	$msg .="<td><strong>".$res['nomeRebanho']."</strong></td>";
	$msg .="<td><strong>".$res['nomePropriedade']."</strong></td>";
	$msg .="<td><strong>".$res['descricao']."</strong></td>";
	$msg .="<td><strong>".$res['status']."</strong></td>";
	$msg .="<td><strong>".$res['pelagem']."</strong></td>";
	$msg .="<td class='options-width'><a href='index.php?pagina=vereventosAnimal&id=$id' title='Histórico do animal' class='icon-3 info-tooltip'></a></a><a href='index.php?pagina=addeditanimal&id=$id' title='Editar' class='icon-1 info-tooltip'></a><a href='index.php?pagina=excluianimal&id=$id' title='Excluir' class='icon-2 info-tooltip'></a></td>";
	$msg .="				</tr>";
								}
								

	
	
	
							}	
						}else{
							$msg = "";
							$msg .="Nenhum resultado foi encontrado...";
						}
	//$msg .="	</tbody>";
	$msg .="</table>";
	//retorna a msg concatenada
	echo $msg;
?>