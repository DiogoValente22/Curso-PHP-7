<?php 

function soma(int ...$valores):string { // os :string é pra converter o resultado em string, pode esr float ou outra coisa

	//array sum vai somar todos os valores
	return array_sum($valores);

}

echo var_dump(soma(2, 2));
echo "<br>";
echo soma(25, 33);
echo "<br>";
echo soma(1.5, 3.2);
echo "<br>";

 ?>