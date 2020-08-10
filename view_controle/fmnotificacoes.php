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

class Notificacao {

//put your code here
    private $paginaView = "fmnotificacoes.html.php";
    private $pglogin = "login.php";
    private $nomeSessaoPrincipal = "instituicao";
    private $idSessaoLogin;
    private $ativarVarredura = false;

    public function iniciar() {
        $this->idSessaoLogin = fezlogin($this->nomeSessaoPrincipal, $this->pglogin);
        $instituicao = new EntInstituicao();
        $instituicao = unserialize($this->idSessaoLogin);
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
        $compl = "";
        if (isset($_REQUEST['encontrar_x'])) {
            $compl = ' and resumo like \'%' . $_REQUEST['nameEncontrar'] . '%\'';
        }


        if (!isset($_SESSION['posicao_inicial'])) {
            $_SESSION['posicao_inicial'] = '0';
        }
        $posicao = $_SESSION['posicao_inicial'];
        if (isset($_REQUEST['anterior_x'])) {
            if ($posicao - 1 >= 0) {
                $posicao -= 10;
            }
        }
        if (isset($_REQUEST['proxima_x'])) {
            $posicao += 10;
        }
        $_SESSION['posicao_inicial'] = $posicao;
        $sql='SELECT * FROM notificacao notificacao WHERE notificacao.idinstituicao=' . $var_idinstituicao .$compl. ' Limit ' . $posicao . ' ,10';
        
        $rs = Engine::preparar('SELECT * FROM notificacao notificacao WHERE notificacao.idinstituicao=' . $var_idinstituicao .$compl. ' Limit ' . $posicao . ' ,10');
        $colunas = array();
        $colunas[] = new Coluna('Resumo', 100);
        $celula = array();
        $n = 0;
        if (Engine::executar($rs)) {
            $ct = 0;
            while ($row = $rs->fetch(PDO::FETCH_OBJ)) {
                $celula[$n][0] = new Celula($row->idnotificacao, $row->resumo);
                
                $n++;
            }
        }

# chamar a view
        $l = new listagemBootstrap();
        $l->setColunas($colunas);
        $l->setCelulas($celula);
        $l->setLargura(600);
        $l->setPosicao($posicao);
        $l->setPagina('fmnotificacoes.php');

        require_once $this->paginaView;
    }

}

$notificacao = new Notificacao();
$notificacao->iniciar();
