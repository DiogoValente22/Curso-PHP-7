<?php 

interface Veiculo {

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo {

public function acelerar($velocidade)
	{

		echo "O veiculo acelerou até " . $velocidade . " km/h<br/>";

	}

public function frenar($velocidade)
	{

		echo "o veiculo frenou até " . $velocidade . " km/h<br/>";

	}

public function trocarMarcha($marcha)
	{


		echo "o veículo engatou a marcha " . $marcha;

	}


}

class DelRey extends Automovel {

	public function empurrar(){


	}
}

$carro = new DelRey();

$carro->acelerar(200);

$carro->frenar(150);

$carro->trocarMarcha(2);

 ?>