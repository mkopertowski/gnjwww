<?php 

include("./_php/RendererGNJ.php");

$LoginPage = new RendererGNJ("./_tpl/login.tpl.php",false);

$LoginPage->setInfo("Zaloguj się");
$LoginPage->publish();

?>