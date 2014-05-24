<?php 

session_start();
if(!isset($_SESSION['email'])){
	header("Location:login.php");
}

include("../_php/settings.php");
include("../_php/mysql.php");
include("./_php/RendererGNJ.php");

$Page = new RendererGNJ("./_tpl/regulamin.tpl.php");
$Page->setInfo("Zalogowany: ".$_SESSION['name']." ".$_SESSION['surname']);

$Page->set("textMax",$ARTICLE_CHARACTERS_MAX);
$Page->set("imageMaxNr",$ARTICLE_IMAGE_MAX_NUM);
$Page->set("linksMaxNr",$ARTICLE_LINKS_MAX_NUM);

$Page->publish();
?>
