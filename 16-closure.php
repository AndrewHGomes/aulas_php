<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Closure</title>
</head>

<body>
  <header>
    <h1>Closure</h1>
  </header>
  <main>
    <?php

    $x = 20;
    $y = 30;

    $minhaClosure = function ($z) use ($x, $y) {
      echo "$z | $x | $y";
      $y += 1000;
    };

    ?>

    <p>Resultado da função closure: <?= $minhaClosure(10) ?></p>
    <p>Valor do y: <?= $y ?></p>
  </main>
</body>

</html>