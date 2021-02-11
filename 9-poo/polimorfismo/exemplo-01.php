<?php 

abstract class Animal {

	public function falar(){

		return "Som";
	}

	public function mover(){

		return "Anda";
	}
}

class Cachorro extends Animal {

	public function falar(){

		return "Late";
	}
}

class Gato extends Animal{

	public function falar(){

		return "Mia";
	}
}

class Passaro extends Animal {

	public function mover(){

		return "Voa e " . parent::mover();//:: static
	}

	public function falar(){

		return "canta";
	}
}

$pluto = new Cachorro();

echo $pluto->falar() . "<br/>";
echo $pluto->mover() . "<br/>";

echo "--------------------<br/>";

$gatin = new Gato();

echo $gatin->falar() . "<br/>";
echo $gatin->mover() . "<br/>";

echo "--------------------<br/>";

$passarin = new Passaro();

echo $passarin->falar() . "<br/>";
echo $passarin->mover() . "<br/>";
 ?>