﻿<!--Page Preamble-->
<?php
require_once '../util/geral.php';
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
      .OBJ-4 { margin:0;background:transparent url('wpimages/wp68677d89.png') no-repeat left top; }
      .OBJ-5 { background:#ffffff; }
      .OBJ-6 { border:1px solid #d7d7d7;border-radius:2px / 2px;background:#ffffff;font-family:Trebuchet MS;text-align:left;font-size:16px;color:#626262; }
      .OBJ-7 { border:1px solid #d7d7d7;border-radius:2px / 2px;background:#ffffff;font-family:Trebuchet MS;text-align:center;font-size:16px;color:#008cb6; }
      .OBJ-8 { background:#f0f0f0;font-family:Tahoma;text-align:center;font-size:16px;color:#000000; }
      .OBJ-9 { border-collapse:collapse;border:none; }
      .TC-1 { vertical-align:middle;background-color:#eaebe8;padding:1px;border:none; }
      .P-1 { text-align:center;line-height:1px;font-family:"Arial", sans-serif;font-style:normal;font-weight:700;color:#000000;background-color:transparent;font-variant:normal;font-size:16.0px;vertical-align:0; }
      .C-1 { line-height:20.00px;font-family:"Arial", sans-serif;font-style:normal;font-weight:700;color:#000000;background-color:transparent;text-decoration:none;font-variant:normal;font-size:16.0px;vertical-align:0; }
      .TC-2 { vertical-align:middle;background-color:#fafbfa;padding:1px;border:none; }
      .P-2 { text-align:center;line-height:1px;font-family:"Arial", sans-serif;font-style:normal;font-weight:normal;color:#000000;background-color:transparent;font-variant:normal;font-size:16.0px;vertical-align:0; }
      .C-2 { line-height:19.00px;font-family:"Arial", sans-serif;font-style:normal;font-weight:normal;color:#000000;background-color:transparent;text-decoration:none;font-variant:normal;font-size:16.0px;vertical-align:0; }
      .C-3 { line-height:19.00px;font-family:"Arial", sans-serif;font-style:normal;font-weight:normal;color:#000000;background-color:transparent;text-decoration:none;font-variant:normal;font-size:16.0px;vertical-align:0; }
      .TC-3 { vertical-align:middle;background-color:#f6f7f5;padding:1px;border:none; }
      .C-4 { line-height:23.00px;font-family:"Trebuchet MS", sans-serif;font-style:normal;font-weight:normal;color:#006e9c;background-color:transparent;text-decoration:none;font-variant:normal;font-size:18.0px;vertical-align:0; }
      .P-3 { text-align:center;line-height:1px;font-family:"Tahoma", sans-serif;font-style:normal;font-weight:700;color:#000000;background-color:transparent;font-variant:normal;font-size:18.0px;vertical-align:0; }
      .C-5 { line-height:22.00px;font-family:"Tahoma", sans-serif;font-style:normal;font-weight:700;color:#000000;background-color:transparent;text-decoration:none;font-variant:normal;font-size:18.0px;vertical-align:0; }
    </style>
    <script type="text/javascript" src="wpscripts/jquery.js"></script>
    <script type="text/javascript" src="wpscripts/jquery.validate.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
      $("a.ActiveButton").bind({ mousedown:function(){if ( $(this).attr('disabled') === undefined ) $(this).addClass('Activated');}, mouseleave:function(){ if ( $(this).attr('disabled') === undefined ) $(this).removeClass('Activated');}, mouseup:function(){ if ( $(this).attr('disabled') === undefined ) $(this).removeClass('Activated');}});
      $("#form_12").validate({ onkeyup: false, showErrors: function(errorMap, errorList) { if (errorList.length) alert(errorList[0].message); }, onclick: false, rules: {  }, onfocusout: false, messages: {  } });
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
      <form name="frm" id="form_12" action="fmnotificacoes.php" method="post" target="_self" class="OBJ-4" style="position:absolute;left:250px;top:191px;width:461px;height:773px;">
        <input type="hidden" name="idnotificacao" value="<?php echo $entNotificacao->getidnotificacao();?>">
        <input type="hidden" name="idinstituicao" value="<?php echo $entNotificacao->getidinstituicao();?>">
        <input type="hidden" name="posicao_lista" value="">
        <input name="resumo" class="OBJ-5" maxlength="32" value="<?php echo $entNotificacao->getresumo();?>" style="position:absolute;left:137px;top:74px;width:286px;height:22px;">
        <textarea name="descricao" class="OBJ-6" style="position:absolute;left:140px;top:141px;width:284px;height:103px;"><?php echo $entNotificacao->getdescricao();?></textarea>
        <input name="data_inicial" class="OBJ-5" maxlength="32" value="<?php echo $entNotificacao->getdata_inicial();?>" style="position:absolute;left:141px;top:288px;width:169px;height:22px;">
        <input name="data_final" class="OBJ-5" maxlength="32" value="<?php echo $entNotificacao->getdata_final();?>" style="position:absolute;left:141px;top:329px;width:169px;height:22px;">
        <input name="butn_adicionar" class="OBJ-7" type="submit" value="Adicionar" style="position:absolute;left:138px;top:374px;width:175px;height:22px;">
        <input name="butn_modificar" class="OBJ-7" type="submit" value="Modificar" style="position:absolute;left:138px;top:418px;width:175px;height:22px;">
        <input name="butn_remover" class="OBJ-7" type="submit" value="Remover" style="position:absolute;left:138px;top:462px;width:175px;height:22px;">
        <input name="butn_distribuir" class="OBJ-7" type="submit" value="Distribuir" style="position:absolute;left:138px;top:506px;width:175px;height:22px;">
        <input name="nav_p" class="OBJ-8" type="submit" value="Próximo" style="position:absolute;left:34px;top:549px;width:130px;height:40px;">
        <input name="nav_a" class="OBJ-8" type="submit" value="Anterior" style="position:absolute;left:291px;top:549px;width:130px;height:40px;">
        <!--Preamble for Table table_5-->
			<?php
			if (!isset($var_posicao_lista))
			 $var_posicao_lista=0;?>
        <table border="1" class="OBJ-9" style="position:absolute;left:35px;top:620px;width:395px;height:110px;">
          <col style="width:330px;">
          <col style="width:64px;">
          <tr style="height:42px;">
            <td colspan="2" class="TC-1">
              <p class="Table-Body P-1"><span class="C-1">Notificação</span></p>
            </td>
          </tr>
          <tr style="height:34px;">
            <td class="TC-2">
              <p class="Table-Body P-2"><span class="C-2"><br></span></p>
              <p class="Table-Body P-1"><?php echoSeExiste($notificacaos[$var_posicao_lista], $notificacaos[$var_posicao_lista]->getresumo());?></p>
            </td>
            <td class="TC-2">
              <p class="Table-Body P-2"><a href="fmnotificacoes.php?idnotificacao_lst=1" target="_blank" class="C-3">Ok</a></p>
            </td>
          </tr>
          <tr style="height:34px;">
            <td class="TC-3">
              <p class="Table-Body P-2"><span class="C-2"><br></span></p>
              <?php echoSeExiste($notificacaos[$var_posicao_lista], $notificacaos[$var_posicao_lista]->getresumo());?>
            </td>
            <td class="TC-3">
              <p class="Table-Body P-2"><a href="fmnotificacoes.php?idnotificacao_lst=2" target="_blank" class="C-3">Ok</a></p>
            </td>
          </tr>
        </table>
        <div style="position:absolute;left:20px;top:142px;width:98px;height:23px;overflow:hidden;">
          <p class="Body"><span class="C-4">Notificação</span></p>
        </div>
        <div style="position:absolute;left:20px;top:75px;width:98px;height:23px;overflow:hidden;">
          <p class="Body"><span class="C-4">Resumo</span></p>
        </div>
        <div style="position:absolute;left:20px;top:20px;width:295px;height:22px;overflow:hidden;">
          <p class="Body P-3"><span class="C-5">Notificações</span></p>
        </div>
        <div style="position:absolute;left:20px;top:286px;width:98px;height:23px;overflow:hidden;">
          <p class="Body"><span class="C-4">Data Inicial</span></p>
        </div>
        <div style="position:absolute;left:20px;top:330px;width:98px;height:23px;overflow:hidden;">
          <p class="Body"><span class="C-4">Data Final</span></p>
        </div>
      </form>
    </div>
  </body>
</html>
