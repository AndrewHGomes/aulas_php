<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Propriedades e Métodos Estáticos</title>
</head>

<body>
  <header>
    <h1>Propriedades e Métodos Estáticos</h1>
  </header>
  <main>
    <?php

    class Alguem
    {
      public static $nome = 'Andrew';
      public static $idade = 36;

      public static function falar()
      {
        return "Meu nome é " . static::$nome . ", tenho " . static::$idade . " anos";
      }
    }

    ?>
    <p>
      <?= print_r(new Alguem) ?>
    </p>
    <p>
      <?= Alguem::falar() ?>
    </p>
  </main>
</body>

</html>