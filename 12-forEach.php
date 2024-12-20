<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foreach</title>
</head>

<body>
  <header>
    <h1>Foreach</h1>
  </header>
  <main>

    <?php

    $nomes = ['Irvin', 'Steice', 'Renan', 'Eliza', 'Andrew', 'Viviane', 'Rafael'];
    $numeros = [1, 2, 3, 4, 5];
    $capitais = [
      'Brasil' => 'Brasília',
      'Portugal' => 'Lisboa',
      'Espanha' => 'Madrid'
    ];

    foreach ($nomes as $nome) {
      echo "<p>Nome é $nome</p>";
    }

    echo '<hr>';

    foreach ($numeros as $num) {
      echo "<p>Número é $num</p>";
    }

    echo '<hr>';

    foreach ($capitais as $key => $value) {
      echo "<p>País: $key | Capital: $value</p>";
    }

    ?>

    <hr>

    <h2>Break | Continue</h2>

    <?php

    for ($i = 0; $i <= 20; $i++) {
      if ($i % 2 === 0) {
        continue;
      }

      echo "<span> | i = $i</span>";

      if ($i === 15) {
        break;
      }
    }

    echo "<br><br>";

    foreach ($nomes as $nome) {
      if ($nome === 'Renan') {
        continue;
      }

      echo "<span> | $nome</span>";

      if ($nome === 'Viviane') {
        break;
      }
    }

    ?>

  </main>
</body>

</html>