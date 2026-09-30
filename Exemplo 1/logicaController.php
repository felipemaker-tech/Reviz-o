<?php 

// var_dump($_POST);

$nome = $_post["nome"];
$idade = $_post["idade"];

if($idade>=18){
    $situacao = "maior de idade";
}else{
    $situacao = "menor de idade";
}

// envia valores das variaveis para a view_saida
require_once "view_saida.php";

