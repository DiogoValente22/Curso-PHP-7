<?php

$empresa = "diogo e joao";

//str_replace parametros: (oq vc quer que mude, pelo oq vai mudar, variavel que está essa palavra);
$empresa = str_replace("o", "0", $empresa); 
$empresa = str_replace("e", "3", $empresa);
echo $empresa;

?>