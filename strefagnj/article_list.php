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

$authorid = $_SESSION['userid'];

$sql="SELECT * FROM $tbl_name WHERE authorid='$authorid' and status='edit'";
$result_edit=$mysqli->query($sql);

$sql="SELECT * FROM $tbl_name WHERE authorid='$authorid' and status='review'";
$result_review=$mysqli->query($sql);

$sql="SELECT * FROM $tbl_name WHERE authorid='$authorid' and status='reviewed'";
$result_reviewed=$mysqli->query($sql);

/* prepare and publish article */
$Page = new RendererGNJ("./_tpl/articlelist.tpl.php");
$Page->setInfo("Zalogowany: ".$_SESSION['name']." ".$_SESSION['surname']);
$Page->set("articles_edit",$result_edit);
$Page->set("articles_reviewed",$result_reviewed);
$Page->set("articles_review",$result_review);

$Page->publish();

?>