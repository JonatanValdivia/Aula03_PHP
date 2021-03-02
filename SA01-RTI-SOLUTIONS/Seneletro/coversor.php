<?php
  $Real = $_GET["Real"];
 if(isset($_GET["Converter"])){
      $Dolar = $_GET["Converter"];
      if($_GET["Converter"] == "Dolar"){
        echo "<h1>O valor total em dólar é: " .number_format($Real/5.14, 2,',','.')."</h1>";
      } else if(isset($_GET["Converter"])){
        $Euros = $_GET["Converter"];
        if($_GET["Converter"] == "Euros"){
          echo "<h1>O valor total em Euros é: " . number_format($Real/6.57, 2,',','.')."</h1>";
        }
      }
 }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../style_global.css" rel="stylesheet" type="text/css">
  <title>Conversor</title>
</head>
<body>
</body>
</html>