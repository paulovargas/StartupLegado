<?php
require_once('conecta.php'); 

$cod = $_POST['title'];
if(!empty($cod)):
$busca = "SELECT * FROM animais WHERE rebanho_id = $cod ";

$result = $db->query($busca, PDO::FETCH_ASSOC) or die("erro");
?>

<select id="categoria-selecta">
				<option value="">
					Selecione
				</option>

				<?php 
				 foreach ($result as $row){
				    echo '<option value='.$row['id'].'>'.$row['numero_brincos'].'</option>';

				}
				?>
			
			</select>

<?php else: ?>

	<img src="img/pequeno-loader.gif">Selecione um estado
<?php endif; ?>