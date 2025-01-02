<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    div {
      width: 400px;
      height: 450px;
      border-radius: 10px;
      background-color: #333;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      /* gap: .5em; */
    }

    div h1 {
      color: #fff;
    }
  </style>
  <title>Gerar QR Code</title>
</head>

<body>
  <header>
    <h1>Gerar QR Code</h1>
  </header>
  <main>
    <br>

    <form action="" method="POST">
      <label for="qrcode">Gerar QR Code</label>
      <input type="text" name="qrcode">
      <input type="submit" value="Gerar">
    </form>

    <?php

    include './libs/qrcode.php';

    if (isset($_POST['qrcode'])) {
      $texto = $_POST['qrcode'];

      $nomeArquivo = md5($texto);

      $name = "Mesa_$texto";

      $link = "https://agapesi.ddns.com.br/tavernapizzariacaconde/validate.php?mesa=$nomeArquivo";

      $file = "$texto.png";

      $arquivo = "files/{$file}";

      $opcoes = array(
        "w" => 300,
        "h" => 300,
        "bc" => "#ffffff"
      );

      $generator = new QRCode($link, $opcoes);

      $imagem = $generator->render_image();

      imagepng($imagem, $arquivo);

      imagedestroy($imagem);

      unset($_POST);
    }

    ?>

    <p>Nome simples: <?= $texto ?></p>

    <p>Nome codificado: <?= $nomeArquivo ?></p>

    <div>
      <img src="<?= $arquivo ?>" alt="QR Code mesa">
      <h1><?= $texto ?></h1>
    </div>

  </main>
</body>

</html>