<?php 

error_reporting(E_ALL & ~E_NOTICE);

$nome = $_GET["nome"]; //_GET variavel global que pega pela url, se eu digitar na url ?nome=oi, vai aparecer o oi no echo

echo $nome;

 ?>