<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Pastel das Coleguinhas</title>
</head>

<body>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <div class="row row-cols-1 row-cols-md-3 g-4">


        <div class="col">
            <div class="card h-100" style="width: 20rem;">
                <div class="card-body">
                    <?php
                    include 'vendor/autoload.php';

                    use BaconQrCode\Renderer\ImageRenderer;
                    use BaconQrCode\Renderer\Image\SvgImageBackEnd;
                    use BaconQrCode\Renderer\RendererStyle\RendererStyle;
                    use BaconQrCode\Writer;

                    $renderer = new ImageRenderer(
                        new RendererStyle(150),
                        new SvgImageBackEnd()
                    );
                    $writer = new Writer($renderer);
                    //Exibe o QR code na tela
                    $data = 'http://cardapiopasteldascoleguinhas.sistemaph.com.br/';

                    echo ($writer->writeString($data));

                    ?>

                </div>
            </div>
        </div>

</body>

</html>