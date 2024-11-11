<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="">
    <label>Digite um número:</label>
    <input type="number" name="numero" required>
    <input type="submit" value="Ver Tabuada">
</form>

    <?php
    // Recebe o número escolhido pelo usuário
$numero = $_POST['numero'];

// Exibe a tabuada do número escolhido
echo "Tabuada do número $numero:<br>";

for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado<br>";
}
    ?>
</body>
</html>