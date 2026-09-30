<?php 
$nome= "mateus";

$arrayInformacoes =[
    [
        "nome"=> "Mateus",
        "cpf" => "000.000.000-00",
        "idade" => 16
    ],
["nome"=> "Mateus",
        "cpf" => "000.000.000-00",
        "idade" => 16
]
]

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 1 PHP + html</title>
</head>
<body>
    <h1>Exemplo de cadastro</h1>
    <p><?=$nome?></P>
    
    <hr>
    <h1> informaçães do array</h1>
    <?php
    foreach ($arrayInformacoes as $informacao){

    ?>
    <p> Exibindo informações </p>
    <p> nome: <?= $informações["nome"]?></p>
    <p> Idade: <? = $Informacao["idade"]?></p>
    <p> CPF: <? =$Informacao["cpf"]?></p>
    <?php}?>
    
</body>
</html>
