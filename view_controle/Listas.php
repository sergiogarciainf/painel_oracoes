<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Listas
 *
 * @author User
 */
require_once '../dao/uDaoCelula.php';
require_once '../entidades/uEntCelula.php';
require_once '../pdo_engine/uEngine.php';

class Listas {

//put your code here
    public function teste() {
        $daoCelula = new DaoCelula();
        $ent = new EntCelula();
//$p = array();
//$p[1] = 10;
        $p = null;
        error_reporting(0);
        $celulas = $daoCelula->listarQuery('SELECT celula.*
FROM celula celula, notificacao_celula notificacao_celula
WHERE celula.idcelula=notificacao_celula.idcelula AND 
notificacao_celula.idnotificacao=1', $p);
        if (isset($celulas[0])) {
            $entCelula = $celulas[0];
            echo $entCelula->getidcelula();
            echo $entCelula->getidinstituicao();
            echo $entCelula->getnome();
            echo $entCelula->getendereco();
            echo $entCelula->getnum();
            echo $entCelula->getcomplemento();
            echo $entCelula->getbairro();
            echo $entCelula->getcidade();
            echo $entCelula->getuf();
            echo $entCelula->getcep();
        }
    }

}

$l = new Listas();
$l->teste();
