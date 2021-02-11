<?php 

$a = 10;
//& é passagem de valor por referencia
function trocaValor(&$b){

	$b += 50;

	return $b;

}

echo trocaValor($a);
echo "<br>";

echo trocaValor($a);
echo "<br>";

//o que acontece na função, fica só dentro da função. ou seja: vai pegar o valor original de $a: 10
echo $a;

 ?>