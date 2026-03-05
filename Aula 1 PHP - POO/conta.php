<?php

class Conta
{
    //Declaração de Atributos
    public $numero;
    public $titular;
    public $saldo;
    //Declaracao dos Metodos
    public function MostrarAtributos(){
        echo "<p>Número: ".$this->numero." Titular: ".$this->titular." Saldo: ".$this->saldo;
    }

    public function Sacar($valorSaque)
    {
        //$this->saldo = $this->saldo - $valorSaque; igual ao de baixo, menos repeticao
        $this->saldo -= $valorSaque;
    }

    public function Depositar($valorDeposito)
    {
        $this->saldo += $valorDeposito;
        
    }

   
    public function Transferir($valorTransferencia, Conta $contaDestino)
    {
        // debita da conta atual
        $this->saldo -= $valorTransferencia;
        // credita na conta destino
        $contaDestino->saldo += $valorTransferencia;
    }
}

class Funcionario{

    //Declaracao de Atributos
    public $codigo;
    public $nome;
    public $salario;
}


$c1 = new Conta(); //INSTANCIA DE OBJETO
$c1->numero = 10;
$c1->titular = "Fatec";
$c1->saldo = 100;
$c1->MostrarAtributos();
$c1->Depositar(10);
$c1->MostrarAtributos();

$c2 = new Conta();
$c2->numero = 20;
$c2->titular = "Aluno";
$c2->saldo = 50;
$c2->MostrarAtributos();

// transferência de 30 da conta 1 para conta 2
$c1->Transferir(30, $c2);

echo "<h3>Após transferência:</h3>";
$c1->MostrarAtributos();
$c2->MostrarAtributos();


?>



