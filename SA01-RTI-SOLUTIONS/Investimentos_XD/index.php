<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../style_global.css" rel="stylesheet" type="text/css">
  <title>Consumo de energia</title>
</head>
<body>
  <form method="GET" action="consumoEnergia.php">
    <div class="input-group">
        <label for="nome">Nome completo:</label>
        <input type="text" name="Nome" id="nome" placeholder="Nome completo" required/>
    </div>
    <div class="input-group">
        <label for="endereco">Endereço:</label>
        <input type="text" name="Endereco" id="endereco" placeholder="Endereço" required/>
    </div>
    <div class="input-group">
        <label for="consumo">Consumo:</label>
        <input type="number" step="0.1" name="Consumo" id="consumo" placeholder="Consumo(KWh)" required/>
    </div>
    <button>Enviar</button>
  </form>
</body>
</html>