<?php
include_once './lib/apoio.php';
$apoio = apoio::setGateway($_GET['id']);
include_once $apoio['file'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $apoio['nome']; ?></title>
    </head>
    <body>
        <?php
        if ($apoio['id'] == 2) {
            komerci\config("filiacao", "012345678");
            komerci\config("senha", "minha senha secreta");
            print_r(komerci\comprovante("123456789", "123456", "20121031"));
        }
        ?>
    </body>
</html>
