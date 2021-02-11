<?php

$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";

$q = strpos($frase, $palavra); // mostra o indice que a palavra mãe está

$texto = substr($frase, 0, $q); // pega tudo da variavel que vc quer de um lugar até outro (0(inicio da frase) até $q (palavra mãe))

var_dump($texto);

$texto2 = substr($frase, $q+ strlen($palavra), strlen($frase));

echo "<br>";

var_dump($texto2);


?>