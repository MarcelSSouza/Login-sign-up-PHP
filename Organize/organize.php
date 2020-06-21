<?php
session_start();
if (!isset($_SESSION["id_usuario"])) {
  header("location: index.php");
  exit;
}

?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="shortcut icon" href="favicon.png" />
  <title>Organize</title>
</head>

<body>
  <h1>Organize</h1>
  <div id="app">
    <ul class="list-group border border-info rounded-lg shadow p-3 mb-5 bg-white rounded mt-3 w-75 justify-content-center ">
    </ul>
    <div class="input-group mb-3 w-75">
      <input type="text" class="form-control" placeholder="Task" aria-label="Recipient's username" aria-describedby="button-addon2">
      <div class="input-group-append ">
        <button class="btn btn-outline-info" type="button" id="button-addon2">Adicionar</button>
      </div>
    </div>  <a class="sair btn btn-outline-danger" href="sair.php">SAIR</a>

  </div>


  <footer>
    <p class="p-footer">
      &copy 2020 Copyright: Todos os direitos reservados.
    </p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="script.js"></script>
</body>

</html>