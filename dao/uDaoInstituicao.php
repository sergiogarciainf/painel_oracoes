<?php
class DaoInstituicao
{
   function listar($complSql, $parametros)
   {
      $sql = "SELECT * FROM instituicao $complSql";
      return $this->listarQuery($sql, $parametros);
   }

   function listarQuery($sql, $parametros)
   {
      $rs = Engine::preparar($sql);
      if($parametros != null)
      {
         $ps = 1;
         foreach($parametros as $value)
         {
            $rs->bindParam($ps, trim($value));$ps++;
         }
      }

      $retorno = null;
      if(Engine::executar($rs))
      {
         while($row = $rs->fetch(PDO::FETCH_OBJ))
         {
            if($retorno == null)
               $retorno = array();
            $ent = new EntInstituicao();
            $ent->setidinstituicao($row->idinstituicao);
            $ent->setdenomicacao($row->denomicacao);
            $ent->setnome($row->nome);
            $ent->setnome_contato($row->nome_contato);
            $ent->setemail($row->email);
            $ent->setsenha($row->senha);
            $ent->settelefone($row->telefone);
            $ent->setnivel_seguranca($row->nivel_seguranca);
            $ent->setnome_pdf($row->nome_pdf);
            $retorno[] = $ent;
         }
      }
      return $retorno;
   }

   public function incluir($e)
   {
      $sql = 'INSERT INTO instituicao (';
      $sql .=  'denomicacao,';
      $sql .=  'nome,';
      $sql .=  'nome_contato,';
      $sql .=  'email,';
      $sql .=  'senha,';
      $sql .=  'telefone,';
      $sql .=  'nivel_seguranca,';
      $sql .=  'nome_pdf,';
      $sql=substr($sql,0,strlen($sql)-1);
      $sql.=') VALUES (';
      $sql.="?," ;//denomicacao
      $sql.="?," ;//nome
      $sql.="?," ;//nome_contato
      $sql.="?," ;//email
      $sql.="?," ;//senha
      $sql.="?," ;//telefone
      $sql.="?," ;//nivel_seguranca
      $sql.="?," ;//nome_pdf
      $sql=substr($sql,0,strlen($sql)-1);
      $sql.=")";

      $rs=Engine::preparar($sql);
      $ps=1;
      $rs->bindParam($ps, $e->getdenomicacao());$ps++;
      $rs->bindParam($ps, $e->getnome());$ps++;
      $rs->bindParam($ps, $e->getnome_contato());$ps++;
      $rs->bindParam($ps, $e->getemail());$ps++;
      $rs->bindParam($ps, $e->getsenha());$ps++;
      $rs->bindParam($ps, $e->gettelefone());$ps++;
      $rs->bindParam($ps, $e->getnivel_seguranca());$ps++;
      $rs->bindParam($ps, $e->getnome_pdf());$ps++;
      return Engine::executar($rs);

   }
   public function buscarId($e)
   {
      return $this->buscarPrimeiro('idinstituicao', $e->getidinstituicao(),$e);
   }
   public function buscarPrimeiro($campo,  $valorAEncontrar,$e)
   {
      $sql = 'select * from instituicao where ' . $campo . '=?';

      $rs = Engine::preparar($sql);

      $rs->bindParam(1, $valorAEncontrar);
      if(Engine::executar($rs))
      {
         while($row = $rs->fetch(PDO::FETCH_OBJ))
         {
            $e->setidinstituicao($row->idinstituicao);
            $e->setdenomicacao($row->denomicacao);
            $e->setnome($row->nome);
            $e->setnome_contato($row->nome_contato);
            $e->setemail($row->email);
            $e->setsenha($row->senha);
            $e->settelefone($row->telefone);
            $e->setnivel_seguranca($row->nivel_seguranca);
            $e->setnome_pdf($row->nome_pdf);
            return true;
		
         }
      }
      return false;
   }
   public function atualizar($e)
   {
      $sql = 'update instituicao set ';
      $sql .= 'denomicacao=?, ';
      $sql .= 'nome=?, ';
      $sql .= 'nome_contato=?, ';
      $sql .= 'email=?, ';
      $sql .= 'senha=?, ';
      $sql .= 'telefone=?, ';
      $sql .= 'nivel_seguranca=?, ';
      $sql .= 'nome_pdf=?, ';
      $sql=substr($sql,0,strlen($sql)-2);
      $sql .= ' where idinstituicao=? ';
      $rs = Engine::preparar($sql);
      $ps=1;
      $rs->bindParam($ps, $e->getdenomicacao());$ps++;
      $rs->bindParam($ps, $e->getnome());$ps++;
      $rs->bindParam($ps, $e->getnome_contato());$ps++;
      $rs->bindParam($ps, $e->getemail());$ps++;
      $rs->bindParam($ps, $e->getsenha());$ps++;
      $rs->bindParam($ps, $e->gettelefone());$ps++;
      $rs->bindParam($ps, $e->getnivel_seguranca());$ps++;
      $rs->bindParam($ps, $e->getnome_pdf());$ps++;
      $rs->bindParam($ps, $e->getidinstituicao());$ps++;

      return Engine::executar($rs);

   }
 public function excluir($e)
   {
      $sql = 'delete from instituicao where idinstituicao=? ';      $rs->bindParam(1, $e->getidinstituicao());
      $rs = Engine::preparar($sql);     
      return Engine::executar($rs);
   }
}
?>
