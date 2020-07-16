<HTML>
<HEAD>
  <META NAME="GENERATOR" CONTENT="Adobe PageMill 3.0 Win">
  <TITLE>Untitled Document</TITLE>
</HEAD>
<BODY>

<P><CENTER><IMG SRC="res/oie_transparent%20.jpg" ALIGN="BOTTOM"
BORDER="0" WIDTH="75" HEIGHT="75" NATURALSIZEFLAG="0"><!--NOEDIT-->
    <?php
    if (filter_input(INPUT_GET, 'sair'))
    {
        session_start();
        unset($_SESSION['idinstituicao']);
        header('location:login.php');
    }
    ?>
    <!--/NOEDIT--></CENTER></P>

<P><CENTER><TABLE WIDTH="623" BORDER="0" CELLSPACING="2" CELLPADDING="0">
  <TR>
    <TD WIDTH="33%">
    <P><CENTER>&nbsp;<A HREF="FmPrinc.php">Home</A></CENTER></TD>
    <TD WIDTH="33%">
    <P><CENTER>&nbsp;Gestores</CENTER></TD>
    <TD WIDTH="34%">
    <P><CENTER>&nbsp;Notifica&ccedil;&otilde;es</CENTER></TD>
    <TD WIDTH="34%">
    <P><CENTER><A HREF="topo.php?sair=true;">&nbsp;Sa&iacute;r</A></CENTER></TD>
  </TR>
</TABLE></CENTER></P>

<P><CENTER><HR></CENTER>

</BODY>
</HTML>
