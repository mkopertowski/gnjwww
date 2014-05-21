<?php 

session_start();
if(!isset($_SESSION['email'])){
	header("Location:login.php");
}

include("../_php/mysql.php");
include("../_php/misc.php");
include("./_php/RendererGNJ.php");

$tbl_name="articles"; // Table name

$mysqli->query("SET NAMES 'utf8'");

$sql="SELECT * FROM $tbl_name WHERE status='toreview'";
$result_review=$mysqli->query($sql);

/* prepare and publish article */
$Page = new RendererGNJ("./_tpl/article_reviewlist.tpl.php");
$Page->setInfo("Zalogowany: ".$_SESSION['name']." ".$_SESSION['surname']);
$Page->set("articles",$result_review);
$Page->set("mysqli",$mysqli);
$Page->set("header","Publikacje do zatwierdzenia");

$Page->publish();

?>