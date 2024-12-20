<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Functions</title>
</head>

<body>
  <header>
    <h1>Functions</h1>
  </header>
  <main>
    <h2>Função simples</h2>

    <?php

    function simpleFunction()
    {
      echo "Uma função simples";
    }

    ?>

    <p>
      Simples: <?= simpleFunction() ?>
    </p>

    <hr>

    <h2>Função com parâmetros</h2>

    <?php

    function paramFunction($param)
    {
      echo "É um $param que é passado dentro dos parênteses";
    }

    ?>

    <p>
      Parâmetro: <?= paramFunction('argumento') ?>
    </p>

    <hr>

    <h2>Parâmetro opcional</h2>

    <?php

    function optionalParam($arg, $param = 'parâmetro padrão')
    {
      echo "Se não for passado $arg, já tem $param para ser trabalhado";
    }

    ?>

    <p>
      Versão 1: <?= optionalParam('nada', 'algo') ?>
    </p>

    <p>
      Versão 2: <?= optionalParam('argumento') ?>
    </p>

    <hr>

    <h2>func_get_arg() | func_num_args()</h2>

    <?php

    function umaFuncao($a)
    {
      $x = func_get_arg(1);
      $y = func_get_arg(2);
      $z = func_get_arg(3);

      echo "$a | $x | $y | $z";

      echo " | Quantidade de argumentos: " . func_num_args();
    }

    ?>

    <p>
      Parâmetros/Argumentos: <?= umaFuncao('oi', 56, 'olá', -11) ?>
    </p>

    <hr>

    <h2>Variadic parameter</h2>

    <?php

    function variosParametros(...$params)
    {
      foreach ($params as $arg) {
        echo " | $arg";
      }
    }

    ?>

    <p>Pode receber vários argumentos: <?= variosParametros(1, 'Gomes', -22, 'Sei lá', 'Viviane') ?></p>

    <hr>

    <h2>Return</h2>

    <?php

    function withReturn()
    {
      return $a = 'teste';
    }

    function returnWithParam($nome)
    {
      return "Meu nome é $nome";
    }

    $andrew = returnWithParam('Andrew');
    $viviane = returnWithParam('Viviane');

    ?>

    <p>
      Retornando este valor: <?= withReturn() ?>
    </p>

    <p>
      Retornando valores com argumentos: <?= $andrew ?> | <?= $viviane ?>
    </p>

  </main>
</body>

</html>