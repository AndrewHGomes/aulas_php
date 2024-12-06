<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Functions</title>
</head>

<body>
  <header>
    <h1>Functions</h1>
  </header>
  <main>

    <?php

    function simpleFunction()
    {
      echo "Olá, Função!";
    }

    function withParams($a, $b)
    {
      echo "Somando $a + $b = " . ($a + $b);
    }

    function defaultParams($nome = 'Tonto')
    {
      echo "Bom dia, $nome!";
    }

    function variadicParams(...$args)
    {
      foreach ($args as $arg) {
        echo "<span>$arg | </span>";
      }
      echo "<span>Número de parâmetros: " . func_num_args();
    }

    function withReturn($a, $b)
    {
      return $a + $b;
    }

    ?>

    <p>Função simples: <?= simpleFunction() ?></p>
    <p>Função com parâmetros: <?= withParams(51, 23) ?></p>
    <p>Função com parâmetro padrão: <?= defaultParams('Henrique') ?> | <?= defaultParams() ?></p>
    <p>Recebendo vários parâmentros: <?= variadicParams('teste', 50, true) ?></p>
    <p>Retorno da função: <?= withReturn(11, 11) ?></p>

  </main>
</body>

</html>