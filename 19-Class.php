<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Classes</title>
</head>

<body>
  <header>
    <h1>Classes</h1>
  </header>
  <main>

    <h2>Introdução</h2>
    <?php

    class Humano
    {
      private $nome, $sobrenome, $idade;

      public function __construct($nome, $sobrenome, $idade)
      {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->idade = $idade;
      }

      public function nomeCompleto()
      {
        return "$this->nome $this->sobrenome";
      }

      public function apresentarSe()
      {
        return "Eu sou {$this->nomeCompleto()}, tenho $this->idade anos";
      }
    }

    $andrew = new Humano('Andrew', 'Gomes', 36);
    $viviane = new Humano('Viviane', 'Rodrigues', 39);

    ?>

    <p>
      1º objeto da classe Humano: <?= $andrew->nomeCompleto() ?>
    </p>
    <p>
      <?= $andrew->apresentarSe() ?>
    </p>
    <p>
      2º objeto da classe Humano: <?= $viviane->nomeCompleto() ?>
    </p>
    <p>
      <?= $viviane->apresentarSe() ?>
    </p>

    <hr>

    <!-- <h2>Classe anônima</h2> -->

    <?php

    // $objeto = new class
    // {
    //   public $nome = 'Cadeira';
    //   public $tipo = 'Madeira';

    //   public function dizerAlgo()
    //   {
    //     return "Sou $this->nome, do tipo $this->tipo!";
    //   }
    // };

    ?>

    <!-- <p>Exemplo: <?= $objeto() ?></p> -->

  </main>
</body>

</html>