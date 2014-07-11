<?php 

session_start();
if(!isset($_SESSION['email'])){
	header("Location:login.php");
}

include("../_php/mysql.php");
include("../_php/misc.php");
include("./_php/RendererGNJ.php");

$tbl_name="articles"; // Table name

$sql="SELECT * FROM $tbl_name WHERE status='ready' ORDER BY date DESC";
$result=$mysqli->query($sql);

/* prepare and publish article */
$Page = new RendererGNJ("./_tpl/article_list.tpl.php");
$Page->setInfo("Zalogowany: ".$_SESSION['name']." ".$_SESSION['surname']);
$Page->set("articles",$result);
$Page->set("mysqli",$mysqli);
$Page->set("header","Artykuły opublikowane na stronie");

$Page->publish();

?>