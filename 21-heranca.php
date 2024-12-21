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
    <section>
      <h2>Classe Pai</h2>
      <?php

      class Veiculo
      {
        public $tipo;

        public function __construct($tipo)
        {
          $this->tipo = $tipo;
        }

        public function movimento()
        {
          return "$this->tipo se movimentou";
        }
      }

      $veiculo1 = new Veiculo('Carro');
      $veiculo2 = new Veiculo('Avião');

      ?>
      <p>1º veículo da classe Veículo: <?= print_r($veiculo1) ?></p>
      <p>Movimento do 1º objeto: <?= $veiculo1->movimento() ?></p>
      <p>2º veículo da classe Veículo: <?= print_r($veiculo2) ?></p>
      <p>Movimento do 2º objeto: <?= $veiculo2->movimento() ?></p>
    </section>
    <hr>
    <section>
      <h2>Sub-classes</h2>
      <?php

      class Carro extends Veiculo
      {
        public $tipo;

        public function __construct($tipo)
        {
          $this->tipo = $tipo;
        }

        public function movimento()
        {
          return "$this->tipo está andando";
        }
      }

      $carro1 = new Carro('Carro');

      ?>
      <p>Objeto carro da classe Carro: <?= print_r($carro1) ?></p>
      <p>Movimento: <?= $carro1->movimento() ?></p>
      <?php

      class Aviao extends Veiculo
      {
        public $tipo;

        public function __construct($tipo)
        {
          $this->tipo = $tipo;
        }

        public function movimento()
        {
          return "$this->tipo está voando";
        }
      }

      $aviao = new Aviao('Avião')

      ?>

      <p>Objeto avião da classe Aviao: <?= print_r($aviao) ?></p>
      <p>Movimento: <?= $aviao->movimento() ?></p>
    </section>
  </main>
</body>

</html>