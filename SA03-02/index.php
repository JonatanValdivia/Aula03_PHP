<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../SA01-RTI-SOLUTIONS/style_global.css"/>
    <title>onversor</title>
</head>
<body>
    <form method="GET" action="../SA03-02/coversor.php">
    <input type="number" step="0.01" name="Real" placeholder="R$">
        <input type="radio" name="Converter" value="Dolar"/>Dolar
        <input type="radio" name="Converter" value="Euros"/>Euros
        <p>
            <button>Enviar</button>
        </p>
    </form>
</body>
</html>