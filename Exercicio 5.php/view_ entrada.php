<!DOCTYPE html>
 <html lang="pt-br"> 
    <head> 
        <meta charset="UTF-8"> 
        <title>Compra - Loja</title>
     </head>
      <body>
         <h1>Calcular Compra</h1>
          <form action="compraController.php" method="POST"> 
            <label>Nome do cliente:</label>
            <br>
             <input type="text" name="cliente" required>
             <br><br>
              <label>Nome do produto:</label>
              <br>
               <input type="text" name="produto" required>
               <br><br>
                <label>Preço do produto:</label>
                <br>
                 <input type="number" name="preco" step="0.01" required>
                 <br><br> 
                 <label>Quantidade:</label>
                 <br> 
                 <input type="number" name="quantidade" min="1" required>
                 <br><br> 
                 <button type="submit">Calcular</button>
                 </form> 
                </body> 
                </html>