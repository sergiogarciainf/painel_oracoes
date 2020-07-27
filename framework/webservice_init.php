Geral
=======================================
<?php
class UtilDatas
{
   public static function data2MySql($dt)
   {
      if( ! $dt)
         return null;
      $dia = substr($dt, 0, 2);
      $mes = substr($dt, 3, 2);
      $ano = substr($dt, 6, 4);
      return $ano . '-' . $mes . '-' . $dia;

   }
   public static function mySql2Data($dt)
   {
      if( ! $dt)
         return null;
      $ano = substr($dt, 0, 4);
      $mes = substr($dt, 5, 2);
      $dia = substr($dt, 8, 2);
      return "$dia/$mes/$ano";

   }
}

function iif($cond, $verdade, $falso)
{
   if($cond)
      return $verdade;
   return $falso;

}
function gerarLinhasLista($arr, $var_posicao_lista,$numeroLinhas)
{
   $linha = array();
   for($i = 0; $i < $numeroLinhas; $i++)
   {
      $l[$i] = "";
      if(isset($arr[$var_posicao_lista]))
      {
         $l[$i] = $arr[$var_posicao_lista];
      }
   }
   return $l;
}

function salvarTxt($nmArquivo, $texto)
{
   $arquivo = fopen($nmArquivo, 'w');
   if($arquivo == false)
      die('Não foi possível criar o arquivo.');
   fwrite($arquivo, $texto);
   fclose($arquivo);
}
?>
webservice_init
=======================================
<?php
function __output_header__($__success = true, $__message, $_dados = array())
{
   header('Content-Type: application/json; charset=utf-8');
   echo json_encode(
   array(
         'success'=>$__success,
         'mensage'=>$__message,
         'dados'=>$_dados
         )
   );
   # por ser a ultima funcao, podemos matar o processo aqui.
   exit;
}
?>