<?php
require_once 'Produto.php';
require_once 'Fabricante.php';

$fabricante = new Fabricante("Vero", "Rua 123", "001");
$produto = new Produto("Alguma descrição", 5, 20.00);

// Associando fabricante ao produto
$produto->setFabricante($fabricante);

// Exibindo
echo "Produto: " . $produto->getDescricao() . PHP_EOL;
echo "Fabricado por: " . $produto->getFabricante()->getNome() . PHP_EOL;

echo '<pre>';
var_dump($produto);
var_dump($fabricante);
