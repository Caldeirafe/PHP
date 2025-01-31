<?php
// Classe base abstrata para o Boneco
abstract class Boneco {
    private $nome;
    private $raca;
    private $tipo;
    private $classe;

    // Construtor para inicializar os atributos
    public function __construct($nome, $raca, $tipo, $classe) {
        $this->nome = $nome;
        $this->raca = $raca;
        $this->tipo = $tipo;
        $this->classe = $classe;
    }

    // Métodos abstratos que devem ser implementados pelas classes filhas
    abstract public function ataque();
    abstract public function defesa();
    abstract public function esquiva();
    abstract public function especial();

    // Getters e Setters
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getRaca() {
        return $this->raca;
    }

    public function setRaca($raca) {
        $this->raca = $raca;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getClasse() {
        return $this->classe;
    }

    public function setClasse($classe) {
        $this->classe = $classe;
    }
}

// Classes de Raça
abstract class Raca {}

class Humano extends Raca {}
class Anao extends Raca {}
class Elfo extends Raca {}
class Orc extends Raca {}

// Classes de Tipo
abstract class Tipo {}

class Heroi extends Tipo {}
class AntiHeroi extends Tipo {}
class Vilao extends Tipo {}
class Normal extends Tipo {}

// Classes de Classe
abstract class Classe {}

class Guerreiro extends Classe {
    public function ataque() {
        return "Guerreiro ataca com espada!";
    }

    public function defesa() {
        return "Guerreiro levanta o escudo!";
    }

    public function esquiva() {
        return "Guerreiro esquiva rapidamente!";
    }

    public function especial() {
        return "Guerreiro usa o golpe devastador!";
    }
}

class Arqueiro extends Classe {
    public function ataque() {
        return "Arqueiro dispara uma flecha!";
    }

    public function defesa() {
        return "Arqueiro se protege atrás de uma árvore!";
    }

    public function esquiva() {
        return "Arqueiro salta para trás!";
    }

    public function especial() {
        return "Arqueiro usa chuva de flechas!";
    }
}

class Mago extends Classe {
    public function ataque() {
        return "Mago lança uma bola de fogo!";
    }

    public function defesa() {
        return "Mago conjura uma barreira mágica!";
    }

    public function esquiva() {
        return "Mago teleporta para um local seguro!";
    }

    public function especial() {
        return "Mago invoca um meteoro!";
    }
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['nome'])) {
        // Cria o personagem diretamente com os valores do formulário
        $personagem = new Boneco(
            $_GET['nome'], // Nome
            $_GET['raca'], // Raça
            $_GET['tipo'], // Tipo
            $_GET['classe'] // Classe
        );
    
        // Exibe os atributos do personagem
        echo "<h2>Personagem Criado:</h2>";
        echo "<p><strong>Nome:</strong> " . $personagem->getNome() . "</p>";
        echo "<p><strong>Raça:</strong> " . $personagem->getRaca() . "</p>";
        echo "<p><strong>Tipo:</strong> " . $personagem->getTipo() . "</p>";
        echo "<p><strong>Classe:</strong> " . $personagem->getClasse() . "</p>";
    } else {
        echo "<p>Nenhum dado recebido. Preencha o formulário para criar um personagem.</p>";
    }
}

// Exemplo de uso
$meuGuerreiro = new Guerreiro("Aragorn", new Humano(), new Heroi(), "Guerreiro");
echo $meuGuerreiro->ataque(); // Saída: Guerreiro ataca com espada!
echo $meuGuerreiro->especial(); // Saída: Guerreiro usa o golpe devastador!
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