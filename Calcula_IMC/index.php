<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Calcule seu IMC</h2>
    <form action="" method="post">
    <label>Idade:</label>
        <input type="number" id="idade" name="idade" required>
        <br><br>

        <label>Altura (Cm):</label>
        <input type="number" id="altura" name="altura" required>
        <br><br>
        
        <label>Peso (kg):</label>
        <input type="number" id="peso" name="peso" required>
        <br><br>
        
        <button type="submit">Calcular IMC</button>

        <?php

    $altura = $_POST['altura'];
    $peso = $_POST['peso'];
    
    $imc = 10000 * ($peso / $altura**2);
    echo "Seu IMC é: " .round($imc,2);


?>
</body>
</html>