 <?php

	


$dsn = 'mysql:host=localhost;dbname=estagio;charset=utf8';
$username = 'root';
$password = '';
 
$db = new PDO($dsn, $username, $password);

if(!$db){
	echo "erro";
}


/*
$busca = 'SELECT * FROM categorias ';

$result = $db->query($busca, PDO::FETCH_ASSOC) or die("erro");

foreach ($result as $row) {
    echo "{$row['titulo']}n";
}*/

?> 