<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Switch | Case</title>
</head>

<body>
  <header>
    <h1>Switch | Case</h1>
  </header>
  <main>

    <?php

    $paisOrigem = 'EUA';
    $nacionalidade = '';

    switch ($paisOrigem) {
      case 'Brasil':
        $nacionalidade = 'Brasileiro';
        break;
      case 'Canadá':
        $nacionalidade = 'Canadense';
        break;
      case 'EUA':
        $nacionalidade = 'Norte Americano';
        break;
      case 'Japão':
        $nacionalidade = 'Japonês';
        break;
      default:
        $nacionalidade = 'Ainda não sei';
    }

    ?>

    <p style="font-weight: <?= $paisOrigem === 'Brasil' ? 'bold' : 'normal' ?>">País de origem: <?= $paisOrigem ?></p>
    <p style="color: <?= $nacionalidade === 'Brasileiro' ? 'green' : 'red' ?>">Nacionalidade: <?= $nacionalidade ?></p>

  </main>
</body>

</html>