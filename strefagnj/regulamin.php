<?php 

session_start();
if(!isset($_SESSION['email'])){
	header("Location:login.php");
}

include("../_php/mysql.php");
include("./_php/RendererGNJ.php");

$Page = new RendererGNJ("./_tpl/regulamin.tpl.php");
$Page->setInfo("Zalogowany: ".$_SESSION['name']." ".$_SESSION['surname']);

$Page->set("sectionList",$sectionList);
$Page->set("membersList",$membersList);

$Page->publish();
?>
