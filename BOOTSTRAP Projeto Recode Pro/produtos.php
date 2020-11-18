<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "fseletro";

//criando a conexão

$conn = mysqli_connect($servername, $username, $password, $database);

// verfificando a conexão
if (!$conn) {
  die("A conexão ao BD falhou: " . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<!-- <html lang="pt-br"> -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produtos</title>
  <link rel="stylesheet" href="./CSS/estilo.css">
  <script src="./JS/funcoes.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>

  <!-- Menu -->
  <?php
  include_once('menu.php');
  ?>
  <!-- Fim Menu -->
  <div class="container">
    <header>
      <h2>Produtos</h2>
      <hr>
    </header>
  </div>
  <div class="container">
    <table class="table">
      <section class="categorias">
        <tr>
          <ul>
            <th class="text-danger">
              <li onclick="exibir_todos()">Todos(12)</li>
            </th>
            <th class="text-danger">
              <li onclick="exibir_categoria('geladeira')">Geladeiras(3)</li>
            </th>
            <th class="text-danger">
              <li onclick="exibir_categoria('fogao')">Fogões(2)</li>
            </th>
            <th class="text-danger">
              <li onclick="exibir_categoria('microondas')">Microondas(3)</li>
            </th>
            <th class="text-danger">
              <li onclick="exibir_categoria('lavadoura')">Lavadoura de roupas(2)</li>
            </th>
            <th class="text-danger">
              <li onclick="exibir_categoria('lavalouca')">Lava louças(3)</li>
            </th>
          </ul>
      </section>
      </tr>
    </table>
  </div>


  <section class="produtos">
  </section>







  <?php
  // consultando tabela banco de dados
  $sql = "select * from produtos";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($rows = $result->fetch_assoc()) {

  ?>

      <div class="box_produto" style="display:inline-block" ; id="<?php echo $rows["categoria"] ?>">
        <img src="<?php echo $rows["imagem"] ?>" alt="Geladeira" width="120px" onclick="destaque(this)">
        <br>
        <p class="descricao"><?php echo $rows["descricao"] ?></p>
        <hr>
        <p class="descricao"><strike>R$<?php echo $rows["preco"] ?></strike></p>
        <p class="preco">R$ <?php echo $rows["preco_venda"] ?></p>
      </div>

  <?php

    }
  } else {
    echo "Nenhum produto cadastrado!";
  }

  ?>


  </div>
  </section>

  <br><br><br><br><br>
  <br><br><br><br><br>

  <div class="container">
    <footer id="rodape">
      <p id="formas_pagamento">Formas de pagamento</p>
      <img src="./Image/formasdepagamento.jpeg" alt="formas de pagamento" width="300px">
      <p>&copy;Recode Pro</p>
    </footer>
  </div>
</body>

</html>