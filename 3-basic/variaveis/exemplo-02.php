<?php
/*
$anoNascimento = 1990;

$nomeCompleto = "Pedro Alvares Cabral"; */
//exemplo comentario: na linha de baixo temos uma variavel com numero no nome
$nome1 = "joão";

$sobrenome = "Rangel";
// o . serve para concatenar variaveis
$nomeCompleto = $nome1 . " " . $sobrenome;

echo $nomeCompleto;

exit;

echo $nome1;

echo "<br/>";

//eliminar variavel da memoria
unset($nome1); 

//isset: saber se a variavel existe
if (isset($nome1)){

	echo $nome1;
}



?>