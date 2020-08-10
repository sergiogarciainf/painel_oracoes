<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if ($notificacaos[$var_posicao_lista]->getidnotificacao() != null) {
    $var_posicao_lista++;
    echo $notificacaos[$var_posicao_lista]->getidnotificacao();
}
?>

<?php if ($notificacaos[$var_posicao_lista]->getidnotificacao() != null) {    echo'<br>' . $notificacaos[$var_posicao_lista]->getidnotificacao();    $var_posicao_lista++;}?>


