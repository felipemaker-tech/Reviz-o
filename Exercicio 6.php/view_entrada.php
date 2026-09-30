<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Temperatura</title>
</head>
<body>
    <h1>Conversor de Temperatura</h1>

    <form action="temperaturaController.php" method="POST">

        <label>Temperatura em Celsius:</label>
        <input type="number" name="celsius" step="0.01" required>

        <br><br>

        <button type="submit">Converter</button>

    </form>

    
</body>
</html>