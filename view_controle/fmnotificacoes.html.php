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
      .OBJ-1,.OBJ-1:link,.OBJ-1:visited { background-image:url('wpimages/wpecb00a34_06.png');background-repeat:no-repeat;background-position:0px 0px;text-decoration:none;display:block;position:absolute; }
      .OBJ-1:hover { background-position:0px -66px; }
      .OBJ-1:active,a:link.OBJ-1.Activated,a:link.OBJ-1.Down,a:visited.OBJ-1.Activated,a:visited.OBJ-1.Down,.OBJ-1.Activated,.OBJ-1.Down { background-position:0px -33px; }
      .OBJ-1:focus { outline-style:none; }
      button.OBJ-1 { background-color:transparent;border:none 0px;padding:0;display:inline-block;cursor:pointer; }
      button.OBJ-1:disabled { pointer-events:none; }
      .OBJ-1.Inline { display:inline-block;position:relative;line-height:normal; }
      .OBJ-1 span,.OBJ-1:link span,.OBJ-1:visited span { color:#595959;font-family:"Trebuchet MS",sans-serif;font-weight:normal;text-decoration:none;text-align:center;text-transform:capitalize;font-style:normal;left:3px;top:9px;width:141px;height:17px;font-size:11px;display:block;position:absolute;cursor:pointer; }
      .OBJ-1:active span,a:link.OBJ-1.Activated span,a:link.OBJ-1.Down span,a:visited.OBJ-1.Activated span,a:visited.OBJ-1.Down span,.OBJ-1.Activated span,.OBJ-1.Down span { top:10px; }
      .OBJ-1.Disabled span,a:link.OBJ-1.Disabled span,a:visited.OBJ-1.Disabled span,a:hover.OBJ-1.Disabled span,a:active.OBJ-1.Disabled span { color:#cccccc;width:142px;height:18px;font-size:13px; }
      .OBJ-2,.OBJ-2:link,.OBJ-2:visited { background-image:url('wpimages/wp128c9664_06.png');background-repeat:no-repeat;background-position:0px 0px;text-decoration:none;display:block;position:absolute; }
      .OBJ-2:hover { background-position:0px -66px; }
      .OBJ-2:active,a:link.OBJ-2.Activated,a:link.OBJ-2.Down,a:visited.OBJ-2.Activated,a:visited.OBJ-2.Down,.OBJ-2.Activated,.OBJ-2.Down { background-position:0px -33px; }
      .OBJ-2:focus { outline-style:none; }
      button.OBJ-2 { background-color:transparent;border:none 0px;padding:0;display:inline-block;cursor:pointer; }
      button.OBJ-2:disabled { pointer-events:none; }
      .OBJ-2.Inline { display:inline-block;position:relative;line-height:normal; }
      .OBJ-2 span,.OBJ-2:link span,.OBJ-2:visited span { color:#595959;font-family:"Trebuchet MS",sans-serif;font-weight:normal;text-decoration:none;text-align:center;text-transform:capitalize;font-style:normal;left:3px;top:9px;width:141px;height:17px;font-size:11px;display:block;position:absolute;cursor:pointer; }
      .OBJ-2.Disabled span,a:link.OBJ-2.Disabled span,a:visited.OBJ-2.Disabled span,a:hover.OBJ-2.Disabled span,a:active.OBJ-2.Disabled span { color:#cccccc;height:18px;font-size:13px; }
      .OBJ-3,.OBJ-3:link,.OBJ-3:visited { background-image:url('wpimages/wp33130128_06.png');background-repeat:no-repeat;background-position:0px 0px;text-decoration:none;display:block;position:absolute; }
      .OBJ-3:hover { background-position:0px -66px; }
      .OBJ-3:active,a:link.OBJ-3.Activated,a:link.OBJ-3.Down,a:visited.OBJ-3.Activated,a:visited.OBJ-3.Down,.OBJ-3.Activated,.OBJ-3.Down { background-position:0px -33px; }
      .OBJ-3:focus { outline-style:none; }
      button.OBJ-3 { background-color:transparent;border:none 0px;padding:0;display:inline-block;cursor:pointer; }
      button.OBJ-3:disabled { pointer-events:none; }
      .OBJ-3.Inline { display:inline-block;position:relative;line-height:normal; }
      .OBJ-3 span,.OBJ-3:link span,.OBJ-3:visited span { color:#595959;font-family:"Trebuchet MS",sans-serif;font-weight:normal;text-decoration:none;text-align:center;text-transform:capitalize;font-style:normal;left:3px;top:9px;width:141px;height:17px;font-size:11px;display:block;position:absolute;cursor:pointer; }
      .OBJ-3.Disabled span,a:link.OBJ-3.Disabled span,a:visited.OBJ-3.Disabled span,a:hover.OBJ-3.Disabled span,a:active.OBJ-3.Disabled span { color:#cccccc;top:8px;width:142px;height:18px;font-size:13px; }
      .OBJ-4,.OBJ-4:link,.OBJ-4:visited { background-image:url('wpimages/wpd707cdef_06.png');background-repeat:no-repeat;background-position:0px 0px;text-decoration:none;display:block;position:absolute; }
      .OBJ-4:hover { background-position:0px -112px; }
      .OBJ-4:active,a:link.OBJ-4.Activated,a:link.OBJ-4.Down,a:visited.OBJ-4.Activated,a:visited.OBJ-4.Down,.OBJ-4.Activated,.OBJ-4.Down { background-position:0px -56px; }
      .OBJ-4:focus { outline-style:none; }
      button.OBJ-4 { background-color:transparent;border:none 0px;padding:0;display:inline-block;cursor:pointer; }
      button.OBJ-4:disabled { pointer-events:none; }
      .OBJ-4.Inline { display:inline-block;position:relative;line-height:normal; }
      .OBJ-4 span,.OBJ-4:link span,.OBJ-4:visited span { color:#ffffff;font-family:Arial,sans-serif;font-weight:bold;text-decoration:none;text-align:center;text-transform:none;font-style:normal;left:6px;top:16px;width:161px;height:25px;font-size:19px;display:block;position:absolute;cursor:pointer; }
      .OBJ-4.Disabled span,a:link.OBJ-4.Disabled span,a:visited.OBJ-4.Disabled span,a:hover.OBJ-4.Disabled span,a:active.OBJ-4.Disabled span { top:15px; }
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
        <a href="login.html.php" id="nav_2_B1" class="OBJ-1 ActiveButton" style="display:block;position:absolute;left:8px;top:23px;width:146px;height:33px;">
          <span>Login</span>
        </a>
        <a href="fmprinc.html.php" id="nav_2_B2" class="OBJ-2 ActiveButton" style="display:block;position:absolute;left:154px;top:23px;width:146px;height:33px;">
          <span>Principal</span>
        </a>
        <a href="fmnotificacoes.html.php" id="nav_2_B3" class="OBJ-2 ActiveButton Down" style="display:block;position:absolute;left:300px;top:23px;width:146px;height:33px;">
          <span>Notificações</span>
        </a>
        <a href="fmdetalhesnotific.html.php" id="nav_2_B4" class="OBJ-3 ActiveButton" style="display:block;position:absolute;left:446px;top:23px;width:146px;height:33px;">
          <span>Detalhes&nbsp;Notificação</span>
        </a>
      </div>
      <div style="position:absolute;left:185px;top:271px;width:642px;height:156px;">
        <?php
        $l->view();
	?>
      </div>
      <a href="FmDetalhesNotific.php?op=i" target="_blank" id="btn_2" class="OBJ-4 ActiveButton" style="position:absolute;left:402px;top:207px;width:174px;height:56px;">
        <span>Novo</span>
      </a>
      <table id="nav_2_B3M" data-opacity="90" data-fade="0" data-minwidth="80" data-hOffset="0" data-vOffset="10" data-vAlignment="3" data-xPad="0" data-yPad="10" data-xOffset="0" data-yOffset="0" data-arrow="0" style="visibility:hidden;">
        <tr>
          <td>
            <a title="" href="fmdistribuir.html.php">Distribuir Notificações</a>
          </td>
        </tr>
      </table>
    </div>
    <script type="text/javascript" src="wpscripts/jsMenu.js"></script>
    <script type="text/javascript">
      wpmenustack.setRollovers([['nav_2_B1',''],['nav_2_B2',''],['nav_2_B3','nav_2_B3M',{"m_vertical":true}],['nav_2_B4','']]);
      wpmenustack.setMenus(['nav_2_B3M'],{"m_opacity":90,"m_minwidth":80,"m_hOffset":0,"m_vOffset":10,"m_vAlignment":3,"m_xPad":0,"m_yPad":10,"m_xOffset":0,"m_yOffset":0,"m_arrow":false,"m_menuStyle":{"border":"0px none"},"m_rowStyle":{"border":"0px none"},"m_linkNormalStyle":{"fontSize":"10px","fontFamily":"\"Trebuchet MS\",sans-serif","textAlign":"center","color":"#727272","backgroundColor":"#f4f4f4","fontWeight":"normal","textDecoration":"none","fontStyle":"normal"}});
    </script>
  </body>
</html>
