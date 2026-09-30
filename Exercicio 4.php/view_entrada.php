<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calcular Média</title>
</head>
<body>

    <h1>Calculadora de Média do Aluno</h1>

    <form action="mediaController.php" method="POST">

        <label>Nome do aluno:</label><br>
        <input type="text" name="nome" required>
        <br><br>

        <label>Nota 1:</label><br>
        <input type="number" name="nota1" step="0.1" min="0" max="10" required>
        <br><br>

        <label>Nota 2:</label><br>
        <input type="number" name="nota2" step="0.1" min="0" max="10" required>
        <br><br>

        <button type="submit">Calcular Média</button>

    </form>

</body>
</html>