<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variáveis PHP</title>
</head>

<body>
  <header>
    <h1>Variáveis PHP</h1>
  </header>
  <main>

    <?php

    $variavel = 100;

    ?>

    <p>Valor da $variável: <?= $variavel ?></p>

    <?php

    $variavel = 'Teste';

    $nome = 'Andrew';
    $NOME = 'Viviane';

    $camelCase = 'camelCase';
    $snake_case = 'snake_case';
    $StudlyCase = 'StudlyCase';

    $var1 = 50;
    $_ola = 'Olá';

    ?>

    <p>Mudei o valor da $variável: <?= $variavel ?></p>

    <p>Variável $nome: <?= $nome ?></p>
    <p>Variável $NOME: <?= $NOME ?></p>

    <p>$camelCase: <?= $camelCase ?></p>
    <p>$snake_case: <?= $snake_case ?></p>
    <p>$StudlyCase: <?= $StudlyCase ?></p>

    <p>$var1 = <?= $var1 ?></p>
    <p>$_ola = <?= $_ola ?></p>
  </main>
</body>

</html>