<?php

class Pessoa
{
  public string $nome;
  public int $idade;
  public string $genero;

  public function andar(): string
  {
    return 'Eu estou andando';
  }

  public function correr(): string
  {
    return 'Eu estou correndo';
  }
}

?>

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

    $pessoa1 = new Pessoa;

    ?>

    <p>
      Classe Pessoa: <?= print_r($pessoa1) ?>
    </p>

    <hr>

    <h2>Propriedades ou Atributos</h2>

    <?php

    $pessoa1->nome = 'Andrew';
    $pessoa1->idade = 36;
    $pessoa1->genero = 'Masculino';

    ?>

    <p>
      Nome: <?= $pessoa1->nome ?>
    </p>
    <p>
      Idade: <?= $pessoa1->idade ?>
    </p>
    <p>
      Gênero: <?= $pessoa1->genero ?>
    </p>

    <hr>

    <h2>Funções ou Métodos</h2>

    <p>
      Método andar: <?= $pessoa1->andar() ?>
    </p>
    <p>
      Método correr: <?= $pessoa1->correr() ?>
    </p>

    <hr>

    <h2>This</h2>

  </main>
</body>

</html>