<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
