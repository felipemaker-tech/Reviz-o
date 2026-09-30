<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>

    <h1>Resultado do Aluno</h1>

    <p><strong>Aluno:</strong> <?php echo $nome; ?></p>

    <p><strong>Nota 1:</strong> <?php echo $nota1; ?></p>

    <p><strong>Nota 2:</strong> <?php echo $nota2; ?></p>

    <p><strong>Média:</strong> <?php echo number_format($media, 1, ',', '.'); ?></p>

    <p>
        <strong>Situação:</strong>
        <?php echo $situacao; ?>
    </p>

</body>
</html>