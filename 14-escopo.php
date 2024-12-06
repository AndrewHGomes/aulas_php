<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Escopo no PHP</title>
</head>

<body>
  <header>
    <h1>Escopo no PHP</h1>
  </header>
  <main>

    <?php

    $variavelGlobal = 'Variável global';

    function testeEscopo($a)
    {
      $teste = 'Variável local';
      echo "$teste | $a";
    }

    function globalEmLocal()
    {
      global $variavelGlobal;
      echo "Peguei a $variavelGlobal";
    }

    function globalEmLocal2()
    {
      $GLOBALS['variavelGlobal'] = 'Variável Global';
    }

    if (true) {
      $varIf = 'Variável IF';
    }

    for ($i = 0; $i < 2; $i++) {
      $varFor = 'Variável FOR';
    }

    ?>

    <p>Escopo global: <?= $variavelGlobal ?></p>
    <p>Escopo da função: <?= testeEscopo('Parâmetro local') ?></p>
    <p>Pegando variável global na função: <?= globalEmLocal() ?></p>
    <p>Pegando variável global na função de outra forma: <?= globalEmLocal2() ?></p>
    <p>Escopo em controle e repetições: <?= $varIf ?> | <?= $varFor ?> | <?= $i ?></p>

  </main>
</body>

</html>