<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cauculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form action="calculadoraController.php" method="POST"> 
    <label>Número 1:</label>
    <input type="number" name="numero1" step="any" required>
     <br><br>
     <input type="number" name="numero1" step="any" required> 
     <br><br>
     <label>Operação:</label> 
     <select name="operacao" required> 
    <option value="somar">Somar</option>
    <option value="subtrair">Subtrair</option>
     <option value="multiplicar">Multiplicar</option> 
     <option value="dividir">Dividir</option>
     </select> 
     <br><br>
     <button type="submit">Calcular</button> 
    </form>
    
</body>
</html>
