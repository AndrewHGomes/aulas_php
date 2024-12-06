<?php

$texto = 'Lista de caracteres';
$aspasSimples = 'aspas simples';
$aspasDuplas = "aspas duplas";
$nome = 'Andrew';
$acrescentaNaVariavel = $nome .= ' ' . 'Henrique';
$sobrenome = 'Gomes';
$nomeConcatenado = $nome . ' ' . $sobrenome;
$nomeInterpolado = "$nome $sobrenome";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strings no PHP</title>
</head>

<body>
  <header>
    <h1>Strings no PHP</h1>
  </header>
  <main>
    <p>String: <?= $texto ?></p>
    <p>Podem ser escritas com <?= $aspasSimples ?></p>
    <p>Podem ser escritas com <?= $aspasDuplas ?></p>
    <p>Concatenação: Meu nome é <?= $nomeConcatenado ?></p>
    <p>Interpolação: Meu nome é <?= $nomeInterpolado ?></p>
    <p>Acrescenta mais um valor à variável: <?= $acrescentaNaVariavel ?></p>
  </main>
</body>

</html>