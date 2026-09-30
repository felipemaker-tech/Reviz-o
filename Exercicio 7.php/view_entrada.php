<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Salário</title>
</head>
<body>

    <h1>Calcular Novo Salário</h1>

    <form action="salarioController.php" method="POST">

        <label>Nome do funcionário:</label>
        <input type="text" name="nome" required>
        <br><br>

        <label>Salário atual:</label>
        <input type="number" name="salario" step="0.01" required>
        <br><br>

        <label>Cargo:</label>
        <select name="cargo" required>
            <option value="">Selecione</option>
            <option value="Estagiário">Estagiário</option>
            <option value="Assistente">Assistente</option>
            <option value="Analista">Analista</option>
        </select>
        <br><br>

        <button type="submit">Calcular</button>

    </form>

</body>
</html>