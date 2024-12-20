<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funções Anônimas</title>
</head>

<body>
  <header>
    <h1>Funções Anônimas</h1>
  </header>
  <main>

    <h2>Anônima Simples</h2>

    <?php

    $simples = function () {
      echo 'Função simples';
    };

    ?>

    <p>
      Simples e fácil: <?= $simples() ?>
    </p>

    <hr>

    <h2>Anônima com parâmetro</h2>

    <?php

    $parametro = function ($param) {
      echo $param;
    };

    ?>

    <p>Anônima recebendo argumento: <?= $parametro('Com parâmetro') ?></p>

    <hr>

    <h2>Anônima com retorno</h2>

    <?php

    $retorno = function ($arg) {
      return $arg;
    };

    ?>

    <p>Anônima retornando valor: <?= $retorno('Retornando valor') ?></p>

    <hr>

    <h2>Anônima como parâmetro/argumento</h2>

    <?php

    $teste = function () {
      return 'Função como argumento';
    };

    function argFunction($arg)
    {
      echo $arg;
    };

    ?>

    <p>Função anônima como parâmentro de outra função: <?= argFunction($teste()) ?></p>

  </main>
</body>

</html>