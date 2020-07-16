<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once("../entidades/uEntInstituicao.php");
require_once("../dao/uDaoInstituicao.php");
require_once '../util/geral.php';
require_once("../pdo_engine/uEngine.php");
$msg = '';
require_once '../view/index.php';
if (isset($_REQUEST['Entrar'])) {
    $entInstituicao = new EntInstituicao();
    $daoInstituicao = new DaoInstituicao();
    $p = array();
    $p[0] = $_REQUEST['login'];

    $lista = $daoInstituicao->listar('where email=?', $p);
    $msg = "Usu&aacute;rio inexiste !!";
    if ($lista != null) {
        $senha = $lista[0]->getsenha();
        if ($senha != $_REQUEST['senha']) {
            $msg = "Senha inv&aacute;lida";
        } else {
            $msg = "";
            $_SESSION['idinstituicao'] = $lista[0]->getidinstituicao();
            redir("FmPrinc.php?idinstituicao=" . $lista[0]->getidinstituicao());
        }
    }
}
