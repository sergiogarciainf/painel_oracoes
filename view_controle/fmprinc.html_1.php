<?php
require_once '../util/geral.php';
if (!isset($listaCelulas)) {
    redir('login.php');
}
$ent = $listaCelulas[0];
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
            .OBJ-1,.OBJ-1:link,.OBJ-1:visited { background-image:url('wpimages/wp13b9450f_06.png');background-repeat:no-repeat;background-position:0px 0px;text-decoration:none;display:block;position:absolute; }
            .OBJ-1:hover { background-position:0px -94px; }
            .OBJ-1:active,a:link.OBJ-1.Activated,a:link.OBJ-1.Down,a:visited.OBJ-1.Activated,a:visited.OBJ-1.Down,.OBJ-1.Activated,.OBJ-1.Down { background-position:0px -47px; }
            .OBJ-1.Disabled,a:link.OBJ-1.Disabled,a:visited.OBJ-1.Disabled,a:hover.OBJ-1.Disabled,a:active.OBJ-1.Disabled { background-position:0px -141px; }
            .OBJ-1:focus { outline-style:none; }
            button.OBJ-1 { background-color:transparent;border:none 0px;padding:0;display:inline-block;cursor:pointer; }
            button.OBJ-1:disabled { pointer-events:none; }
            .OBJ-1.Inline { display:inline-block;position:relative;line-height:normal; }
            .OBJ-1 span,.OBJ-1:link span,.OBJ-1:visited span { color:#555b60;font-family:Arial,sans-serif;font-weight:bold;text-decoration:none;text-align:center;text-transform:capitalize;font-style:normal;left:15px;top:14px;width:93px;height:20px;font-size:15px;display:block;position:absolute;cursor:pointer; }
            .OBJ-1:active span,a:link.OBJ-1.Activated span,a:link.OBJ-1.Down span,a:visited.OBJ-1.Activated span,a:visited.OBJ-1.Down span,.OBJ-1.Activated span,.OBJ-1.Down span { left:16px; }
            .OBJ-2,.OBJ-2:link,.OBJ-2:visited { background-image:url('wpimages/wp61b92a6a_06.png');background-repeat:no-repeat;background-position:0px 0px;text-decoration:none;display:block;position:absolute; }
            .OBJ-2:hover { background-position:0px -112px; }
            .OBJ-2:active,a:link.OBJ-2.Activated,a:link.OBJ-2.Down,a:visited.OBJ-2.Activated,a:visited.OBJ-2.Down,.OBJ-2.Activated,.OBJ-2.Down { background-position:0px -56px; }
            .OBJ-2:focus { outline-style:none; }
            button.OBJ-2 { background-color:transparent;border:none 0px;padding:0;display:inline-block;cursor:pointer; }
            button.OBJ-2:disabled { pointer-events:none; }
            .OBJ-2.Inline { display:inline-block;position:relative;line-height:normal; }
            .OBJ-2 span,.OBJ-2:link span,.OBJ-2:visited span { color:#ffffff;font-family:Arial,sans-serif;font-weight:bold;text-decoration:none;text-align:center;text-transform:none;font-style:normal;left:6px;top:16px;width:225px;height:25px;font-size:19px;display:block;position:absolute;cursor:pointer; }
            .OBJ-2.Disabled span,a:link.OBJ-2.Disabled span,a:visited.OBJ-2.Disabled span,a:hover.OBJ-2.Disabled span,a:active.OBJ-2.Disabled span { top:15px; }
            .OBJ-3 { border-collapse:collapse;border:none; }
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
            $(document).ready(function () {
                $("a.ActiveButton").bind({mousedown: function () {
                        if ($(this).attr('disabled') === undefined)
                            $(this).addClass('Activated');
                    }, mouseleave: function () {
                        if ($(this).attr('disabled') === undefined)
                            $(this).removeClass('Activated');
                    }, mouseup: function () {
                        if ($(this).attr('disabled') === undefined)
                            $(this).removeClass('Activated');
                    }});
            });
        </script>
    </head>
    <body style="height:1000px;background:#ffffff;">
        <div id="divMain" style="background:transparent;margin-left:auto;margin-right:auto;position:relative;width:960px;height:1000px;">
            <img alt="" src="wpimages/wp1e0c38a6_05_06.jpg" style="position:absolute;left:403px;top:16px;width:153px;height:126px;">
            <a href="fmprinc.php" target="_blank" id="btn_4" class="OBJ-1 ActiveButton" style="position:absolute;left:183px;top:144px;width:124px;height:47px;">
                <span>Principal</span>
            </a>
            <a href="fmcelula.php?op=i&amp;id=-1" target="_blank" id="btn_1" class="OBJ-2 ActiveButton" style="position:absolute;left:361px;top:240px;width:239px;height:56px;">
                <span>Adicionar&nbsp;Célula</span>
            </a>
            <table border="1" class="OBJ-3" style="position:absolute;left:30px;top:346px;width:897px;height:110px;">
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
                <?php
                if ($listaCelulas != null) {
                    foreach ($listaCelulas as $ent) {
                        ?>

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
                                <p class="Table-Body P-2"><a href="fmcelula.php?id=<?php echo $ent->getidcelula(); ?>&amp;op=a" target="_blank" class="C-3">Alterar</a></p>

                            </td>
                            <td class="TC-3">
                                <p class="Table-Body P-2"><a href="fmcelula.php?id=<?php echo $ent->getidcelula(); ?>&amp;op=e" target="_blank" class="C-3">Excluir</a></p>

                            </td>
                        </tr>
                        <?php
                    }
                }
                ?>        

            </table>
        </div>
    </body>
</html>
