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

class Notificacao {

    //put your code here
    private $paginaView = "fmnotificacoes.html.php";
    private $pglogin = "login.php";
    private $nomeSessaoPrincipal = "instituicao";
    private $idSessaoLogin;
    private $ativarVarredura = false;

    public function iniciar() {
        $this->idSessaoLogin = fezlogin($this->nomeSessaoPrincipal, $this->pglogin);
        # Inicia a parte do controle e obter inicializações
        # Indica que precisa começar por aqui
        $comecarAqui = True;
        $entNotificacao = new EntNotificacao();
        $daoNotificacao = new DaoNotificacao();
        $notificacaos = $daoNotificacao->listarQuery('select * from notificacao', null);
        if (isset($notificacaos[0])) {
            $entNotificacao = $notificacaos[0];
        }

# obter dados da view
        if ($this->ativarVarredura) {
            foreach ($_REQUEST as $key => $value) {
                echo ('$' . "_REQUEST['$key']= '$value'; <br>");
            }
        }
        if (isset($_REQUEST['butn_distribuir']))
        {
            redir('fmdistribuir.php');
        }
            
# executar os procedimentos e desvios
        # chamar a view
        require_once $this->paginaView;
    }

}

$notificacao = new Notificacao();
$notificacao->iniciar();
