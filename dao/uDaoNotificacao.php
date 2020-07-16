<?php
class DaoNotificacao
{
   function listar($complSql, $parametros)
   {
      $sql = "SELECT * FROM notificacao $complSql";
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
            $ent = new EntNotificacao();
            $ent->setidnotificacao($row->idnotificacao);
            $ent->setdata_inicial($row->data_inicial);
            $ent->setdescricao($row->descricao);
            $ent->setdata_final($row->data_final);
            $ent->setidinstituicao($row->idinstituicao);
            $retorno[] = $ent;
         }
      }
      return $retorno;
   }

   public function incluir($e)
   {
      $sql = 'INSERT INTO notificacao (';
      $sql .=  'data_inicial,';
      $sql .=  'descricao,';
      $sql .=  'data_final,';
      $sql .=  'idinstituicao,';
      $sql=substr($sql,0,strlen($sql)-1);
      $sql.=') VALUES (';
      $sql.="?," ;//data_inicial
      $sql.="?," ;//descricao
      $sql.="?," ;//data_final
      $sql.="?," ;//idinstituicao
      $sql=substr($sql,0,strlen($sql)-1);
      $sql.=")";

      $rs=Engine::preparar($sql);
      $ps=1;
      $rs->bindParam($ps, $e->getdata_inicial());$ps++;
      $rs->bindParam($ps, $e->getdescricao());$ps++;
      $rs->bindParam($ps, $e->getdata_final());$ps++;
      $rs->bindParam($ps, $e->getidinstituicao());$ps++;
      return Engine::executar($rs);

   }
   public function buscarId($e)
   {
      return $this->buscarPrimeiro('idnotificacao', $e->getidnotificacao(),$e);
   }
   public function buscarPrimeiro($campo,  $valorAEncontrar,$e)
   {
      $sql = 'select * from notificacao where ' . $campo . '=?';

      $rs = Engine::preparar($sql);

      $rs->bindParam(1, $valorAEncontrar);
      if(Engine::executar($rs))
      {
         while($row = $rs->fetch(PDO::FETCH_OBJ))
         {
            $e->setidnotificacao($row->idnotificacao);
            $e->setdata_inicial($row->data_inicial);
            $e->setdescricao($row->descricao);
            $e->setdata_final($row->data_final);
            $e->setidinstituicao($row->idinstituicao);
            return true;
		
         }
      }
      return false;
   }
   public function atualizar($e)
   {
      $sql = 'update notificacao set ';
      $sql .= 'data_inicial=?, ';
      $sql .= 'descricao=?, ';
      $sql .= 'data_final=?, ';
      $sql .= 'idinstituicao=?, ';
      $sql=substr($sql,0,strlen($sql)-2);
      $sql .= ' where idnotificacao=? ';
      $rs = Engine::preparar($sql);
      $ps=1;
      $rs->bindParam($ps, $e->getdata_inicial());$ps++;
      $rs->bindParam($ps, $e->getdescricao());$ps++;
      $rs->bindParam($ps, $e->getdata_final());$ps++;
      $rs->bindParam($ps, $e->getidinstituicao());$ps++;
      $rs->bindParam($ps, $e->getidnotificacao());$ps++;

      return Engine::executar($rs);

   }
 public function excluir($e)
   {
      $sql = 'delete from notificacao where idnotificacao=? ';
      $rs = Engine::preparar($sql);
      $rs->bindParam(1, $e->getidnotificacao());
      return Engine::executar($rs);
   }
}
?>
