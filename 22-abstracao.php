<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Abstração</title>
</head>

<body>
  <header>
    <h1>Abstração</h1>
  </header>
  <main>
    <?php

    abstract class Classe
    {
      abstract public function teste();
    }

    class ClasseDerivada extends Classe
    {
      public function teste()
      {
        return 'Testando...';
      }
    }

    $objeto = new ClasseDerivada
    ?>
    <p>
      <?= print_r($objeto) ?>
    </p>
  </main>
</body>

</html>