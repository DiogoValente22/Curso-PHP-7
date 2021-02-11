<?php
//variaveis pré definidas são conhecidas tambem como arrays super globais

//colocar (int etc) antes do $_GET[""]; é para converter a variavel
$nome = (int)$_GET["a"];

//var_dump($nome);

//serve para ver o ip do usuario pode usar tambem REMOTE_ADDR
$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;
?>