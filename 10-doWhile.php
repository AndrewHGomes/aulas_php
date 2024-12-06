<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Do While</title>
</head>

<body>
  <header>
    <h1>Do While</h1>
  </header>
  <main>

    <?php

    $dw = 0;

    do {
      echo "<p>w é $dw</p>";
      $dw++;
    } while ($dw <= 2);

    do {
      echo "<p>w é $dw</p>";
      $dw--;
    } while ($dw >= 1);

    echo '<hr>';

    $numero = 6;
    $tabuada = '';

    do {
      $tabuada = $numero * $dw;
      echo "<p>$numero x $dw = $tabuada</p>";
      $dw++;
    } while ($dw <= 10);

    echo "<hr>";

    $nomes = ['Andrew', 'Viviane', 'Rafael', 'Andréia'];
    $cont = 0;

    do {
      echo "<p>O nome $nomes[$cont] está na posição $cont</p>";
      $cont++;
    } while ($cont < count($nomes))

    ?>

  </main>
</body>

</html>