<?php

session_start();
session_destroy();

include("./_php/RendererGNJ.php");

$LoginPage = new RendererGNJ("./_tpl/logout.tpl.php",false);

$LoginPage->setInfo("Wylogowano pomyślnie");
$LoginPage->publish();

?>