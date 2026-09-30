<?php

$nome = $_POST["nome"];
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];

// Calculando a média
$media = ($nota1 + $nota2) / 2;

// Definindo a situação
if ($media >= 7) {
    $situacao = "Aprovado";
} elseif ($media >= 5) {
    $situacao = "Recuperação";
} else {
    $situacao = "Reprovado";
}

// Envia os dados para a view de saída
include "view_saida.php";

?>