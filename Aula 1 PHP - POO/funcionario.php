<?php 

class Funcionario{
    //Declaracao de Atributos
    public $codigo;
    public $nome;
    public $salario;
    public $salarioaumentado;
    public $aumento;

    public function MostrarAtributos(){
        echo "<p>Código: ".$this->codigo." <p>Nome: ".$this->nome." <p>Salário: ".$this->salario;
    }

    public function AplicarAumento($porcentagem)
    {
        $this->aumento = ($porcentagem / 100);
        $this->salarioaumentado = $this->salario + ($this->salario * $this->aumento);
        $this->salario = $this->salarioaumentado;
    }

}

$c1 = new Funcionario();

$c1->codigo = 1;
$c1->nome = "Guilherme";
$c1->salario = 1500;
$c1->MostrarAtributos();

$c1->AplicarAumento(10);
$c1->MostrarAtributos();
?>