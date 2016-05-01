<?php 

$GL_DIR = '.';

include("_php/Renderer.php");
include('_php/settings.php');
include('_php/mysql.php');
include('_php/misc.php');
include('_php/components.php');

$Content = new Renderer("_tpl/listaSalvattore.tpl.php");

$sqlfiltr="section!='plany i przekroje'";

$sql="SELECT * FROM $ARTICLE_TABLE_NAME WHERE status='ready' and ".$sqlfiltr." ORDER BY date DESC LIMIT ".$AKTUALNOSCI_LIMIT;
$result=$mysqli->query($sql);

$Content->set("articles",$result);
$Content->set("showFooter",false);
$Content->set("mysqli",$mysqli);
$Content->set("dots",".");

$Content->set("showbreadcrumb",false);

$Page = new Renderer("_tpl/gnj.tpl.php");
$Page->set("Content",$Content->parse());
$Page->set("dots",".");
$Page->set("mysqli",$mysqli);

$Page->publish();

?>

