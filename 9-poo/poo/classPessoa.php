<?php 

class Pessoa {

	public $nome;//Atributo
	public $idade;

	public function falar(){//Metodo

		return "O meu nome é ".$this->nome. " e eu tenho ".$this->idade. " anos.";//como ta dentro do metodo eu uso $this-> ao inves de $nome

	}

}

$glaucio = new Pessoa();
$glaucio->nome = "Glaucio Daniel";
$glaucio->idade = 30;
echo $glaucio->falar();

 ?>