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

class Celula {

    //put your code here
    private $paginaView = "fmcelula.html.php";
    private $pglogin = "login.php";
    private $nomeSessaoPrincipal = "instituicao";
    private $idSessaoLogin;
    private $ativarVarredura = false;

    private function obterPost($entCelula) {
        $entCelula->setnome($_REQUEST['ednome']);
        $entCelula->setendereco($_REQUEST['edendereco']);
        $entCelula->setnum($_REQUEST['ednum']);
        $entCelula->setcomplemento($_REQUEST['edcomplemento']);
        $entCelula->setbairro($_REQUEST['edbairro']);
        $entCelula->setcidade($_REQUEST['edcidade']);
        $entCelula->setuf($_REQUEST['eduf']);
        $entCelula->setcep($_REQUEST['edcep']);
    }

    public function iniciar() {
        $this->idSessaoLogin = fezlogin($this->nomeSessaoPrincipal, $this->pglogin);
        $idinstituicao = unserialize($this->idSessaoLogin);
        # Inicia a parte do controle e obter inicializações
        # Indica que precisa começar por aqui
        $comecarAqui = True;
# obter dados da view
        if ($this->ativarVarredura) {
            foreach ($_REQUEST as $key => $value) {
                echo ('$' . "_REQUEST['$key']= '$value'; <br>");
            }
        }
        $id = id_get('id', 'fmprinc.php');
        $op = id_get('op', 'fmprinc.php');
# executar os procedimentos e desvios
        # chamar a view
        $entCelula = new EntCelula();
        $daoCelula = new DaoCelula();
        error_reporting(0);
        if ($op != 'i') {
            if (!isset($_REQUEST['butn_Confirmar'])) {
                $p = array();
                $p[0] = $id;
                $listaEntidade = $daoCelula->listar('where idcelula=?', $p);
            }
        }

        $entCelula->setidinstituicao($idinstituicao);
        if ($listaEntidade != null) {
            $entCelula = $listaEntidade[0];
        }
        if (isset($_REQUEST['butn_Cancelar'])) {
            redir('fmprinc.php');
        }
        if (isset($_REQUEST['butn_Confirmar'])) {
            //obter dados do post
            $this->obterPost($entCelula);
            if ($op == 'a') {
                // realizar alteração
                $daoCelula->atualizar($entCelula);
                //Voltar à pagina principal
                redir('fmprinc.php');
            }
            if ($op == 'i') {
                $entCelula->setidcelula(null);
                //incluir
                $daoCelula->incluir($entCelula);
                //Voltar à pagina principal
                redir('fmprinc.php');
            }
            if ($op == 'e') {
                //Excluir
                $daoCelula->excluir($entCelula);
                //Voltar à pagina principal
                redir('fmprinc.php');
            }
        }

        require_once $this->paginaView;
    }

    private function limparEntidade($entCelula) {
        $entCelula->setidcelula(null);
        $entCelula->setnome(null);
        $entCelula->setendereco(null);
        $entCelula->setnum(null);
        $entCelula->setcomplemento(null);
        $entCelula->setbairro(null);
        $entCelula->setcidade(null);
        $entCelula->setuf(null);
        $entCelula->setcep(null);
    }

}

$celula = new Celula();
$celula->iniciar();
