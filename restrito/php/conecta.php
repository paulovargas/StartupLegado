 <?php

	


$dsn = 'mysql:host=mysql16-farm76.kinghost.net;dbname=cabanhacustodi;charset=utf8';
$username = 'cabanhacus_add1';
$password = 'NaldoP1998';
 
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