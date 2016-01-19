
<?php
$wsdl = "https://ecommerce.userede.com.br/pos_virtual/wskomerci/cap.asmx?WSDL";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            $client = new SoapClient($wsdl);
            $params['TOTAL'] = 0.50;
            $params['TRANSACAO'] = 06;
            $params['PARCELAS'] = 2;
            $params['FILIACAO'] = 051294320;
            $params['NUMPEDIDO'] = rand(1, 100);
            $params['NRCARTAO'] = 5148422329528994;
            $params['CVC2'] = 452;
            $params['MES'] = 05;
            $params['ANO'] = 2017;
            $params['PORTADOR'] = 'DEV FOCO MULTIMIDIA';
            $params['CONFTXN'] = 'S';

            $response = $client->__soapCall("GetAuthorizedAVS");
            var_dump($response);
            ?>
        </pre>
    </body>
</html>
