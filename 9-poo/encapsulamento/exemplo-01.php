<?php 

class Pessoa {

/* Publico: Todo mundo vê
   Protegido: na mesma classe e classe estendida 
   privado: apenas na classe

*/

	public $nome = "Rasmus Lerdorf";
	protected $idade = 48;
	private $senha = "123456";//só a propria classe consegue acessar

	public function verDados(){

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";

	}

}

$objeto = new Pessoa();

//echo $objeto->senha . "<br/>";

$objeto->verDados();


 ?>