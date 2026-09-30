<?php

$nome = $_POST["nome"];
$salario = $_POST["salario"];
$cargo = $_POST["cargo"];


switch ($cargo) {
    case "Estagiário":
        $percentual = 10;
        break;

    case "Assistente":
        $percentual = 8;
        break;

    case "Analista":
        $percentual = 5;
        break;

    default:
        $percentual = 0;
        break;
}


$aumento = $salario * ($percentual / 100);


$novoSalario = $salario + $aumento;


include "view_saida.php";
?>