<?php

/*
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

/**
 * Description of NgStatusMembro
 *
 * @author User
 */
class NgStatusMembro
{

   //put your code here
   public static function listarStatus()
   {

      require_once './pdo_engine/uEngine.php';
      $ret = null;
      $sql = 'select * from status_membro';
      $rs = Engine::preparar($sql);
      //$rs->bindParam(1, '');
      $ps = 1;
      if(Engine::executar($rs))
      {
         while($row = $rs->fetch(PDO::FETCH_OBJ))
         {
            if($ret == null)
            {
               $ret = array();
            }
            $descricao = $row->descricao;
            $ret[$ps] = $descricao;
            $ps++;
         }
      }
      return $ret;
   }
   public static function obterId($descricao)
   {
      $l = NgStatusMembro::listarStatus();
      $ps = 1;
      foreach($l as $value)
      {
         if($value == $descricao)
         {
            return $ps;
         }
         $ps++;
      }
      return 1;
   }

}
