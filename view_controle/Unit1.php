<?php
require_once("rpcl/rpcl.inc.php");
//Includes
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");
require_once '../dao/uDaoInstituicao.php';
require_once '../entidades/uEntInstituicao.php';
require_once '../pdo_engine/uEngine.php';

//Class definition
class Page1 extends Page
{
   public $Button1 = null;
   public $Edit1 = null;
   function Button1Click($sender, $params)
   {
      $dataMySql = '04/03/2020';
      echo "<br>$dataMySql";
      for($i = 0; $i < 11; $i++)
      {
         echo '<br>substr($dataMySql,' . $i . ',' . $this->Edit1->Text . ')==>' . substr($dataMySql, $i, $this->Edit1->Text);

      }

   }
   public function dataMySql2Data($dataMySql)
   {
      $ano = substr($dataMySql, 0, 4);
      $mes = substr($dataMySql, 5, 2);
      $dia = substr($dataMySql, 8, 2);
      return "$dia/$mes/$ano";
   }
   public function data2dataMysql($data)
   {
      $dia = substr($dataMySql, 0, 2);
      $mes = substr($dataMySql, 3, 2);
      $ano = substr($dataMySql, 6, 4);
      return "$ano-$mes-$dia";
   }
}

global $application;

global $Page1;

//Creates the form
$Page1 = new Page1($application);

//Read from resource file
$Page1->loadResource(__FILE__);

//Shows the form
$Page1->show();

?>