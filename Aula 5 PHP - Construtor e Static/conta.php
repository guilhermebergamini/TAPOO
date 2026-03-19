<?php
class Conta
{
    private int $numero;
    private string $titular;
    private float $saldo;
    public function __construct(int $numero, string $titular, float $saldo)
    {
        $this->numero = $numero;
        $this->titular = $titular;
        $this->saldo = $saldo;
    }
    public function getNumero()
    {
        return $this->numero;
    }
    public function setNumero(int $numero)
    {
        $this->numero = $numero;
    }
    public function getTitular()
    {
        return $this->titular;
    }
    public function setTitular(string $titular)
    {
        $this->titular = $titular;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
    public function setSaldo(int $saldo)
    {
        $this->saldo = $saldo;
    }
    public function MostrarAtributos()
    {
        echo "<br>Número: " . $this->getNumero() . "<br>";
        echo "Titular: " . $this->getTitular() . "<br>";
        echo "Saldo: " . $this->getSaldo() . "<br>";
    }
}
