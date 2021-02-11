<?php

$name = "images";

//se não existir o diretorio
if (!is_dir($name)) {

	//cria o diretorio
	mkdir($name);
	echo "Diretorio $name criado com sucesso!";
} else {

	//remover o diretorio
	rmdir($name);
	echo "já existe o diretório: $name foi removido";
}

 ?>