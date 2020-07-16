<?php

class Lista {

    function view($titulo, $lista, $pgLink, $tamanho) {
        $linha = '';
        $linha .= '<P ALIGN=CENTER><TABLE style="text-align: left; width: 603px; height: 60px; margin-left: auto; margin-right: auto;"';
        $linha .= 'BORDER="0" CELLPADDING="2" CELLSPACING="2" WIDTH="' . $tamanho . '">';
        $linha .= '  <tbody> ';
        $linha .= '  <TR ALIGN="CENTER">';
        $linha .= '    <TD style="vertical-align: top; background-color: rgb(51, 102, 255);"';
        $linha .= '    ALIGN="CENTER" BGCOLOR="#0000ff">';
        $linha .= '    <FONT COLOR="#ffff00" SIZE="+2">' . $titulo . '</FONT></TD> ';
        $linha .= '  </TR>';
        $colorir = true;
        foreach ($lista as $key => $value) {
            if ($colorir == false) {
                $linha .= '  <TR ALIGN="CENTER">';
                $linha .= '    <TD style="vertical-align: top;' .
                        '" ALIGN="CENTER" BGCOLOR="#cccccc">' .
                        '<A HREF="' . $pgLink . '?id=' . $key . '">' . $value . '</A></TD> ';
                $linha .= '  </TR>';
            } else {
                $linha .= '  <TR ALIGN="CENTER">';
                $linha .= '    <TD style="vertical-align: top; background-color: ' .
                        'rgb(234, 234, 234);"ALIGN="CENTER">' .
                        '<A HREF="' . $pgLink . '?id=' . $key . '">' . $value . '</A></TD> ';
                $linha .= '  </TR>';
            }
            $colorir = !$colorir;
        }
        $linha .= '</tbody>';
        $linha .= '</TABLE>';
        return $linha;
    }

}
