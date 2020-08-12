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
require_once '../entidades/uEntInstituicao.php';
require_once '../framework/listagem.php';
require_once '../negocios/NgInstituicao.php';

class Notificacao {

//put your code here
    private $paginaView = "fmnotificacoes.html.php";
    private $pglogin = "login.php";
    private $nomeSessaoPrincipal = "instituicao";
    private $idSessaoLogin;
    private $ativarVarredura = false;

    public function iniciar() {
        $this->idSessaoLogin = fezlogin($this->nomeSessaoPrincipal, $this->pglogin);
        $instituicao = NgInstituicao::obterInsituicaoSerializacao($this->idSessaoLogin);
        $var_idinstituicao = $instituicao->getidinstituicao();
        if ($this->idSessaoLogin == null)
            return null;
# Inicia a parte do controle e obter inicializações
# Indica que precisa começar por aqui
        $comecarAqui = True;

# obter dados da view
        if ($this->ativarVarredura) {
            foreach ($_REQUEST as $key => $value) {
                echo ('$' . "_REQUEST['$key']= '$value'; <br>");
            }
            foreach ($_SESSION as $key => $value) {
                echo ('$' . "_SESSION['$key']= '$value'; <br>");
            }
        }
        /*
         * Alteracao
         * $_REQUEST['id']= '1'; $_REQUEST['coluna']= '1';
         */
        if (isset($_REQUEST['coluna'])) {
            if ($_REQUEST['coluna'] == 1) {
                redir('FmDetalhesNotific.php?id='.$_REQUEST['id'].'&op=a');
            }
            if ($_REQUEST['coluna'] == 2) {
                echo "Exclusão no id " . $_REQUEST['id'];
                redir('FmDetalhesNotific.php?id='.$_REQUEST['id'].'&op=e');
            }
        }
        $rs = Engine::preparar('SELECT * FROM notificacao notificacao WHERE notificacao.idinstituicao=' . $var_idinstituicao);
        $colunas = array();
        $colunas[0] = new Coluna('Resumo', 100, false);
        $colunas[1] = new Coluna('', 10, true);
        $colunas[2] = new Coluna('', 10, true);
        $celula = array();
        $n = 0;
        if (Engine::executar($rs)) {
            $ct = 0;
            while ($row = $rs->fetch(PDO::FETCH_OBJ)) {
                $id = $row->idnotificacao;
                $celula[$n][0] = new Celula($id, $row->resumo);
                $celula[$n][1] = new Celula($id, "../res/confirmar.jpg");
                $celula[$n][2] = new Celula($id, "../res/excluir.jpg");
                $n++;
            }
        }

# chamar a view
        $l = new listagemBootstrap();
        $l->setColunas($colunas);
        $l->setCelulas($celula);
        $l->setLargura(600);
        //$l->setPosicao($posicao);
        $l->setPagina('fmnotificacoes.php');

        require_once $this->paginaView;
    }

}

$notificacao = new Notificacao();
$notificacao->iniciar();
