<?php

require_once '../entidades/uEntCelula.php';
require_once '../pdo_engine/uEngine.php'; '';

class DaoCelula {

    function listar($complSql, $parametros) {
        $sql = "SELECT * FROM celula $complSql";
        return $this->listarQuery($sql, $parametros);
    }

    function listarQuery($sql, $parametros) {
        $rs = Engine::preparar($sql);
        if ($parametros != null) {
            $ps = 1;
            foreach ($parametros as $value) {
                $rs->bindParam($ps, trim($value));
                $ps++;
            }
        }

        $retorno = null;
        if (Engine::executar($rs)) {
            while ($row = $rs->fetch(PDO::FETCH_OBJ)) {
                if ($retorno == null)
                    $retorno = array();
                $ent = new EntCelula();
                $ent->setidcelula($row->idcelula);
                $ent->setidinstituicao($row->idinstituicao);
                $ent->setnome($row->nome);
                $ent->setendereco($row->endereco);
                $ent->setnum($row->num);
                $ent->setcomplemento($row->complemento);
                $ent->setbairro($row->bairro);
                $ent->setcidade($row->cidade);
                $ent->setuf($row->uf);
                $ent->setcep($row->cep);
                $retorno[] = $ent;
            }
        }
        return $retorno;
    }

    public function incluir($e) {
        $sql = 'INSERT INTO celula (';
        $sql .= 'idinstituicao,';
        $sql .= 'nome,';
        $sql .= 'endereco,';
        $sql .= 'num,';
        $sql .= 'complemento,';
        $sql .= 'bairro,';
        $sql .= 'cidade,';
        $sql .= 'uf,';
        $sql .= 'cep,';
        $sql = substr($sql, 0, strlen($sql) - 1);
        $sql .= ') VALUES (';
        $sql .= "?,"; //idinstituicao
        $sql .= "?,"; //nome
        $sql .= "?,"; //endereco
        $sql .= "?,"; //num
        $sql .= "?,"; //complemento
        $sql .= "?,"; //bairro
        $sql .= "?,"; //cidade
        $sql .= "?,"; //uf
        $sql .= "?,"; //cep
        $sql = substr($sql, 0, strlen($sql) - 1);
        $sql .= ")";

        $rs = Engine::preparar($sql);
        $ps = 1;
        $rs->bindParam($ps, $e->getidinstituicao());
        $ps++;
        $rs->bindParam($ps, $e->getnome());
        $ps++;
        $rs->bindParam($ps, $e->getendereco());
        $ps++;
        $rs->bindParam($ps, $e->getnum());
        $ps++;
        $rs->bindParam($ps, $e->getcomplemento());
        $ps++;
        $rs->bindParam($ps, $e->getbairro());
        $ps++;
        $rs->bindParam($ps, $e->getcidade());
        $ps++;
        $rs->bindParam($ps, $e->getuf());
        $ps++;
        $rs->bindParam($ps, $e->getcep());
        $ps++;
        return Engine::executar($rs);
    }

    public function buscarId($e) {
        return $this->buscarPrimeiro('idcelula', $e->getidcelula(), $e);
    }

    public function buscarPrimeiro($campo, $valorAEncontrar, $e) {
        $sql = 'select * from celula where ' . $campo . '=?';

        $rs = Engine::preparar($sql);

        $rs->bindParam(1, $valorAEncontrar);
        if (Engine::executar($rs)) {
            while ($row = $rs->fetch(PDO::FETCH_OBJ)) {
                $e->setidcelula($row->idcelula);
                $e->setidinstituicao($row->idinstituicao);
                $e->setnome($row->nome);
                $e->setendereco($row->endereco);
                $e->setnum($row->num);
                $e->setcomplemento($row->complemento);
                $e->setbairro($row->bairro);
                $e->setcidade($row->cidade);
                $e->setuf($row->uf);
                $e->setcep($row->cep);
                return true;
            }
        }
        return false;
    }

    public function atualizar($e) {
        $sql = 'update celula set ';
        $sql .= 'idinstituicao=?, ';
        $sql .= 'nome=?, ';
        $sql .= 'endereco=?, ';
        $sql .= 'num=?, ';
        $sql .= 'complemento=?, ';
        $sql .= 'bairro=?, ';
        $sql .= 'cidade=?, ';
        $sql .= 'uf=?, ';
        $sql .= 'cep=?, ';
        $sql = substr($sql, 0, strlen($sql) - 2);
        $sql .= ' where idcelula=? ';
        $rs = Engine::preparar($sql);
        $ps = 1;
        $rs->bindParam($ps, $e->getidinstituicao());
        $ps++;
        $rs->bindParam($ps, $e->getnome());
        $ps++;
        $rs->bindParam($ps, $e->getendereco());
        $ps++;
        $rs->bindParam($ps, $e->getnum());
        $ps++;
        $rs->bindParam($ps, $e->getcomplemento());
        $ps++;
        $rs->bindParam($ps, $e->getbairro());
        $ps++;
        $rs->bindParam($ps, $e->getcidade());
        $ps++;
        $rs->bindParam($ps, $e->getuf());
        $ps++;
        $rs->bindParam($ps, $e->getcep());
        $ps++;
        $rs->bindParam($ps, $e->getidcelula());
        $ps++;

        return Engine::executar($rs);
    }

    public function excluir($e) {
        $sql = 'delete from celula where idcelula=? ';
        $rs->bindParam(1, $e->getidcelula());
        $rs = Engine::preparar($sql);
        return Engine::executar($rs);
    }

}

?>
