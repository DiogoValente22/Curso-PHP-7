<?php 


$pessoa = array(
	'nome'=>'João',
	'idade'=>20
);

//OBS: se colocar & vai alterar o valor da variavel, se não colocar, vai alterar só dentro do foreach
foreach ($pessoa as $value) {
		
		//gettype serve para detectar o valor da variavel, no caso, integer é a idade (20), então ele vai detectar a variavel idade e vai somar ela + 10
		if(gettype($value) === 'integer') $value +=10;
		echo $value.'<br>';
}

print_r($pessoa);


 ?>