<?php

$a = NULL;

$b = 8;

$c = 10;

// o ?? vai parar no primeiro valor não nulo, ou seja, vai exibir a variavel b
echo $a ?? $b ?? $c;

?>