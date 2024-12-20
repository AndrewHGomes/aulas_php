<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays no PHP</title>
</head>

<body>
  <header>
    <h1>Arrays no PHP</h1>
  </header>
  <main>

    <?php

    $numeros = [1, 2, 3, 4, 5];
    $nomes = ['Andrew', 'Viviane', 'Janico', 'Cleusa'];
    $dados = ['nome' => 'Andrew', 'sobrenome' => 'Gomes', 'idade' => 36]

    ?>

    <p>Array de números: <?= print_r($numeros) ?></p>
    <p>Acessando alguma posição: <?= $numeros[2] ?></p>
    <p>Adicionando último elemento: <?= $numeros[] = 6 ?></p>
    <p>Substituindo um valor: <?= $numeros[0] = 99 ?></p>
    <p>Apresentando valores: <?= $numeros[0] ?>, <?= $numeros[2] ?> e <?= $numeros[4] ?></p>
    <p>Array de números: <?= print_r($numeros) ?></p>
    <hr>
    <p>Array de nomes: <?= print_r($nomes) ?></p>
    <p>Acessando alguma posição: <?= $nomes[2] ?></p>
    <p>Adicionando último elemento: <?= $nomes[] = 'Irvin' ?></p>
    <p>Substituindo um valor: <?= $nomes[0] = 'Renan' ?></p>
    <p>Apresentando valores: <?= $nomes[0] ?>, <?= $nomes[2] ?> e <?= $nomes[4] ?></p>
    <p>Array de nomes: <?= print_r($nomes) ?></p>
    <hr>
    <p>Array associativo: <?= print_r($dados) ?></p>
    <p>Acessando alguma posição: <?= $dados['idade'] ?></p>
    <p>Adicionando último elemento: <?= $dados['altura'] = 1.81 ?></p>
    <p>Substituindo um valor: <?= $dados['nome'] = 'Henrique' ?></p>
    <p>Array associativo: <?= print_r($dados) ?></p>
  </main>
</body>

</html>