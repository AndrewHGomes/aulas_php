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

    class Veiculo
    {
      public $tipo;
      public $rodas;
      public $portas;

      public function __construct($tipo, $rodas, $portas)
      {
        $this->tipo = $tipo;
        $this->rodas = $rodas;
        $this->portas = $portas;
      }
    }

    $carro = new Veiculo('Carro', 4, 4);

    $moto = new Veiculo('Moto', 2, false);

    ?>

    <p>1º objeto da classe Veículo: <?= $carro ?></p>
    <p>2º objeto da classe Veículo: <?= $moto ?></p>

  </main>
</body>

</html>