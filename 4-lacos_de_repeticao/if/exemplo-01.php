<?php

$qualASuaIdade = 30;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca) {

	echo "Criança";

} else {
	echo "não é criança";
}

echo "<br>";

// operador ternario, um if de uma linha só: echo(condicao)?"resposta1":"resposta2"
echo ($qualASuaIdade < $idadeMaior)?"menor de idade":"maior de idade";
?>