<?php 

session_start();
if(!isset($_SESSION['email'])){
	header("Location:login.php");
}

include("../_php/mysql.php");
include("./_php/RendererGNJ.php");
include("../_php/settings.php");

$authorid = $_SESSION['userid'];
$articleId = $_REQUEST['id']; 

if($_SESSION['usertype'] == "admin")
{
	$sql="SELECT * FROM $ARTICLE_TABLE_NAME WHERE (status='edit' or status='adminedit' ) and id='$articleId'";
}
else
{
	$sql="SELECT * FROM $ARTICLE_TABLE_NAME WHERE authorid='$authorid' and status='edit' and id='$articleId'";
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
	$Page->set("articleid",$articleid);
	
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
