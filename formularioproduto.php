<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Produtos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Cadastro de Produtos</h2>
  <form action="cadproduto.php" method="POST">
  <div class="form-group">
      <label for="descricao">Descrição:</label>
      <input type="descricao" class="form-control" id="descricao" placeholder="descricao" name="descricao">
    </div>
    <div class="form-group">
      <label for="qtd">Quantidade:</label>
      <input type="qtd" class="form-control" id="qtd" placeholder="qtd" name="qtd">
    </div>
    <div class="form-group">
      <label for="preco">Preço:</label>
      <input type="preco" class="form-control" id="preco" placeholder="preco" name="preco">
    </div>
 
    <button type="submit" class="btn btn-default">Cadastrar</button>
  </form>
</div>

</body>
</html>
