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

class Distribuicao {

    //put your code here
    private $paginaView = "fmdistribuir.html.php";
    private $pglogin = "login.php";
    private $nomeSessaoPrincipal = "instituicao";
    private $idSessaoLogin;
    private $ativarVarredura = true;

    public function iniciar() {
        $this->idSessaoLogin = fezlogin($this->nomeSessaoPrincipal, $this->pglogin);
        # Inicia a parte do controle e obter inicializações
        # Indica que precisa começar por aqui
        $comecarAqui = True;
# obter dados da view
        if (isset($_REQUEST['cb_celula']))
            $idcelula = $_REQUEST['cb_celula'];
        $celulas = $this->listarCelulas();
        if ($this->ativarVarredura) {
            foreach ($_REQUEST as $key => $value) {
                echo ('$' . "_REQUEST['$key']= '$value'; <br>");
            }
        }
# executar os procedimentos e desvios
        # chamar a view
        require_once $this->paginaView;
    }

    private function listarCelulas() {
        $entCelula = new EntCelula();

        $daoCelula = new DaoCelula();
        $celulas = $daoCelula->listarQuery('select * from celula', null);

        if (isset($celulas[0])) {
            $entCelula = $celulas[0];
            /* echo $entCelula->getidcelula();
              echo $entCelula->getidinstituicao();
              echo $entCelula->getnome();
              echo $entCelula->getendereco();
              echo $entCelula->getnum();
              echo $entCelula->getcomplemento();
              echo $entCelula->getbairro();
              echo $entCelula->getcidade();
              echo $entCelula->getuf();
              echo $entCelula->getcep();
             */
        }
        return $celulas;
    }

}

$distribuicao = new Distribuicao();
$distribuicao->iniciar();
