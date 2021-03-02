<?php

?>
<!DOCTYPE html>
<html lang="pt=br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../SA01-RTI-SOLUTIONS/style_global.css" type="text/css" rel="stylesheet">
  <title>Aumento salarial</title>
</head>
<body>
<form method="GET" action="FuncionarioSalario.php">
  <h1>Aumento salarial</h1>
  <div class="input-group">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" placeholder="Nome..." required/>
  </div>
  <div class="input-group">
  <label for="salario">Salario atual: </label>
  <input type="number" id="salario" name="salario" placeholder="Salário..."/>
  </div>
  <button>Calcular</button>
</body>
</html>