<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Compoenentes
 *
 * @author User
 */
class Componentes {

    //put your code here
    public static function text($nome, $compl, $tam, $tamMax, $valor) {
        echo '<INPUT NAME="' . $nome . '" ' . $compl . ' TYPE="text" SIZE="' . $tam . '" MAXLENGTH="' . $tamMax . '" VALUE="' . $valor . '">';
    }

    public static function password($nome, $compl, $tam, $tamMax, $valor) {
        echo '<INPUT NAME="' . $nome . '" ' . $compl . ' TYPE="password" SIZE="' . $tam . '" MAXLENGTH="' . $tamMax . '" VALUE="' . $valor . '">';
    }

    public static function checkbox($nome, $compl, $valor, $check) {
        if ($check) {
            echo '<INPUT TYPE="checkbox" NAME="' . $nome . '" ' . $compl . ' VALUE="' . $valor . '" CHECKED="1">';
        } else {
            echo '<INPUT TYPE="checkbox" NAME="' . $nome . '" ' . $compl . ' VALUE="' . $valor . '">';
        }
    }

    public static function textarea($nome, $valor, $nlinhas, $ncolunas) {
        echo '<TEXTAREA NAME="' . $nome . '" ROWS="' . $ncolunas . '" COLS="51" >' . $valor . '</TEXTAREA>';
    }

    public static function select($nome, $lista, $chaveValor,$size, $multiplo) {
        if ($multiplo) {
            $linha = ' <SELECT MULTIPLE NAME="'.$nome.'" SIZE="'.$size.'">';
        } else {
            $linha = ' <SELECT NAME="'.$nome.'" SIZE="'.$size.'">';
        }

        foreach ($lista as $key => $value) {
            if ($key == $chaveValor) {
                $linha .= ' <OPTION VALUE="' . $key . '" SELECTED>' . $value;
            } else {
                $linha .= ' <OPTION VALUE="' . $key . '" >' . $value;
            }
        }
        $linha .= '</SELECT>';
        echo $linha;
    }

}
