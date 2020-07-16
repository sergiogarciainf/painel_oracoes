<?php
require_once("../entidades/uEntMembro.php");
require_once("../pdo_engine/uEngine.php");
class DaoMembro
{
   function listar($complSql, $parametros)
   {
      $sql = "SELECT * FROM membro $complSql";
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
            $ent = new EntMembro();
            $ent->setidmembro($row->idmembro);
            $ent->setidcelula($row->idcelula);
            $ent->setidfuncao_celula($row->idfuncao_celula);
            $ent->setidstatus_membro($row->idstatus_membro);
            $ent->setnome($row->nome);
            $ent->setcelular($row->celular);
            $ent->sete_mail($row->e_mail);
            $ent->setsenha($row->senha);
            $ent->setisalterar_senha($row->isalterar_senha);
            $retorno[] = $ent;
         }
      }
      return $retorno;
   }

   public function incluir($e)
   {
      $sql = 'INSERT INTO membro (';
      $sql .=  'idcelula,';
      $sql .=  'idfuncao_celula,';
      $sql .=  'idstatus_membro,';
      $sql .=  'nome,';
      $sql .=  'celular,';
      $sql .=  'e_mail,';
      $sql .=  'senha,';
      $sql .=  'isalterar_senha,';
      $sql=substr($sql,0,strlen($sql)-1);
      $sql.=') VALUES (';
      $sql.="?," ;//idcelula
      $sql.="?," ;//idfuncao_celula
      $sql.="?," ;//idstatus_membro
      $sql.="?," ;//nome
      $sql.="?," ;//celular
      $sql.="?," ;//e_mail
      $sql.="?," ;//senha
      $sql.="?," ;//isalterar_senha
      $sql=substr($sql,0,strlen($sql)-1);
      $sql.=")";

      $rs=Engine::preparar($sql);
      $ps=1;
      $rs->bindParam($ps, $e->getidcelula());$ps++;
      $rs->bindParam($ps, $e->getidfuncao_celula());$ps++;
      $rs->bindParam($ps, $e->getidstatus_membro());$ps++;
      $rs->bindParam($ps, $e->getnome());$ps++;
      $rs->bindParam($ps, $e->getcelular());$ps++;
      $rs->bindParam($ps, $e->gete_mail());$ps++;
      $rs->bindParam($ps, $e->getsenha());$ps++;
      $rs->bindParam($ps, $e->getisalterar_senha());$ps++;
      return Engine::executar($rs);

   }
   public function buscarId($e)
   {
      return $this->buscarPrimeiro('idmembro', $e->getidmembro(),$e);
   }
   public function buscarPrimeiro($campo,  $valorAEncontrar,$e)
   {
      $sql = 'select * from membro where ' . $campo . '=?';

      $rs = Engine::preparar($sql);

      $rs->bindParam(1, $valorAEncontrar);
      if(Engine::executar($rs))
      {
         while($row = $rs->fetch(PDO::FETCH_OBJ))
         {
            $e->setidmembro($row->idmembro);
            $e->setidcelula($row->idcelula);
            $e->setidfuncao_celula($row->idfuncao_celula);
            $e->setidstatus_membro($row->idstatus_membro);
            $e->setnome($row->nome);
            $e->setcelular($row->celular);
            $e->sete_mail($row->e_mail);
            $e->setsenha($row->senha);
            $e->setisalterar_senha($row->isalterar_senha);
            return true;
		
         }
      }
      return false;
   }
   public function atualizar($e)
   {
      $sql = 'update membro set ';
      $sql .= 'idcelula=?, ';
      $sql .= 'idfuncao_celula=?, ';
      $sql .= 'idstatus_membro=?, ';
      $sql .= 'nome=?, ';
      $sql .= 'celular=?, ';
      $sql .= 'e_mail=?, ';
      $sql .= 'senha=?, ';
      $sql .= 'isalterar_senha=?, ';
      $sql=substr($sql,0,strlen($sql)-2);
      $sql .= ' where idmembro=? ';
      $rs = Engine::preparar($sql);
      $ps=1;
      $rs->bindParam($ps, $e->getidcelula());$ps++;
      $rs->bindParam($ps, $e->getidfuncao_celula());$ps++;
      $rs->bindParam($ps, $e->getidstatus_membro());$ps++;
      $rs->bindParam($ps, $e->getnome());$ps++;
      $rs->bindParam($ps, $e->getcelular());$ps++;
      $rs->bindParam($ps, $e->gete_mail());$ps++;
      $rs->bindParam($ps, $e->getsenha());$ps++;
      $rs->bindParam($ps, $e->getisalterar_senha());$ps++;
      $rs->bindParam($ps, $e->getidmembro());$ps++;

      return Engine::executar($rs);

   }
 public function excluir($e)
   {
      $sql = 'delete from membro where idmembro=? ';      $rs->bindParam(1, $e->getidmembro());
      $rs = Engine::preparar($sql);     
      return Engine::executar($rs);
   }
}
?>
