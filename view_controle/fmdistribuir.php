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
require_once '../entidades/uEntCelula.php';
require_once '../dao/uDaoCelula.php';
require_once '../entidades/uEntInstituicao.php';

class Distribuicao {

    //put your code here
    private $paginaView = "fmdistribuir.html.php";
    private $pglogin = "login.php";
    private $nomeSessaoPrincipal = "instituicao";
    private $idSessaoLogin;
    private $ativarVarredura = false;

    public function iniciar() {
        $this->idSessaoLogin = fezlogin($this->nomeSessaoPrincipal, $this->pglogin);
        # Inicia a parte do controle e obter inicializações
        # Indica que precisa começar por aqui
        $comecarAqui = True;
# obter dados da view
        if (isset($_REQUEST['cb_celula'])) {
            $idcelula = $_REQUEST['cb_celula'];
        }
        $celulas = $this->listarCelulas($this->idSessaoLogin);
        $celula = $celulas[0];

        if ($this->ativarVarredura) {
            foreach ($_REQUEST as $key => $value) {
                echo ('$' . "_REQUEST['$key']= '$value'; <br>");
            }
        }
        # lista das celulas ligadas as notificações
# executar os procedimentos e desvios
        # chamar a view
        require_once $this->paginaView;
    }

    private function listarCelulas($s_instituicao) {
        //$instituicao=new EntInstituicao();
        $instituicao = unserialize($s_instituicao);
        $idinstituicao = $instituicao->getidinstituicao();
        $daoCelula = new DaoCelula();
        $celulas = $daoCelula->listarQuery('select * from celula where idinstituicao=' . $idinstituicao, null);
        return $celulas;
    }

}

$distribuicao = new Distribuicao();
$distribuicao->iniciar();
