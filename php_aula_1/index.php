<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
</head>
<body>
    <?php
    //EX 1
    $a = 18;
    $b = -43;
    $c = 65;

    $x = ($c - $b)/$a;

    echo "A solução da equação X é = ". $x;

    //EX 2
    $g = ((6**2)*8/(5*12)+21);

    echo "<br>Resposta da equação é = ". $g;

    //EX 3
    $h = (sqrt(64)*34)-12;

    echo "<br>Resultado é = ". $h;

    //Ex 4
    $f = 34 / 16 / 8 + 8**3 * (123 - 15 + 8 * (12**2 * 3) - 16);
    echo "<br>Resultado é = " . $f;

    //Ex 5 
    $j = 2*3**3 + (sqrt(81)/3*12)*65+(1253/(12**2+7));
    echo "<br>Resultado é = ". $j;
    ?>

</body>
</html>