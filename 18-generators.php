<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Generators</title>
</head>

<body>
  <header>
    <h1>Generators</h1>
  </header>
  <main>
    <?php

    function buscarNumero()
    {
      for ($i = 0; $i <= 5; $i++) {
        yield $i;
      }
    }

    foreach (buscarNumero() as $numero) {
      echo "<span>$numero | </span>";
    }

    function buscarNome()
    {
      yield "Andrew";
      yield from ["Viviane", "Rafael"];
      yield "Irvin";
    }

    // foreach (buscarNome() as $nome) {
    //   echo "<span>$nome | </span>";
    // }

    ?>

  </main>
</body>

</html>