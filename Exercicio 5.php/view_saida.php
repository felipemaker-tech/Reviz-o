<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Compra</title>
</head>
<body>

    <h1>Resumo da Compra</h1>

    <p><strong>Cliente:</strong> <?php echo $cliente; ?></p>

    <p><strong>Produto:</strong> <?php echo $produto; ?></p>

    <p><strong>Quantidade:</strong> <?php echo $quantidade; ?></p>

    <p>
        <strong>Preço unitário:</strong>
        R$ <?php echo number_format($preco, 2, ',', '.'); ?>
    </p>

    <hr>

    <p>
        <strong>Subtotal:</strong>
        R$ <?php echo number_format($total, 2, ',', '.'); ?>
    </p>

    <p>
        <strong>Desconto:</strong>
        R$ <?php echo number_format($desconto, 2, ',', '.'); ?>
    </p>

    <p>
        <strong>Total:</strong>
        R$ <?php echo number_format($totalFinal, 2, ',', '.'); ?>
    </p>

</body>
</html>