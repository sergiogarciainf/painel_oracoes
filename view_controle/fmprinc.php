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
require_once '../dao/uDaoCelula.php';
require_once '../entidades/uEntCelula.php';

class Principal {

    //put your code here
    private $paginaView = "fmprinc.html.php";
    private $pglogin = "login.php";
    private $nomeSessaoPrincipal = "instituicao";
    private $idSessaoLogin;

    public function iniciar() {
        $this->idSessaoLogin = fezlogin($this->nomeSessaoPrincipal, $this->pglogin);
        # Inicia a parte do controle e obter inicializações
        # Indica que precisa começar por aqui
        $comecarAqui = True;
# obter dados da view
        foreach ($_REQUEST as $key => $value) {
            echo ('$' . "_REQUEST['$key']= '$value'; <br>");
        }
# executar os procedimentos e desvios
        # chamar a view
        $ent = new EntCelula();
        $daoCelula = new DaoCelula();

        $listaEntidade = $daoCelula->listar('order by bairro', null);
        if ($listaEntidade != null) {
            $ent = $listaEntidade[0];
        }

        require_once $this->paginaView;
    }

}

$principal = new Principal();
$principal->iniciar();
