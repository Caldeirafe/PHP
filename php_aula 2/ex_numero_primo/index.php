<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Loop de 1 a 100 para verificar quais são números primos
for ($num = 1; $num <= 100; $num++) {
    $isPrime = true;

    // Números menores ou iguais a 1 não são primos
    if ($num <= 1) {
        $isPrime = false;
    } else {
        // Verifica se o número é divisível por algum número de 2 até a raiz quadrada dele
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                $isPrime = false;
                break;
            }
        }
    }

    // Se o número é primo, imprime
    if ($isPrime) {
        echo $num . " ";
    }
}
    ?>
</body>
</html>