<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>

    <h1>Resultado do Cálculo</h1>

    <p><strong>Funcionário:</strong> <?php echo $nome; ?></p>

    <p><strong>Cargo:</strong> <?php echo $cargo; ?></p>

    <br>

    <p>
        <strong>Salário atual:</strong>
        R$ <?php echo number_format($salario, 2, ',', '.'); ?>
    </p>

    <p>
        <strong>Aumento:</strong>
        R$ <?php echo number_format($aumento, 2, ',', '.'); ?>
    </p>

    <br>

    <p>
        <strong>Novo salário:</strong>
        R$ <?php echo number_format($novoSalario, 2, ',', '.'); ?>
    </p>

    <br>

    <a href="view_entrada.php">Voltar</a>

</body>
</html>