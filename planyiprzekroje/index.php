<?php 

$GL_DIR = '..';

include("../_php/Renderer.php");
include('../_php/settings.php');
include('../_php/mysql.php');
include('../_php/misc.php');
include('../_php/components.php');

$Content = new Renderer("../_tpl/rejony.tpl.php");

$Content->set("dots","..");

$Page = new Renderer("../_tpl/gnj.tpl.php");
$Page->set("Content",$Content->parse());
$Page->set("dots","..");
$Page->set("mysqli",$mysqli);

$Page->publish();

?>
