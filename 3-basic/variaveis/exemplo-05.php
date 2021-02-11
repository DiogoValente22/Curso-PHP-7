<?php

$nome = "Gaucio</br>";

function teste() {

	global $nome;
	echo $nome;

}



function teste2() {
	$nome = "joão";
	$nome2 = "Almeida";
	echo $nome." agora no teste2"." ".$nome2;

}

teste();

teste2();

?>