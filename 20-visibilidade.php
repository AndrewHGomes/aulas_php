<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Visibilidade</title>
</head>

<body>
  <header>
    <h1>Visibilidade</h1>
  </header>
  <main>
    <section>
      <h2>public</h2>
      <?php

      class Cliente
      {
        public $nome;
        protected $email;
        private $senha;

        public function __construct($nome, $email, $senha)
        {
          $this->nome = $nome;
          $this->email = $email;
          $this->senha = $senha;
        }
      }

      $cliente1 = new Cliente('Viviane', 'vivi@email.com', 4321)

      ?>
      <p>
        <?= print_r($cliente1) ?>
      </p>
    </section>
    <hr>
    <section>
      <h2>protected</h2>
      <?php

      class ClienteVip extends Cliente
      {
        protected function confirmaDados()
        {
          return "$this->nome | $this->email";
        }

        public
      }

      $vip1 = new ClienteVip('Viviane', 'vivi@email.com', 4321);

      ?>
      <p>
        <?= print_r($vip1) ?>
      </p>
      <p>
        Confirmar dados: <?= $vip1->confirmaDados() ?>
      </p>
    </section>
    <hr>
    <section>
      <h2>private</h2>
    </section>
  </main>
</body>

</html>