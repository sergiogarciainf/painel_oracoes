﻿<!--Page Preamble-->
<?php
require_once '../util/geral.php';
require_once("../framework/Compoenentes.php");
$sessao="instituicao";
$pglogin="login.php";
$paginaControle="fmnotificacoes.php";
if (!isset($comecarAqui)) {
    redir($paginaControle);   
}
?>

<!--Master A Preamble-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Notificações</title>
    <meta name="generator" content="Serif WebPlus X7">
    <meta name="viewport" content="width=960">
    <!--Master A Head-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="wpscripts/wpstyles.css">
    <style type="text/css">
      .OBJ-1,.OBJ-1:link,.OBJ-1:visited { background-image:url('wpimages/wp4f833551_06.png');background-repeat:no-repeat;background-position:0px 0px;text-decoration:none;display:block;position:absolute; }
      .OBJ-1:hover { background-position:0px -66px; }
      .OBJ-1:active,a:link.OBJ-1.Activated,a:link.OBJ-1.Down,a:visited.OBJ-1.Activated,a:visited.OBJ-1.Down,.OBJ-1.Activated,.OBJ-1.Down { background-position:0px -33px; }
      .OBJ-1:focus { outline-style:none; }
      button.OBJ-1 { background-color:transparent;border:none 0px;padding:0;display:inline-block;cursor:pointer; }
      button.OBJ-1:disabled { pointer-events:none; }
      .OBJ-1.Inline { display:inline-block;position:relative;line-height:normal; }
      .OBJ-1 span,.OBJ-1:link span,.OBJ-1:visited span { color:#595959;font-family:"Trebuchet MS",sans-serif;font-weight:normal;text-decoration:none;text-align:center;text-transform:capitalize;font-style:normal;left:3px;top:9px;width:84px;height:17px;font-size:11px;display:block;position:absolute;cursor:pointer; }
      .OBJ-1:active span,a:link.OBJ-1.Activated span,a:link.OBJ-1.Down span,a:visited.OBJ-1.Activated span,a:visited.OBJ-1.Down span,.OBJ-1.Activated span,.OBJ-1.Down span { top:10px; }
      .OBJ-1.Disabled span,a:link.OBJ-1.Disabled span,a:visited.OBJ-1.Disabled span,a:hover.OBJ-1.Disabled span,a:active.OBJ-1.Disabled span { color:#cccccc;width:85px;height:18px;font-size:13px; }
      .OBJ-2,.OBJ-2:link,.OBJ-2:visited { background-image:url('wpimages/wp8398c3b2_06.png');background-repeat:no-repeat;background-position:0px 0px;text-decoration:none;display:block;position:absolute; }
      .OBJ-2:hover { background-position:0px -66px; }
      .OBJ-2:active,a:link.OBJ-2.Activated,a:link.OBJ-2.Down,a:visited.OBJ-2.Activated,a:visited.OBJ-2.Down,.OBJ-2.Activated,.OBJ-2.Down { background-position:0px -33px; }
      .OBJ-2:focus { outline-style:none; }
      button.OBJ-2 { background-color:transparent;border:none 0px;padding:0;display:inline-block;cursor:pointer; }
      button.OBJ-2:disabled { pointer-events:none; }
      .OBJ-2.Inline { display:inline-block;position:relative;line-height:normal; }
      .OBJ-2 span,.OBJ-2:link span,.OBJ-2:visited span { color:#595959;font-family:"Trebuchet MS",sans-serif;font-weight:normal;text-decoration:none;text-align:center;text-transform:capitalize;font-style:normal;left:3px;top:9px;width:84px;height:17px;font-size:11px;display:block;position:absolute;cursor:pointer; }
      .OBJ-2.Disabled span,a:link.OBJ-2.Disabled span,a:visited.OBJ-2.Disabled span,a:hover.OBJ-2.Disabled span,a:active.OBJ-2.Disabled span { color:#cccccc;height:18px;font-size:13px; }
      .OBJ-3,.OBJ-3:link,.OBJ-3:visited { background-image:url('wpimages/wpaa5d13e7_06.png');background-repeat:no-repeat;background-position:0px 0px;text-decoration:none;display:block;position:absolute; }
      .OBJ-3:hover { background-position:0px -66px; }
      .OBJ-3:active,a:link.OBJ-3.Activated,a:link.OBJ-3.Down,a:visited.OBJ-3.Activated,a:visited.OBJ-3.Down,.OBJ-3.Activated,.OBJ-3.Down { background-position:0px -33px; }
      .OBJ-3:focus { outline-style:none; }
      button.OBJ-3 { background-color:transparent;border:none 0px;padding:0;display:inline-block;cursor:pointer; }
      button.OBJ-3:disabled { pointer-events:none; }
      .OBJ-3.Inline { display:inline-block;position:relative;line-height:normal; }
      .OBJ-3 span,.OBJ-3:link span,.OBJ-3:visited span { color:#595959;font-family:"Trebuchet MS",sans-serif;font-weight:normal;text-decoration:none;text-align:center;text-transform:capitalize;font-style:normal;left:3px;top:9px;width:84px;height:17px;font-size:11px;display:block;position:absolute;cursor:pointer; }
      .OBJ-3.Disabled span,a:link.OBJ-3.Disabled span,a:visited.OBJ-3.Disabled span,a:hover.OBJ-3.Disabled span,a:active.OBJ-3.Disabled span { color:#cccccc;top:8px;width:85px;height:18px;font-size:13px; }
    </style>
    <script type="text/javascript" src="wpscripts/jquery.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
      $("a.ActiveButton").bind({ mousedown:function(){if ( $(this).attr('disabled') === undefined ) $(this).addClass('Activated');}, mouseleave:function(){ if ( $(this).attr('disabled') === undefined ) $(this).removeClass('Activated');}, mouseup:function(){ if ( $(this).attr('disabled') === undefined ) $(this).removeClass('Activated');}});
      });
    </script>
  </head>
  <body style="height:1000px;background:#ffffff;">
    <div id="divMain" style="background:transparent;margin-left:auto;margin-right:auto;position:relative;width:960px;height:1000px;">
      <img alt="" src="wpimages/wp1e0c38a6_05_06.jpg" style="position:absolute;left:403px;top:16px;width:153px;height:126px;">
      <div style="position:absolute;left:173px;top:119px;width:599px;height:78px;">
        <a href="login.html.php" id="nav_2_B1" class="OBJ-1 ActiveButton" style="display:block;position:absolute;left:166px;top:23px;width:89px;height:33px;">
          <span>Login</span>
        </a>
        <a href="fmprinc.html.php" id="nav_2_B2" class="OBJ-2 ActiveButton" style="display:block;position:absolute;left:255px;top:23px;width:89px;height:33px;">
          <span>Principal</span>
        </a>
        <a href="fmnotificacoes.html.php" id="nav_2_B3" class="OBJ-3 ActiveButton Down" style="display:block;position:absolute;left:344px;top:23px;width:89px;height:33px;">
          <span>Notificações</span>
        </a>
      </div>
      <div style="position:absolute;left:173px;top:210px;width:642px;height:156px;">
        <?php
        $l->view();
	?>
      </div>
    </div>
  </body>
</html>
