<?php

//crie a classe Produto com codigo, nome, preco, qntd e total
//crie os metodos mostraratributos(),
//aplicar aumento, por meio de uma porcentagem que sera um parametro
//CalcularTotal()


class Produto {

    public $codigo;
    public $nome;
    public $precoUnitario;
    public $qntd;
    public $total;
    public $aumento;
    public $precoAumentado;

    public function MostrarAtributos()
    {
        echo "<p>Código: ".$this->codigo.
             "<p>Nome: ".$this->nome.
             "<p>Preço unitário: ".$this->precoUnitario.
             "<p>Quantidade em estoque: ".$this->qntd.
             "<p>Valor total em estoque: ".$this->total;
    }

    public function AplicarAumento($porcentagem)
    {
        $this->aumento = ($porcentagem / 100);
        $this->precoAumentado = $this->precoUnitario + ($this->precoUnitario * $this->aumento);
    }

    public function CalcularTotal()
    {
        $precoBase = $this->precoAumentado ?? $this->precoUnitario;
        $this->total = $precoBase * $this->qntd;
    }

    // tipo: 1 = entrada, 2 = saída
    public function Estoque ($tipo_entrada, $qntd_desejada){
        if ($tipo_entrada == 1)
        {
            $this->qntd += $qntd_desejada;
        }
        elseif ($tipo_entrada == 2)
        {
            $this->qntd -= $qntd_desejada;
        }
        else
        {
            echo "<p>O código de entrada e/ou saída não são reconhecidos pelo sistema</p>";
        }

        $this->CalcularTotal();
    }
    
}


$p1 = new Produto(); //INSTANCIA DE OBJETO
$p1->codigo = 1;
$p1->nome = "Arroz";
$p1->precoUnitario = 2.50;
$p1->qntd = 10;


$p1->AplicarAumento(10);
$p1->CalcularTotal();


echo "<h3>Dados iniciais do produto</h3>";
$p1->MostrarAtributos();

// adicionar estoque
$p1->Estoque(1, 5); // entrada de 5 unidades
echo "<h3>Após entrada no estoque</h3>";
$p1->MostrarAtributos();

//tirar estoque
$p1->Estoque(2, 3); // saída de 3 unidades
echo "<h3>Após saída no estoque</h3>";
$p1->MostrarAtributos();
?>