<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrow Function</title>
</head>

<body>
  <header>
    <h1>Arrow Function</h1>
  </header>
  <main>
    <?php

    $x = 15;
    $y = 22;

    $minhaArrow = fn($z) => $z;

    ?>

    <p>Arrow Function: <?= $minhaArrow(10) ?></p>
  </main>
</body>

</html>