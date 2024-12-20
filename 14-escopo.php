<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Escopo no PHP</title>
</head>

<body>
  <header>
    <h1>Escopo no PHP</h1>
  </header>
  <main>

    <h2>Escopo Global</h2>

    <?php

    $variavelGlobal = 'No escopo global';

    ?>

    <p>
      Variável: <?= $variavelGlobal ?>
    </p>

    <?php

    function escopoFuncao($param)
    {
      $arg = 'Variável é local';
      echo "$param é local | ";
      return $arg;
    }

    ?>

    <p>
      Escopo de função: <?= escopoFuncao('Parâmetro/Argumento') ?>
    </p>

    <hr>

    <h2>global</h2>

    <?php

    $variavelQualquer = 100;

    echo "<p>Escopo global: $variavelQualquer</p>";

    function trazendoValorGlobal()
    {
      global $variavelQualquer;
      $variavelQualquer = 'testada dentro da função';
    }

    trazendoValorGlobal();

    ?>

    <p>
      A mesma variável: <?= $variavelQualquer ?>
    </p>

    <hr>

    <h2>Globals[]</h2>

    <?php

    $outraVariavel = 'Mais uma global';

    echo "<p>$outraVariavel</p>";

    function testeGlobals()
    {
      // $outraVariavel = 'Deu certo!!!';
      $GLOBALS['outraVariavel'] = 'Agora deu mesmo!!!';
    }

    testeGlobals();

    ?>

    <p>
      Foi? <?= $outraVariavel ?>
    </p>

  </main>
</body>

</html>