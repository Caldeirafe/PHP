<?php
// Classe base abstrata para o Boneco
abstract class Boneco {
    protected $nome;
    protected $raca;
    protected $tipo;
    protected $classe;
    protected $vida;
    protected $int;
    protected $destreza;
    protected $ataque;
    protected $defesa;
    protected $esquiva;

    // Construtor para inicializar os atributos
    public function __construct($nome, $raca, $tipo, $classe) {
        $this->nome = $nome;
        $this->raca = $raca;
        $this->tipo = $tipo;
        $this->classe = $classe;

        // Inicialização de atributos base (exemplo, você pode ajustar conforme necessário)
        $this->vida = 100;
        $this->int = 10;
        $this->destreza = 10;
        $this->ataque = 10;
        $this->defesa = 10;
        $this->esquiva = 10;
    }

    // Métodos abstratos que devem ser implementados pelas classes filhas
    abstract public function ataque();
    abstract public function defesa();
    abstract public function esquiva();
    abstract public function especial();

    // Getters e Setters
    public function getNome() { return $this->nome; }
    public function setNome($nome) { $this->nome = $nome; }

    public function getRaca() { return $this->raca; }
    public function setRaca($raca) { $this->raca = $raca; }

    public function getTipo() { return $this->tipo; }
    public function setTipo($tipo) { $this->tipo = $tipo; }

    public function getClasse() { return $this->classe; }
    public function setClasse($classe) { $this->classe = $classe; }
}

// Classes específicas
class Guerreiro extends Boneco {
    public function ataque() { return "Guerreiro ataca com espada!"; }
    public function defesa() { return "Guerreiro levanta o escudo!"; }
    public function esquiva() { return "Guerreiro esquiva rapidamente!"; }
    public function especial() { return "Guerreiro usa o golpe devastador!"; }
}

class Arqueiro extends Boneco {
    public function ataque() { return "Arqueiro dispara uma flecha!"; }
    public function defesa() { return "Arqueiro se protege atrás de uma árvore!"; }
    public function esquiva() { return "Arqueiro salta para trás!"; }
    public function especial() { return "Arqueiro usa chuva de flechas!"; }
}

class Mago extends Boneco {
    public function ataque() { return "Mago lança uma bola de fogo!"; }
    public function defesa() { return "Mago conjura uma barreira mágica!"; }
    public function esquiva() { return "Mago teleporta para um local seguro!"; }
    public function especial() { return "Mago invoca um meteoro!"; }
}

// Lista de classes válidas
$classes = [
    'Guerreiro' => Guerreiro::class,
    'Arqueiro' => Arqueiro::class,
    'Mago' => Mago::class,
    'Barbaro' => Barbaro::class,
    'Lutador' => Lutador::class,
    'Ladrao' => Ladrao::class,
    'Ninja' => Ninja::class,
    'Bardo' => Bardo::class,
];

// Verifica se os dados foram recebidos via GET
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['nome'], $_GET['raca'], $_GET['tipo'], $_GET['classe'])) {
    $nome = $_GET['nome'];
    $raca = $_GET['raca'];
    $tipo = $_GET['tipo'];
    $classe = $_GET['classe'];

    // Verifica se a classe informada é válida
    if (isset($classes[$classe])) {
        $personagem = new $classes[$classe]($nome, $raca, $tipo, $classe);

        // Exibe os atributos do personagem
        echo "<h2>Personagem Criado:</h2>";
        echo "<p><strong>Nome:</strong> " . htmlspecialchars($personagem->getNome()) . "</p>";
        echo "<p><strong>Raça:</strong> " . htmlspecialchars($personagem->getRaca()) . "</p>";
        echo "<p><strong>Tipo:</strong> " . htmlspecialchars($personagem->getTipo()) . "</p>";
        echo "<p><strong>Classe:</strong> " . htmlspecialchars($personagem->getClasse()) . "</p>";
    } else {
        echo "<p style='color: red;'>Erro: Classe inválida!</p>";
    }
} else {
    echo "<p>Nenhum dado recebido. Preencha o formulário para criar um personagem.</p>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atributos</title>
</head>
<body>
    <main>
        <section>

        </section>
    </main>
</body>
</html>
