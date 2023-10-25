<?php


$host = "mysql08-farm76.kinghost.net";
$username = "sistemabuf_add1";
$password = "Senha123*";
$db = "sistemabuffalo";

mysqli_connect($host,$username,$password) or die("Impossível conectar ao banco."); 

@mysqli_select_db($db) or die("Impossível conectar ao banco"); 

$result=mysqli_query("SELECT * FROM animais") or die("Impossível executar a query"); 

while($row=mysqli_fetch_object($result)) { 
	echo "<img src='getImagem.php?PicNum=$row->PES_ID' \">"; 
} 

?>