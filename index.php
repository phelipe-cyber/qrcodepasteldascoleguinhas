<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Pastel das Coleguinhas</title>
</head>

<style type="text/css">
    #imgpos {
        height: 10em;
        display: flex;
        align-items: center;
    }
</style>


<body id="imgpos">

    <?php

    include 'vendor/autoload.php';

    use BaconQrCode\Renderer\ImageRenderer;
    use BaconQrCode\Renderer\Image\SvgImageBackEnd;
    use BaconQrCode\Renderer\RendererStyle\RendererStyle;
    use BaconQrCode\Writer;

    $renderer = new ImageRenderer(
        new RendererStyle(250),
        new SvgImageBackEnd()
    );
    $writer = new Writer($renderer);
    //Exibe o QR code na tela
    $data = 'http://cardapiopasteldascoleguinhas.sistemaph.com.br/';

    echo ($writer->writeString($data));

    ?>
</body>

</html>