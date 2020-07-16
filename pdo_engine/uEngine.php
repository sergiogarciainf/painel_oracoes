<?php
class Engine
{
   public static $con;
   private static $nlinhasConsulta = 0;

   private static $erroConexao;
   private static $cnxEstatico = null;
   public static function conectar($str, $usu, $sen)
   {
      try
      {

         if(self::$cnxEstatico == null)
            self::$cnxEstatico = new PDO($str, $usu, $sen);
         self::$cnxEstatico->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         return self::$cnxEstatico;
      }catch(PDOException$e)
      {
         self::$erroConexao = $e->getMessage();
         die("Erro na conexao ");
         return null;
      }

   }
   public static function getNlinhasConsulta()
   {
      return $nlinhasConsulta;
   }

   public static function prepararEspecifico($sql, $str, $usu, $senha)
   {
      $cnx = self::conectar($str, $usu, $senha);
      try
      {
         $rs = $cnx->prepare($sql);
         return $rs;

      }
      catch(Exception$exc)
      {
         return null;
      }

   }

   public static function preparar($sql)
   {
      return self::prepararEspecifico($sql,"mysql:host=localhost;dbname=u824519109_celula", "root", "vertrigo");
      try
      {
         $rs = self::prepare($sql);
         return $rs;

      }
      catch(Exception$exc)
      {
         return null;
      }

   }
   public static function executar($rs)
   {
      if( ! $rs)
         return false;
      if($rs->execute())
      {
         self::$nlinhasConsulta = $rs->rowCount();
         return true;
      }
      else
      {
         return false;
      }
   }

}
?>
