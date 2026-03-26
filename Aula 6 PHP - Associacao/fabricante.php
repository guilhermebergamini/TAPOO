<?php

class Fabricante {
    private $nome;
    private $endereco;
    private $documento;

    public function __construct($nome, $endereco, $documento){
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->documento = $documento;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setDocumento($documento){
        $this->documento = $documento;
    }

    public function getDocumento(){
        return $this->documento;
    }
}
