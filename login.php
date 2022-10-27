<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Seu signo</title>
  </head>
  <body class="p-5">
    <input type="button" class="btn w-100 p-3" value="Voltar" onClick="history.go(-1)">
    <br>
    <h1>Seja Bem vindo!!</h1>
    </body>

</html>

<?php

if(isset($_POST['senhaUsuario'])){
  $senhaUsuario = $_POST['senhaUsuario'];
  $nomeUsuario = $_POST['nomeUsuario'];
  echo "<h1 class='text-center'>Olá, $nomeUsuario </h1>";
}
?>