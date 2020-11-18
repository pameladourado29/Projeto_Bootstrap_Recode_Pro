<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loja</title>
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
      <h2>Lojas</h2>
      <hr>
    </header>
  </div>

  <div class="container">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th class="text-danger" scope="col ">São Paulo</th>
          <th class="text-danger" scope="col ">Rio de Janeiro</th>
          <th class="text-danger" scope="col">Santa Catarina</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Avenida Paulista, 985</p>
            <p>3 &ordm; andar</p>
            <p>Jardins</p>
          </td>
          <td>Avenida Presidente Vargas, 5000</p>
            <p></p>10 &ordm; andar</p>
            <p>Centro
          </td>
          <td>
            <p>Rua Major Ávila, 370</p>
            <p>Vila Mariana</p>
          </td>

        </tr>
        <tr>
          <td>(11) 4444-9999</td>
          <td>(21) 3333-3333</td>
          <td>(47) 5555-5555</td>

        </tr>
      </tbody>
    </table>
  </div>
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