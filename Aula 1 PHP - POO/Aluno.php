<?php

//criar classe Aluno com os atributos, ra , nome, p1, p2, media
//crie os metodos MostrarAtributos() e Calcular Media()

class Aluno
{
    public $ra;
    public $nome;
    public $p1;
    public $p2;
    public $media;
    public $situacao;
    
    public function MostrarAtributos(){
        echo "<h1> NSA 2 ATUALIZADO 2026 ATUALIZADO SECULO 21</h1>";'';
        echo "<p>RA: ".$this->ra." <p>Nome: ".$this->nome."<hr> <p>  Nota 1: ".$this->p1." <p>Nota 2: ".$this->p2." <p>Media: ".$this->media." <p> Situação: ".$this->situacao;
    }

    public function CalcularMedia()
    {
        $this->media= ($this->p1 + $this->p2) / 2;
        if ($this->media >= 6)
        {
            $this->situacao = "Aprovado! ";
        }
        else
            {
                $this->situacao = "Reprovado! ";
            }
    }
}

$a1 = new Aluno();
$a1->ra = 16017;
$a1->nome = "Guilherme";
$a1->p1 = 10;
$a1->p2 = 5;

$a1->CalcularMedia();
echo '<div class="card">';
$a1->MostrarAtributos();
echo '</div>';

echo " <center> <footer> BIG DATA </footer> </center>"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NSA ATUALIZADO</title>
    <link rel="stylesheet" href="aluno_style.css">
</head>
<body>
    
</body>
</html>
