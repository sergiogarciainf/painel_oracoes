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
require_once '../entidades/uEntInstituicao.php';
require_once '../dao/uDaoInstituicao.php';
require_once '../pdo_engine/uEngine.php';
require_once '../negocios/NgInstituicao.php';

class Login {

    //put your code here
    private $paginaView = "login.html.php";
    public function iniciar() {
        # Inicia a parte do controle e obter inicializações
        # Indica que precisa começar por aqui
        $comecarAqui = True;
        error_reporting(0);
# obter dados da view
        if (isset($_REQUEST['Confirmar'])) {
            $email = $_REQUEST['email'];
            $senha = $_REQUEST['senha'];
            if (NgInstituicao::autenticar($email, $senha))
            {
                redir("fmprinc.php");
            }
        }
# executar os procedimentos e desvios
        # chamar a view
        require_once $this->paginaView;
    }


}
$fluxoBasico = new Login();
$fluxoBasico->iniciar();
