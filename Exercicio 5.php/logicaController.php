<?php

$cliente = $_POST["cliente"];
$produto = $_POST["produto"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];

// Calcula o subtotal
$total = $preco * $quantidade;

// Calcula o desconto
if ($total >= 200) {
    $desconto = $total * 0.10;
} else {
    $desconto = 0;
}

// Calcula o valor final
$totalFinal = $total - $desconto;

// Envia os dados para a view de saída
include "view_saida.php";

?>