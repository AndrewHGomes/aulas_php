<?php

$frase = 'Uma Frase Para Testes Dos Métodos';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Métodos de Strings</title>
</head>

<body>
  <header>
    <h1>Métodos de Strings</h1>
  </header>
  <main>
    <p>Frase: <?= $frase ?></p>
    <p>Letra pelo índice: <?= $frase[1] ?></p>
    <p>Tamanho da string: <?= mb_strlen($frase) ?></p>
    <p>Substring: <?= substr($frase, 15, 10) ?></p>
    <p>Todas maiúsculas: <?= mb_strtoupper($frase) ?></p>
    <p>Todas minúsculas: <?= mb_strtolower($frase) ?></p>
    <p>Substituir parte: <?= str_replace('Uma Frase', 'Um Texto', $frase) ?></p>
    <p>Posição no texto: <?= mb_strrpos($frase, 'Métodos') ?></p>
  </main>
</body>

</html>