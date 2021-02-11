<form method="post">

	<input type="text" name="busca">
	<button type="submit">Enviar</button>

</form>

<?php 

if (isset($_POST['busca'])) {

	
	//echo strip_tags("kk eae: ".$_POST['busca'], "<a>"); //remove todas as tags e deixa só o condeudo. pode ter exceções utlizando um segundo parametro
	echo htmlentities($_POST['busca']); // escreve o codigo q vc digitou exemplo: <strong>a</strong>, ao inves de aparecer "a" e, negrito, aparece exatamente o codigo, logo ele n funciona
}

 ?>