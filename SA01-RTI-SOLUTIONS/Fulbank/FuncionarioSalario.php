<?php
    $nome = $_GET["nome"];
    $salario = $_GET["salario"];
    if($salario > 5000){
      $salario+= ($salario / 100) * 10; 
    } else if($salario <= 5000){
      $salario+= ($salario / 100) * 20;
    } else{
        return $salario;
      }
  ?>
  <!DOCTYPE html>
  <html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style_global.css" rel="stylesheet" type="text/css">
    <title>Aumento salarial</title>
  </head>
  <body>
    <h1>O <?= $nome ?> passará a receber R$: <?= $salario ?> </h1>
  </body>
  </html>