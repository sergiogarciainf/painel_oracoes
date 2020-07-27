<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FromTeste
 *
 * @author User
 */
include_once '../pdo_engine/uEngine.php';

class FromTeste {

    public $query;
    public $resultado;

    //put your code here
    public function iniciar() {
        if (isset($_REQUEST['exec'])) {
            $this->query = $_REQUEST['query'];
            $sql = $this->query;
            $rs = Engine::preparar($sql);
            if (Engine::executar($rs)) {
                $ct = 0;
                while ($row = $rs->fetch(PDO::FETCH_OBJ)) {
                    $ct++;
                }
                $this->resultado .= '/*Quantidade de consultas ' . $ct . '*/' . $this->gerarScript($sql);
            }
        }
    }

    private function gerarScript($sql) {
        $txt = "";
        $txt .= '            $rs = Engine::preparar(\'' . $sql . '\');';
        $txt .= '            if (Engine::executar($rs)) {';
        $txt .= '                $ct = 0;';
        $txt .= '                while ($row = $rs->fetch(PDO::FETCH_OBJ)) {';
        $txt .= '                    $ct++;';
        $txt .= '                }';
        $txt .= '';
        return $txt;
    }

}

$f = new FromTeste();
$f->iniciar();
?><HTML>
    <HEAD>
        <META NAME="GENERATOR" CONTENT="Adobe PageMill 3.0 Win">
        <TITLE>Untitled Document</TITLE>
    </HEAD>
    <BODY>

        <FORM ACTION="FromTeste.php" ENCTYPE="x-www-form-urlencoded" 
              METHOD="POST">
            <P ALIGN=CENTER><TABLE WIDTH="450" BORDER="1" CELLSPACING="2"
                                   CELLPADDING="0">
                <TR>
                    <TD WIDTH="100%">
                        &nbsp;<TEXTAREA NAME="query" ROWS="5" COLS="54"
                                        ><?php echo $f->query; ?></TEXTAREA></TD> 
                </TR>
                <TR>
                    <TD WIDTH="100%">
                        &nbsp;<INPUT NAME="exec" TYPE="submit" VALUE="Testar"></TD> 
                </TR>
                <TR>
                    <TD WIDTH="100%">
                        <!--SELECTION--><TEXTAREA NAME="resultado" ROWS="5" COLS="54"
                                                  ><?php echo $f->resultado; ?></TEXTAREA><!--/SELECTION--></TD> 
                </TR>
            </TABLE></FORM>

    </BODY>
</HTML>
<?php
