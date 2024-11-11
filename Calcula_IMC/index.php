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

// Calcula o IMC
$imc = 10000 * ($peso / ($altura ** 2));
echo "Seu IMC é: " . round($imc, 2) . "<br>";

// Valida se os valores de altura e peso são maiores que zero
if ($altura <= 0 || $peso <= 0) {
    echo "Digite um número maior que ZERO!";
} else {
    // Avalia as faixas do IMC
    if ($imc < 18.5) {
        echo "TA SÓ O ARAME";
    } elseif ($imc >= 18.5 && $imc <= 24.9) {
        echo "PESO NORMAL";
    } elseif ($imc >= 25 && $imc <= 29.9) {
        echo "TA VIRANDO UM PLANETINHA";
    } elseif ($imc >= 30 && $imc <= 50) {
        echo "IMENSO";
    } else {
        echo "Valor de IMC fora do esperado.";
    }
}
?>

</body>
</html>