<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Decodificação | Criptografia</title>
</head>

<body>
  <header>
    <h1>Decodificação | Criptografia</h1>
  </header>
  <main>
    <h2>Gerando decodificação de senha</h2>

    <?php

    $senha = 39;

    $senha2 = 40;

    $senhaBase64 = base64_encode($senha);

    $senhaDecodificada = base64_decode($senhaBase64);

    $senhaMd5 = md5($senha);

    $senhaMd52 = md5($senha2);

    $senhaSha1 = sha1($senha);

    $senhaComHash = password_hash($senha, PASSWORD_DEFAULT);

    ?>

    <p>Senha: <?= $senha ?></p>
    <p>Senha2: <?= $senha2 ?></p>
    <p>Função base64_encode(): <?= $senhaBase64 ?></p>
    <p>Senha decodificada: <?= $senhaDecodificada ?></p>
    <p>Função md5: <?= $senhaMd5 ?></p>
    <p>Função2 md5: <?= $senhaMd52 ?></p>
    <p>Função sha1: <?= $senhaSha1 ?></p>
    <p>Com Hash: <?= $senhaComHash ?></p>

    <hr>

    <h2>Gerando QR Code</h2>

    <form action="" method="POST">
      <label for="texto">Quer um QR Code?</label>
      <input type="text" id="texto" name="qrcode">
      <input type="submit" value="Gerar">
    </form>

    <?php

    date_default_timezone_set('America/Fortaleza');

    include './libs/qrcode.php';

    if (isset($_POST['qrcode'])) {
      $texto = $_POST['qrcode'];

      $nomeArquivo = md5(time()) . ".png";

      $arquivo = "files/{$nomeArquivo}";

      $opcoes = array(
        "w" => 300,
        "h" => 300
      );

      $generator = new QRCode($texto, $opcoes);

      $imagem = $generator->render_image();

      imagepng($imagem, $arquivo);

      imagedestroy($imagem);

      unset($_POST);
    }

    ?>

    <p>Texto do método POST: <?= var_dump($_POST) ?></p>
  </main>
</body>

</html>