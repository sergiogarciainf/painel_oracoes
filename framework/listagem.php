<?php

class Celula {

    private $id;
    private $conteudo;

    function __construct($id, $conteudo) {
        $this->id = $id;
        $this->conteudo = $conteudo;
    }

    public function getId() {
        return $this->id;
    }

    public function getConteudo() {
        return $this->conteudo;
    }

}

class Coluna {

    private $titulo;
    private $tamPerc;

    function __construct($titulo, $tamPerc) {
        $this->titulo = $titulo;
        $this->tamPerc = $tamPerc;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getTam() {
        return $this->tamPerc;
    }

}

class listagemBootstrap {

    private $colunas;
    private $celulas;
    private $pagina;
    private $lagura;
    private $posicao;

    public function setColunas($valor) {
        $this->colunas = $valor;
    }

    public function setCelulas($valor) {
        $this->celulas = $valor;
    }

    public function setPagina($valor) {
        $this->pagina = $valor;
    }

    public function setLargura($valor) {
        $this->lagura = $valor;
    }

    public function setPosicao($valor) {
        $this->posicao = $valor;
    }

    function view() {
        echo $this->viewReturn();
    }

    function viewReturn() {
        $htmlDetalhe = "";
        $html = "";
        foreach ($this->colunas as $value) {
            $html .= '<TH scope="col">        ' . $value->getTitulo() . '<!--SELECTION--><!--/SELECTION--></TH>';
        }
        $htmCabeca = '

  <div class="row">
    <div class="col-md-12">
<P ALIGN=CENTER>
    &nbsp;<TABLE WIDTH="' . $this->lagura . '" class="table table-hover" BORDER="0" CELLSPACING="2"
    CELLPADDING="0">
       <thead>
      <TR>
      ' . $html . '
      </TR></thead> <tbody>
';
        //Atualizando...
        foreach ($this->celulas as $vcelula) {
            $html = "";
            $n = 0;
            foreach ($this->colunas as $vcoluna) {
                $html .= '<TD>         <A HREF="' . $this->pagina . '?id=' . $vcelula[$n]->getId() . '">' . $vcelula[$n]->getConteudo() . '</A></TD>';
            }
            $htmlDetalhe .= '<TR>
        ' . $html . '
      </TR>';
            $htmRodape = '</TABLE>
</div>
  </div>
';
        }

        return $htmCabeca . $htmlDetalhe . $htmRodape;
    }

}

class Listagem {

    private $colunas;
    private $celulas;
    private $pagina;
    private $lagura;
    private $posicao;

    public function setColunas($valor) {
        $this->colunas = $valor;
    }

    public function setCelulas($valor) {
        $this->celulas = $valor;
    }

    public function setPagina($valor) {
        $this->pagina = $valor;
    }

    public function setLargura($valor) {
        $this->lagura = $valor;
    }

    public function setPosicao($valor) {
        $this->posicao = $valor;
    }

    function view() {
        ?>
        <FORM name="frm" ACTION="<?php echo $this->pagina; ?>"  METHOD="POST">
            <P ALIGN=CENTER>&nbsp;</P>
            <P ALIGN=CENTER>&nbsp;</P>

            <P ALIGN=CENTER><!--SELECTION--><!--/SELECTION-->&nbsp;</P>

            <P ALIGN=CENTER><TABLE WIDTH="<?php echo $this->lagura; ?>" BORDER="0" CELLSPACING="2"
                                   CELLPADDING="0">
                <TR>
                    <TD WIDTH="53%">
                        <P ALIGN=RIGHT>&nbsp;
                            <input type="text" value="<?php if (isset($_REQUEST['nameEncontrar'])) echo $_REQUEST['nameEncontrar']; ?>" title="" name="nameEncontrar"  style="box-sizing: border-box; vertical-align: bottom; position:relative; display: inline-block; width:236px; height:25px; background-color:#FFFFFF; border: 1px solid #A0A0A0; font-size:10pt; font-family:Arial, Helvetica, sans-serif; color:#000000; " id="edit_26be2b" >
                    </TD>
                    <TD WIDTH="27%">
                        <INPUT SRC="../res/encontrar.JPG" WIDTH="132"
                               HEIGHT="41" ALIGN="BOTTOM" BORDER="0" NATURALSIZEFLAG="0" TYPE="image"
                               NAME="encontrar">
                    </TD>
                </TR>
            </TABLE></P>

        <P ALIGN=CENTER><INPUT SRC="../res/cadastrar.JPG"
                               WIDTH="163" HEIGHT="55" ALIGN="BOTTOM" BORDER="0" NATURALSIZEFLAG="3"
                               TYPE="image" NAME="cadastrar"></P>

        <P ALIGN=CENTER><TABLE WIDTH="<?php echo $this->lagura; ?>" BORDER="0" CELLSPACING="0"
                               CELLPADDING="0">
            <TR>
                <?php
                foreach ($this->colunas as $value) {
                    echo '    <TD WIDTH="' . $value->getTam() . '%" BGCOLOR="#cccccc"><B>&nbsp;<FONT SIZE="+2">' . $value->getTitulo() . '</FONT></B></TD> ';
                }
                ?>
            </TR>
            <?php
            $colorir = false;
            foreach ($this->celulas as $vcelula) {
                echo '<TR>';
                $n = 0;
                foreach ($this->colunas as $vcoluna) {
                    if ($colorir) {
                        echo '<TD WIDTH="' . $vcoluna->getTam() . '"% BGCOLOR="#9fff9f">';
                    } else {
                        echo '<TD WIDTH="' . $vcoluna->getTam() . '%">';
                    }
                    echo '<A HREF="' . $this->pagina . '?id=' . $vcelula[$n]->getId() . '">&nbsp;<FONT SIZE="+2">' . $vcelula[$n]->getConteudo() . '</FONT></A></TD>';
                    $n++;
                }
                echo '</TR>';
                $colorir = !$colorir;
            }
            ?>

        </TABLE></P>

        <P ALIGN=CENTER><TABLE WIDTH="<?php echo $lagura; ?>" BORDER="0" CELLSPACING="2"
                               CELLPADDING="0">
            <TR>
                <TD WIDTH="50%">
                    <P ALIGN=CENTER>&nbsp;<INPUT SRC="../res/anterior.JPG"
                                                 WIDTH="162" HEIGHT="53" ALIGN="BOTTOM" BORDER="0" NATURALSIZEFLAG="3"
                                                 TYPE="image" NAME="anterior"></TD>
                <TD WIDTH="50%">
                    <P ALIGN=CENTER>&nbsp;<INPUT SRC="../res/proxima.JPG"
                                                 WIDTH="164" HEIGHT="57" ALIGN="BOTTOM" BORDER="0" NATURALSIZEFLAG="3"
                                                 TYPE="image" NAME="proxima"></TD>
            </TR>
        </TABLE></FORM>

        </BODY>
        </HTML>

        <?php
    }

}

//$colunas = array();
//$colunas[] = new Coluna('Nome', 75);
//$colunas[] = new Coluna('telefone', 25);
//$celula = array();
//$celula[0][0] = new Celula('1', 'Ana');
//$celula[0][1] = new Celula('1', '2222');
//$celula[1][0] = new Celula('2', 'Pedro');
//$celula[1][1] = new Celula('2', '3333');
//$l = new Listagem();
//        $l->setColunas($colunas);
//        $l->setCelulas($celula);
//        $l->setLargura(600);
//        $l->setPosicao($posicao);
//        $l->setPagina('fmnotificacoes.php');
//$l->view();
?>