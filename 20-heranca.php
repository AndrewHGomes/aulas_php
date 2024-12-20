<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Herança</title>
</head>

<body>
  <header>
    <h1>Herança</h1>
  </header>
  <main>
    <?php

    class Humano
    {
      public $nome, $sobrenome;

      public function __construct($nome, $sobrenome)
      {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
      }

      public function nomeCompleto()
      {
        return "{$this->nome} {$this->sobrenome}";
      }
    }

    $andrew = new Humano('Andrew', 'Gomes');
    $viviane = new Humano('Viviane', 'Rodrigues');

    ?>

    <p>1º objeto da classe Humano: <?= $andrew->nomeCompleto() ?></p>
    <p>2º objeto da classe Humano: <?= $viviane->nomeCompleto() ?></p>

  </main>
</body>

</html>