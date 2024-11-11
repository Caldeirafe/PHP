<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa de Mercado</title>
</head>
<body>
    <h2>Pesquisa de Opinião sobre Novo Produto</h2>
    <form method="post">
        <?php
        // Cria campos de seleção para 10 entrevistados
        for ($i = 1; $i <= 10; $i++) {
            echo "<h3>Entrevistado $i</h3>";
            echo "<label>Sexo:</label>
                  <select name='entrevistas[$i][sexo]' required>
                      <option value=''>Selecione</option>
                      <option value='M'>Masculino</option>
                      <option value='F'>Feminino</option>
                  </select><br>";
            
            echo "<label>Resposta:</label>
                  <select name='entrevistas[$i][resposta]' required>
                      <option value=''>Selecione</option>
                      <option value='S'>Sim</option>
                      <option value='N'>Não</option>
                  </select><br><br>";
        }
        ?>
        <input type="submit" value="Enviar Pesquisa">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $entrevistas = $_POST['entrevistas'];

        // Inicialização das variáveis
        $totalSim = 0;
        $totalNao = 0;
        $totalHomens = 0;
        $totalMulheres = 0;
        $homensNao = 0;
        $mulheresNao = 0;

        // Processamento dos dados
        foreach ($entrevistas as $entrevista) {
            if ($entrevista['resposta'] == 'S') {
                $totalSim++;
            } else {
                $totalNao++;
            }

            // Contabiliza homens e mulheres e suas respostas
            if ($entrevista['sexo'] == 'M') {
                $totalHomens++;
                if ($entrevista['resposta'] == 'N') {
                    $homensNao++;
                }
            } elseif ($entrevista['sexo'] == 'F') {
                $totalMulheres++;
                if ($entrevista['resposta'] == 'N') {
                    $mulheresNao++;
                }
            }
        }

        // Cálculo das porcentagens
        $percentualHomensNao = $totalHomens > 0 ? ($homensNao / $totalHomens) * 100 : 0;
        $percentualMulheresNao = $totalMulheres > 0 ? ($mulheresNao / $totalMulheres) * 100 : 0;

        // Exibe os resultados
        echo "<h2>Resultados da Pesquisa</h2>";
        echo "Número de pessoas que respondeu Sim: $totalSim<br>";
        echo "Número de pessoas que respondeu Não: $totalNao<br>";
        echo "Porcentagem de homens que respondeu Não: " . round($percentualHomensNao, 2) . "%<br>";
        echo "Porcentagem de mulheres que respondeu Não: " . round($percentualMulheresNao, 2) . "%<br>";
    }
    ?>
</body>
</html>


</body>
</html>