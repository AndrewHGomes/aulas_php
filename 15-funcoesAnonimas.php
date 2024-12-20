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

    <?php

    $simples = function () {
      echo 'Função simples';
    };

    $parametro = function ($param) {
      echo $param;
    };

    $retorno = function ($arg) {
      return $arg;
    };

    $teste = function () {
      return 'Função como argumento';
    };

    function argFunction($arg)
    {
      echo $arg;
    };

    ?>

    <p>Função anônima simples: <?= $simples() ?></p>
    <p>Função anônima com argumento: <?= $parametro('Com parâmetro') ?></p>
    <p>Função anônima com retorno: <?= $retorno('Retornando valor') ?></p>
    <p>Função anônima como parâmentro de outra função: <?= argFunction($teste()) ?></p>

  </main>
</body>

</html>