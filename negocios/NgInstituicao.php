<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NgInstituicao
 *
 * @author User
 */
class NgInstituicao {

    //put your code here
    public static function autenticar($email, $senha) {
        $p = array();
        $p[0] = $email;
        $daoInstituicao = new DaoInstituicao();
        $listaEntidade = $daoInstituicao->listar('where email=?', $p);
        if ($listaEntidade != null) {
            $ent = $listaEntidade[0];
            if ($senha == $ent->getsenha()) {
                $s = serialize($ent);
                iniciarSessao();
                $_SESSION['instituicao'] = $s;
                return true;
            }
        }
        return false;
    }

}
