<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of apoio
 *
 * @author juvenal
 */
class apoio {

    public function setGateway($gateway_id) {
        $gateway = array(
            1 => array('id' => 1,'nome' => 'cielo', 'file' => null),
            2 => array('id' => 2,'nome' => 'komerci', 'file' => './lib/komerci.php'),
            3 => array('id' => 3,'nome' => 'pagseguro', 'file' => null),
            4 => array('id' => 4,'nome' => 'paypal', 'file' => null),
        );

        return $gateway[$gateway_id];
    }

}
