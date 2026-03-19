<?php

class Estudante
{
    private $nome;
    private $media;


    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setMedia($media)
    {
        if ($media >= 0 && $media <= 10) {
            $this->media = $media;
        } else {
            echo "Erro: A média deve estar entre 0 e 10 <br>";
        }
    }


    public function getNome()
    {
        return strtoupper($this->nome);
    }

    public function getMedia()
    {
        return $this->media;
    }


    public function MostrarAtributos()
    {
        echo "Nome: " . $this->getNome() . "<br>";
        echo "Média: " . $this->getMedia() . "<br>";
    }


    public function EstaAprovado()
    {
        return $this->media >= 6;
    }

    public function ExibirInformacoes()
    {
        echo "Nome: " . $this->getNome() . "<br>";
        echo "Média: " . $this->getMedia() . "<br>";
        echo "Status: ";

        if ($this->EstaAprovado()) {
            return true;
        } else {
            return false;
        }

        echo "<hr>";
    }
}


$a1 = new Estudante();
$a1->setNome("Guigz");
$a1->setMedia(8);


$a2 = new Estudante();
$a2->setNome("Bla bla car");
$a2->setMedia(5);

$a1->ExibirInformacoes();
$a2->ExibirInformacoes();
