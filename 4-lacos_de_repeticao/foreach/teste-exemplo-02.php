<form>
Nome Completo: <br>
<input type="name" name="nomeCompleto"><br><br>

Data de nascimento: <br>
<input type="date" name="dataNasc"><br><br>

Profissão:<br>
<input type="name" name="profissao"><br><br>

Numero de matricula: <br>
<input type="name" name=""><br>

<input type="submit" name="enviarForm"><br><br>

</form>
<?php

if(isset($_GET)){

	foreach ($_GET as $key => $value) {
		
		echo "Nome do campo: ". $key. "<br>";

		echo "Valor do campo: " . $value . "<br>";

		echo "<hr>";
	}
}

?>