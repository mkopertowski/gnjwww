<?php 

include("../_php/Renderer.php");

$LoginPage = new Renderer("./_tpl/login.tpl.php");

$LoginPage->publish();

?>