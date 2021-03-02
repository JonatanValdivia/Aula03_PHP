<?php
  $origem = $_GET["origem"];
  $destino = $_GET["destino"];
  $distancia = $_GET["distancia"];
  $pedagios = $_GET["pedagios"];
  $custoPedagio = $pedagios * 9.4;
  $custoDistancia = $distancia * 6;
  $custoTotal = $custoDistancia + $custoPedagio;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../style_global.css" type="text/css" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <h1>A viagem de <?= $origem ?> à <?= $destino ?> irá custar o valor total de R$ <em><?= $custoTotal ?>.</em></h1>
</body>
</html>