<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
error_reporting(0);
require_once '../util/geral.php';
require_once '../pdo_engine/uEngine.php';
require_once '../negocios/NgInstituicao.php';
require_once '../entidades/uEntInstituicao.php';
require_once '../dao/uDaoNotificacao.php';
require_once '../entidades/uEntNotificacao.php';

/**
 * Description of FmDetalhesNotific
 *
 * @author User
 */
class FmDetalhesNotific {

    //put your code here
    private $paginaView = "fmdetalhesnotific.html.php";
    private $pglogin = "login.php";
    private $nomeSessaoPrincipal = "instituicao";
    private $idSessaoLogin;
    private $ativarVarredura = true;

    private function monitorar() {
        if ($this->ativarVarredura) {
            foreach ($_REQUEST as $key => $value) {
                echo ('$' . "_REQUEST['$key']= '$value'; <br>");
            }
            foreach ($_SESSION as $key => $value) {
                echo ('$' . "_SESSION['$key']= '$value'; <br>");
            }
        }
    }

    public function iniciar() {
        $this->idSessaoLogin = fezlogin($this->nomeSessaoPrincipal, $this->pglogin);
        $instituicao = NgInstituicao::obterInsituicaoSerializacao($this->idSessaoLogin);
        $var_idinstituicao = $instituicao->getidinstituicao();

        # Inicia a parte do controle e obter inicializações
        # Indica que precisa começar por aqui
        $comecarAqui = false;
        
        $this->monitorar();
        if ($_REQUEST['op']== 'i')
        {
            $_SESSION['id']=null;
        }

        $entNotificacao = new EntNotificacao();
        $daoNotificacao = new DaoNotificacao();
        if (isset($_REQUEST['ok'])) {
            /* verifica se a opção aperada
              é ok */
            $entNotificacao->setdata_final($_REQUEST['editdata_final']);
            $entNotificacao->setdata_inicial($_REQUEST['editdata_inicial']);
            $entNotificacao->setidinstituicao($var_idinstituicao);
            $entNotificacao->setresumo($_REQUEST['editresumo']);
            $entNotificacao->setdescricao($_REQUEST['editdescricao']);
            if ($_SESSION['op'] == 'i') {
                /* //Opção de inclusao */
                $entNotificacao->setidnotificacao(null);
                $daoNotificacao->incluir($entNotificacao);
                redir('fmnotificacoes.php');
            }
            if ($_SESSION['op'] == 'a') {
                /* //Opção de Alteração */
                $entNotificacao->setidnotificacao($_SESSION['id']);
                $daoNotificacao->atualizar($entNotificacao);
                redir('fmnotificacoes.php');
            }
            if ($_SESSION['op'] == 'e') {
                /* //Opção de Exclusão */
                $entNotificacao->setidnotificacao($_SESSION['id']);
                $daoNotificacao->excluir($entNotificacao);
                redir('fmnotificacoes.php');
            }
        }
        if (isset($_REQUEST['id'])) {
            $_SESSION['id'] = $_REQUEST['id'];
        }
        if (isset($_REQUEST['op'])) {
            $_SESSION['op'] = $_REQUEST['op'];
        }
        if (isset($_SESSION['id'])) {
            $id = $_SESSION['id'];
            $entNotificacao->setidnotificacao($id);
            $daoNotificacao->buscarId($entNotificacao);
            
        }

# executar os procedimentos e desvios
        # chamar a view
        require_once $this->paginaView;
    }

}

$fmDetalhesNotific = new FmDetalhesNotific();
$fmDetalhesNotific->iniciar();

