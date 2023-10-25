<?php
function calculaIdade($nascimento){
	$diaMes = date('md');
	$ano = date('Y');
	$diaMesN = date('md', strtotime($nascimento));
	$anoN = date('Y', strtotime($nascimento));
	if($diaMes >= $diaMesN)
		$idade = $ano - $anoN;
	else
		$idade = $ano - $anoN;
	return $idade;
									}
?>