<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=<, initial-scale=1.0">
  <title>PHL Fretes</title>
  <link href="../style_global.css" type="text/css" rel="stylesheet">
</head>
<body>
  <form method="GET" action="calcula-frete.php">
    <h1>Cálculo de fretes</h1>
  <div class="input-group">
    <label for="origem">Cidade de origem:</label>
    <input type="text" name="origem" id="origem"/>
  </div>
  <div class="input-group">
    <label for="destino">Cidade de destino:</label>
    <input type="text" name="destino" id="destino"/>
  </div>
  <div class="input-group">
    <label for="Distancia:">Distancia:</label>
    <input type="number" name="distancia" id="distancia"/>
  </div>
  <div class="input-group">
    <label for="pedagios">Pedagios:</label>
    <input type="number" name="pedagios" id="pedagios"/>
  </div>
  <button>Enviar</button>
  </form>
</body>
</html>