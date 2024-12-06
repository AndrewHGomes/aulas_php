<?php

$paisOrigem = 'EUA';
$nacionalidade = '';

?>

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

    <p>País de origem: <?= $paisOrigem ?></p>
    <p>$nacionalidade: <?= $nacionalidade ?></p>

  </main>
</body>

</html>