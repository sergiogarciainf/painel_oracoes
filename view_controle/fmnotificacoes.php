<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FluxoBasico
 *
 * @author User
 */
require_once '../util/geral.php';
require_once '../pdo_engine/uEngine.php';
require_once '../entidades/uEntNotificacao.php';
require_once '../dao/uDaoNotificacao.php';
require_once '../entidades/uEntInstituicao.php';

class Notificacao {

    //put your code here
    private $paginaView = "fmnotificacoes.html.php";
    private $pglogin = "login.php";
    private $nomeSessaoPrincipal = "instituicao";
    private $idSessaoLogin;
    private $ativarVarredura = true;

    public function iniciar() {
        $this->idSessaoLogin = fezlogin($this->nomeSessaoPrincipal, $this->pglogin);
        if ($this->idSessaoLogin == null)
            return null;
        # Inicia a parte do controle e obter inicializações
        # Indica que precisa começar por aqui
        $comecarAqui = True;
        $entNotificacao = new EntNotificacao();
        $daoNotificacao = new DaoNotificacao();

        # obter dados da view
        if ($this->ativarVarredura) {
            foreach ($_REQUEST as $key => $value) {
                echo ('$' . "_REQUEST['$key']= '$value'; <br>");
            }
            foreach ($_SESSION as $key => $value) {
                echo ('$' . "_SESSION['$key']= '$value'; <br>");
            }
        }
        $daoNotificacao = new DaoNotificacao();
        $entNotificacao = new EntNotificacao();

        //$p = array();
        //$p[1] = 10;
        error_reporting(0);
        $var_idnotificacao = null;
        $var_data_inicial = null;
        $var_descricao = null;
        $var_data_final = null;
        $var_resumo = null;
        $var_posicao_lista = 0;
        $entInstituicao = new EntInstituicao();
        $entInstituicao = unserialize($this->idSessaoLogin);
        $var_idinstituicao = $entInstituicao->getidinstituicao();
        //posicao_lista
        if (isset($_REQUEST['posicao_lista'])) {
            $var_posicao_lista = $_REQUEST['posicao_lista'];
        }
        if ($_REQUEST['nav_a']) {
            $var_posicao_lista -= 2;
            if ($var_posicao_lista < 0)
                $var_posicao_lista = 0;
        }
        if ($_REQUEST['nav_p']) {
            $var_posicao_lista += 2;
        }
        $notificacaos = $daoNotificacao->listarQuery('SELECT * FROM notificacao notificacao WHERE notificacao.idinstituicao=' . $var_idinstituicao, null);
        if (isset($notificacaos[0])) {
            $entNotificacao = $notificacaos[0];
        }
        if (isset($_REQUEST['idnotificacao_lst'])) {
            $var_idnotificacao = $_REQUEST['idnotificacao_lst'];
            $entNotificacao->setidnotificacao($var_idnotificacao);
            $daoNotificacao->buscarId($entNotificacao);
        }
        if (isset($_REQUEST['idnotificacao'])) {
            $entNotificacao->setidnotificacao($_REQUEST['idnotificacao']);
        }
        if (isset($_REQUEST['data_inicial'])) {
            $entNotificacao->setdata_inicial($_REQUEST['data_inicial']);
        }
        if (isset($_REQUEST['descricao'])) {
            $entNotificacao->setdescricao($_REQUEST['descricao']);
        }
        if (isset($_REQUEST['resumo'])) {
            $entNotificacao->setresumo($_REQUEST['resumo']);
        }
        if (isset($_REQUEST['data_final'])) {
            $entNotificacao->setdata_final($_REQUEST['data_final']);
        }
        if (isset($_REQUEST['idinstituicao'])) {
            $entNotificacao->setidinstituicao($_REQUEST['idinstituicao']);
        }

        if ($notificacaos[$var_posicao_lista]->getresumo() != null) {            echo '<br>' . $notificacaos[$var_posicao_lista]->getresumo();            echo $notificacaos[$var_posicao_lista]->getidnotificacao();        }
        if ($notificacaos[$var_posicao_lista]->getidnotificacao() != null) {
            echo '<br>' . $notificacaos[$var_posicao_lista]->getidnotificacao();
            $var_posicao_lista++;
        }

        if ($notificacaos[$var_posicao_lista]->getresumo() != null) {
            echo '<br>' . $notificacaos[$var_posicao_lista]->getresumo();
            echo $notificacaos[$var_posicao_lista]->getidnotificacao();
        }
        if ($notificacaos[$var_posicao_lista]->getidnotificacao() != null) {
            echo '<br>' . $notificacaos[$var_posicao_lista]->getidnotificacao();
            $var_posicao_lista++;
        }

        if ($notificacaos[$var_posicao_lista]->getresumo() != null) {
            echo '<br>' . $notificacaos[$var_posicao_lista]->getresumo();
            echo $notificacaos[$var_posicao_lista]->getidnotificacao();
        }
        if ($notificacaos[$var_posicao_lista]->getidnotificacao() != null) {             echo '<br>' . $notificacaos[$var_posicao_lista]->getidnotificacao();             $var_posicao_lista++;        }

        # chamar a view
        require_once $this->paginaView;
    }

}

$notificacao = new Notificacao();
$notificacao->iniciar();
