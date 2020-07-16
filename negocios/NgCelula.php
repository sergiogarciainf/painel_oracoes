<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../dao/uDaoCelula.php';

/**
 * Description of NgCelula
 *
 * @author User
 */
class NgCelula {

    //put your code here
    public static function incluirCelula($dao, $ent) {
        if ($dao->buscarPrimeiro('nome', $ent->getnome(), $ent)) {
            return $ent->getnome() . ' j&aacute; registrada anteriormente !!!';
        } else {
            $dao->incluir($ent);
            header('location:FmPrinc.php');
        }
    }

    public function listarCelular($condicao) {
        $dao = new DaoCelula();
        $listaCelulas = $dao->listar($condicao, null);
        return $listaCelulas;
    }

}
