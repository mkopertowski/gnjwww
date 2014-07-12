<?php 

session_start();
if(!isset($_SESSION['email'])){
	header("Location:login.php");
}

include("../_php/mysql.php");
include("./_php/RendererGNJ.php");

$_SESSION['articleId'] = $_REQUEST['id'];

$tbl_name="articles"; // Table name

$authorid = $_SESSION['userid'];
$articleId = $_SESSION['articleId']; 

if($_SESSION['usertype'] == "admin")
{
	$sql="SELECT * FROM $tbl_name WHERE (status='edit' or status='adminedit' ) and id='$articleId'";
}
else
{
	$sql="SELECT * FROM $tbl_name WHERE authorid='$authorid' and status='edit' and id='$articleId'";
}
$result=$mysqli->query($sql);

if($result->num_rows == 1)
{
	$Page = new RendererGNJ("./_tpl/confirm.tpl.php");
	$Page->setInfo("Zalogowany: ".$_SESSION['name']." ".$_SESSION['surname']);

	$row = $result->fetch_assoc();
	$Page->set("title",$row['title']);
	$Page->set("question","Wysłać artykuł do zatwierdzenia?");
	$Page->set("submit_title","Wyślij");
	$Page->set("form_action","article_submitConfirmed.php");
	
	if(isset($_SESSION['info'])){
		$Page->set("info",$_SESSION['info']);
		unset($_SESSION['info']);
	}
}
else
{
	$Page = new RendererGNJ("./_tpl/info.tpl.php");
	$Page->set("info","Błąd");
}

$Page->publish();
?>
