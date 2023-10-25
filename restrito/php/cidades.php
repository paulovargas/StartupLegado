<?php
require_once('conecta.php'); 

$cod = $_POST['title'];
if(!empty($cod)):
   $busca = "SELECT * FROM animais WHERE rebanho_id = $cod order by numero_brincos asc";

   $result = $db->query($busca, PDO::FETCH_ASSOC) or die("erro");
?>

    <select class='styledselect_form_1' name ="animal_id">
				<option value="">
					Selecione
				</option>

				<?php 
				 foreach ($result as $row){
				    echo "<option value=".$row['idanimal'].">".$row['numero_brincos']." - ".$row['descricao']."</option>";

				}
				?>
			
     </select>
	 

<?php else: ?>

	<img src="img/pequeno-loader.gif">Selecione
<?php endif; ?>