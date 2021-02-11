<?php 

$data = array(
	"empresa"=>"Hcode Treinamentos",
	"nome_autor"=>"joaozin 3 pernas"
);

setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

echo "OK";

 ?>