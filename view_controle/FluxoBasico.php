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

class FluxoBasico {

    //put your code here
    private $paginaView = "";
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
        if ($this->ativarVarredura) {
# obter dados da view
            foreach ($_REQUEST as $key => $value) {
                echo ('$' . "_REQUEST['$key']= '$value'; <br>");
            }
            foreach ($_SESSION as $key => $value) {
                echo ('$' . "_SESSION['$key']= '$value'; <br>");
            }
        }
# executar os procedimentos e desvios
        # chamar a view
        require_once $this->paginaView;
    }

}

$fluxoBasico = new FluxoBasico();
$fluxoBasico->iniciar();
