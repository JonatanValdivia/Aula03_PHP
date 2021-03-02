<?php
  $nome = $_GET["Nome"];
  $endereco = $_GET["Endereco"];
  $consumo = $_GET["Consumo"];
  if($consumo <= 120){
    echo "<div class='input-group'><h2> Conta de luz de ". $nome ."</h2>";
    echo "<h2>".$endereco."</h2>";
    echo "<h2>Consumo: <font color='blue'>".$consumo ."KWh</font> </h2>";
    echo "<h2>Valor a pagar: R$".number_format($consumo * 0.32, 2,',', '.')."</h2>Obrigado por economizar!</div><br/>";
  }
  if($consumo > 120){
    echo "<div class='input-group'><h2> Conta de luz de ". $nome ."</h2>";
    echo "<h2>".$endereco."</h2>";
    echo "<h2>Consumo: <font color='red'>".$consumo ."KWh</font></h2>";
    echo "<h2>Valor a pagar: R$".number_format($consumo * 0.42, 2,',', '.')."</h2></div>";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../SA01-RTI-SOLUTIONS/style_global.css" type="text/css"/>
  <title>Consumo de energia</title>
</head>
<body>
</body>
</html>