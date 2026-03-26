<?php
require_once "Fabricante.php";

class Produto {
    private $descricao;
    private $estoque;
    private $preco;
    private $fabricante;

    public function __construct($descricao, $estoque, $preco){
        $this->descricao = $descricao;
        $this->estoque = $estoque;
        $this->preco = $preco;
        $this->fabricante = null;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setEstoque($estoque){
        $this->estoque = $estoque;
    }

    public function getEstoque(){
        return $this->estoque;
    }

    public function setPreco($preco){
        $this->preco = $preco;
    }

    public function getPreco(){
        return $this->preco;
    }

    public function setFabricante(Fabricante $f){
        $this->fabricante = $f;
    }

    public function getFabricante(){
        return $this->fabricante;
    }
}
