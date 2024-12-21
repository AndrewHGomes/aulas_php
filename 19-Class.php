<?php

class Pessoa
{
  public $nome;
  public $idade;
  public $genero;

  public function __construct($nome, $idade, $genero)
  {
    $this->nome = $nome;
    $this->idade = $idade;
    $this->genero = $genero;
  }

  public function andar()
  {
    return "Está andando";
  }

  public function correr()
  {
    return "Está correndo";
  }

  public function mostrarDados()
  {
    return [
      'Nome:' => $this->nome,
      'Idade:' => $this->idade,
      'Gênero:' => $this->genero,
    ];
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
    <section>
      <h2>Introdução</h2>
      <?php

      $pessoa1 = new Pessoa('Andrew', 36, 'Masculino');

      ?>
      <p>
        Classe Pessoa: <?= print_r($pessoa1) ?>
      </p>
    </section>
    <hr>
    <section>
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
    </section>
    <hr>
    <section>
      <h2>Funções ou Métodos</h2>
      <p>
        Método andar: <?= $pessoa1->andar() ?>
      </p>
      <p>
        Método correr: <?= $pessoa1->correr() ?>
      </p>
    </section>
    <hr>
    <section>
      <h2>$this</h2>
      <p>
        Andrew: <?= print_r($pessoa1->mostrarDados()) ?>
      </p>
    </section>
    <hr>
    <section>
      <h2>__construct()</h2>
      <?php

      $pessoa2 = new Pessoa('Viviane', 39, 'Feminino')

      ?>
      <p>
        Pessoa2: <?= print_r($pessoa2) ?>
      </p>
    </section>
  </main>
</body>

</html>