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

    $nomes = ['Irvin', 'Steice', 'Renan', 'Eliza'];
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

  </main>
</body>

</html>