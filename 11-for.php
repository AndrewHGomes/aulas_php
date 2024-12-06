<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>For</title>
</head>

<body>
  <header>
    <h1>For</h1>
  </header>
  <main>

    <?php

    for ($i = 0; $i <= 2; $i++) {
      echo "<p>i é $i</p>";
    }

    for ($i = 3; $i >= 0; $i--) {
      echo "<p>i é $i</p>";
    }

    echo '<hr>';

    $numero = 7;
    $tabuada = '';

    for ($i = 0; $i <= 10; $i++) {
      $tabuada = $numero * $i;
      echo "<p>$numero x $i = $tabuada</p>";
    }

    echo '<hr>';

    $nomes = ['Andrew', 'Viviane', 'Rafael', 'Andréia'];

    for ($i = 0; $i < count($nomes); $i++) {
      echo "<p>O nome $nomes[$i] está na posição $i</p>";
    }

    ?>

  </main>
</body>

</html>