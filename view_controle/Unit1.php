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
      $daoInstituicao = new DaoInstituicao();
      $entInstituicao = new EntInstituicao();
      //$p = array();
      //$p[1] = 10;
      error_reporting(0);
      $instituicaos = $daoInstituicao->listarQuery('select * from instituicao', null);
      if(!isset($_SESSION['n']))
      {
         $n = 0;
         $_SESSION['n'] = $n;
      }
      $n = $_SESSION['n'];
      $this->Edit1->Text = $n;
      if(isset($instituicaos[$n]))
      {
         $entInstituicao = $instituicaos[$n];
         echo $entInstituicao->getidinstituicao();
         echo $entInstituicao->getdenomicacao();
      }
      $n++;
      $_SESSION['n'] = $n;

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