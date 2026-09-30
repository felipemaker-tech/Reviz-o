<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo1 - Processamento de dados</title>
</head>
<body>
    <header>
        <h1>formulario de cadastro</h1>
</header>
<main>
    <form action= "logicaController.php" method="post">
        <label for="">Nome</label>
        <br>
        <input type="text" id = "nome" name="nome"
        placeholder="Digite seu nome...">
        <br> <br>
        <label for="idade">Idade</label>
        <br>
        <input type="number" id="idade" name="idade">
        <br><br>
        <button type="submit">Enviar</button>

    </form>

    
    
</body>
</html>