<?php 

class Pessoa {

/* Publico: Todo mundo vê
   Protegido: na mesma classe e classe estendida 
   privado: mesma classe

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
//programador recebe tudo que tem na classe pessoa
class Programador extends Pessoa { 

	public function verDados(){

		echo get_class($this) . "<br/>";

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>"; //senha é privado, logo não vai herdar.
	}
}

$objeto = new Programador();

//echo $objeto->senha . "<br/>";

$objeto->verDados();


 ?>