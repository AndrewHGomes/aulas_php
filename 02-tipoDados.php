<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipos de Dados no PHP</title>
</head>

<body>
  <header>
    <h1>Tipo de Dados no PHP</h1>
  </header>
  <main>

    <?php

    $umTexto = 'String é texto';
    $intNum = 56;
    $floatNum = 10.5;
    $negNum = -23;
    $verdadeiro = true;
    $falso = false;
    $nulo = null;
    $lista = [1, 2, 3, 4];

    ?>

    <p>Lista de caracteres: <?= $umTexto ?></p>
    <p>Número inteiro: <?= $intNum ?></p>
    <p>Número real: <?= $floatNum ?></p>
    <p>Número negativo: <?= $negNum ?></p>
    <p>Booleano verdadeiro: <?= $verdadeiro ?></p>
    <p>Booleano falso: <?= $falso ?></p>
    <p>Valor nulo: <?= $nulo ?></p>
    <p>Array/Lista: <?= print_r($lista) ?></p>
  </main>
</body>

</html>