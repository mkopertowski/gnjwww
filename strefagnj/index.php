<?php 

session_start();
if(!isset($_SESSION['email'])){
	header("Location:login.php");
}

include("../_php/mysql.php");
include("./_php/RendererGNJ.php");

$Page = new RendererGNJ("./_tpl/index.tpl.php");
$Page->setInfo("Zalogowany: ".$_SESSION['name']." ".$_SESSION['surname']);

if(isset($_SESSION['info'])){
	$content = "<big>".$_SESSION['info']."</big><br>";
	$Page->set("info",$content);
	unset($_SESSION['info']);
}
$Page->set("name",$_SESSION['name']);
$Page->publish();

?>