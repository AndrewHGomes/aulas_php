<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>While</title>
</head>

<body>
  <header>
    <h1>While</h1>
  </header>
  <main>

    <?php

    $w = 0;

    while ($w <= 2) {
      echo "<p>w é $w</p>";
      $w++;
    }

    while ($w >= 1) {
      echo "<p>w é $w</p>";
      $w--;
    }

    echo '<hr>';

    $numero = 5;
    $tabuada = '';

    while ($w <= 10) {
      $tabuada = $numero * $w;
      echo "<p>$numero x $w = $tabuada</p>";
      $w++;
    }

    echo '<hr>';

    $nomes = ['Andrew', 'Viviane', 'Rafael', 'Andréia'];
    $cont = 0;

    while ($cont < sizeof($nomes)) {
      echo "<p>Nome $nomes[$cont] está na posição $cont</p>";
      $cont++;
    }

    ?>

  </main>
</body>

</html>