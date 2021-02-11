<?php

$a = 55.0;

$b = 55;
echo "a maior que b: ";
var_dump($a > $b);

echo "<br>";
echo "a menor que b: ";
var_dump($a < $b);

echo "<br>";

// == compara o valor
echo "a igual b: ";
var_dump($a == $b);

echo "<br>";

//=== compara o valor e o tipo da variavel como: inteiro e float
echo "valor de a tem mesmo valor e variavel que b: ";
var_dump($a === $b);

echo "<br>";

echo "a diferente que b: ";
var_dump($a != $b);

echo "<br>";

//
echo "á é completamente diferente  que b (valor e variavel diferente): ";
var_dump($a != $b);

?>