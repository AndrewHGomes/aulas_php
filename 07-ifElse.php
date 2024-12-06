<?php

$idade = 17;
$verificaIdade = $idade < 18 ? 'Menor' : 'Maior';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>If | Else If | Else</title>
</head>

<body>
  <header>
    <h1>If | Else If | Else</h1>
  </header>
  <main>
    <h2>if</h2>

    <?php

    if ($idade >= 18) {
      echo '<p>Maior de idade!</p>';
    }

    ?>

    <hr>
    <h2>else</h2>

    <?php

    if ($idade >= 18) {
      echo '<p>Maior de idade!</p>';
    } else {
      echo '<p>Menor de idade!</p>';
    }

    ?>

    <hr>
    <h2>elseif</h2>

    <?php

    if ($idade < 12) {
      echo '<p>Criança!</p>';
    } elseif ($idade < 16) {
      echo '<p>Adolescente!</p>';
    } elseif ($idade <= 18) {
      echo '<p>Jovem!</p>';
    } elseif ($idade < 60) {
      echo '<p>Adulto!</p>';
    } else {
      echo '<p>Idoso!</p>';
    }

    ?>

    <h2>Operador ternário</h2>

    <p>A pessoa é <?= $verificaIdade ?> de idade.</p>

  </main>
</body>

</html>