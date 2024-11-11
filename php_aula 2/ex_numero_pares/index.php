<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Loop de 1000 a 2000
for ($num = 1000; $num <= 2000; $num++) {
    // Verifica se o número é par
    if ($num % 2 == 0) {
        echo $num . " ";
    }
}
    ?>
</body>
</html>