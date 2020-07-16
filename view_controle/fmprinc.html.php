
<?php 
require_once '../util/geral.php';
$sessao="instituicao";
$pglogin="login.php";
$paginaControle="fmprinc.php";
if (!isset($comecarAqui)) {
    redir($paginaControle);   
}
?>
<!--Page Preamble-->
<!--Master A Preamble-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Principal</title>
    <meta name="generator" content="Serif WebPlus X7">
    <meta name="viewport" content="width=960">
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
      .OBJ-4,.OBJ-4:link,.OBJ-4:visited { background-image:url('wpimages/wp61b92a6a_06.png');background-repeat:no-repeat;background-position:0px 0px;text-decoration:none;display:block;position:absolute; }
      .OBJ-4:hover { background-position:0px -112px; }
      .OBJ-4:active,a:link.OBJ-4.Activated,a:link.OBJ-4.Down,a:visited.OBJ-4.Activated,a:visited.OBJ-4.Down,.OBJ-4.Activated,.OBJ-4.Down { background-position:0px -56px; }
      .OBJ-4:focus { outline-style:none; }
      button.OBJ-4 { background-color:transparent;border:none 0px;padding:0;display:inline-block;cursor:pointer; }
      button.OBJ-4:disabled { pointer-events:none; }
      .OBJ-4.Inline { display:inline-block;position:relative;line-height:normal; }
      .OBJ-4 span,.OBJ-4:link span,.OBJ-4:visited span { color:#ffffff;font-family:Arial,sans-serif;font-weight:bold;text-decoration:none;text-align:center;text-transform:none;font-style:normal;left:6px;top:16px;width:225px;height:25px;font-size:19px;display:block;position:absolute;cursor:pointer; }
      .OBJ-4.Disabled span,a:link.OBJ-4.Disabled span,a:visited.OBJ-4.Disabled span,a:hover.OBJ-4.Disabled span,a:active.OBJ-4.Disabled span { top:15px; }
      .OBJ-5 { border-collapse:collapse;border:none; }
      .TC-1 { vertical-align:middle;background-color:#f2f5e8;padding:1px;border:none; }
      .P-1 { text-align:center;line-height:1px;font-family:"Arial", sans-serif;font-style:normal;font-weight:700;color:#000000;background-color:transparent;font-variant:normal;font-size:16.0px;vertical-align:0; }
      .C-1 { line-height:20.00px;font-family:"Arial", sans-serif;font-style:normal;font-weight:700;color:#000000;background-color:transparent;text-decoration:none;font-variant:normal;font-size:16.0px;vertical-align:0; }
      .TC-2 { vertical-align:middle;background-color:#fcfdfa;padding:1px;border:none; }
      .P-2 { text-align:center;line-height:1px;font-family:"Arial", sans-serif;font-style:normal;font-weight:normal;color:#000000;background-color:transparent;font-variant:normal;font-size:19.0px;vertical-align:0; }
      .C-2 { line-height:23.00px;font-family:"Arial", sans-serif;font-style:normal;font-weight:normal;color:#000000;background-color:transparent;text-decoration:none;font-variant:normal;font-size:18.7px;vertical-align:0; }
      .TC-3 { vertical-align:middle;background-color:#fcfdfa;padding:1px 4px;border:none; }
      .P-3 { text-align:center;line-height:1px;font-family:"Verdana", sans-serif;font-style:normal;font-weight:normal;color:#000000;background-color:transparent;font-variant:normal;font-size:19.0px;vertical-align:0; }
      .C-3 { line-height:23.00px;font-family:"Verdana", sans-serif;font-style:normal;font-weight:normal;color:#000000;background-color:transparent;text-decoration:none;font-variant:normal;font-size:18.7px;vertical-align:0; }
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
        <a href="fmprinc.html.php" id="nav_2_B2" class="OBJ-2 ActiveButton Down" style="display:block;position:absolute;left:255px;top:23px;width:89px;height:33px;">
          <span>Principal</span>
        </a>
        <a href="fmnotificacoes.html.php" id="nav_2_B3" class="OBJ-3 ActiveButton" style="display:block;position:absolute;left:344px;top:23px;width:89px;height:33px;">
          <span>Notificações</span>
        </a>
      </div>
      <a href="fmcelula.php?op=i&amp;id=-1" target="_blank" id="btn_1" class="OBJ-4 ActiveButton" style="position:absolute;left:361px;top:240px;width:239px;height:56px;">
        <span>Adicionar&nbsp;Célula</span>
      </a>
      <table border="1" class="OBJ-5" style="position:absolute;left:30px;top:346px;width:897px;height:110px;">
        <col style="width:346px;">
        <col style="width:216px;">
        <col style="width:191px;">
        <col style="width:144px;">
        <tr style="height:35px;">
          <td class="TC-1">
            <p class="Table-Body P-1"><span class="C-1">Célula</span></p>
          </td>
          <td class="TC-1">
            <p class="Table-Body P-1"><span class="C-1">Bairro</span></p>
          </td>
          <td class="TC-1">
            <p class="Table-Body"><span class="C-1"><br></span></p>
          </td>
          <td class="TC-1">
            <p class="Table-Body"><span class="C-1"><br></span></p>
          </td>
        </tr>
        <tr style="height:74px;">
          <td class="TC-2">
            <p class="Table-Body P-2"><span class="C-2"><span style="vertical-align:middle;margin:6px;width:301px;height:41px;">
                  <?php echo $ent->getnome(); ?>
                </span></span></p>
          </td>
          <td class="TC-2">
            <p class="Table-Body P-2"><span class="C-2"><span style="vertical-align:middle;margin:6px;width:183px;height:47px;">
                  <?php echo $ent->getbairro(); ?>
                </span></span></p>
          </td>
          <td class="TC-2">
            <p class="Table-Body P-2"><span class="C-2"><span style="vertical-align:top;margin:7px;width:37px;height:19px;">
                  <a href="fmcelula.php?id=<?php echo $ent->getidcelula();?>&amp;op=a" target="_blank" class="C-3">Alterar</a>
                </span></span></p>
          </td>
          <td class="TC-3">
            <p class="Table-Body P-3"><span class="C-3"><span style="vertical-align:top;margin:7px;width:37px;height:19px;">
                  <a href="fmcelula.php?id=<?php echo $ent->getidcelula();?>&amp;op=e" target="_blank" class="C-3">Excluir</a>
                </span></span></p>
          </td>
        </tr>
      </table>
    </div>
  </body>
</html>
