<?php 

session_start();
if(!isset($_SESSION['email'])){
	header("Location:login.php");
}

include("../_php/mysql.php");
include("./_php/RendererGNJ.php");
include("../_php/settings.php");

$articleId = $_REQUEST['id']; 

if($_SESSION['usertype'] == "admin")
{
	$sql="SELECT * FROM $ARTICLE_TABLE_NAME WHERE id='$articleId'";
}

$result=$mysqli->query($sql);

if($result->num_rows == 1)
{
	$Page = new RendererGNJ("./_tpl/confirm.tpl.php");
	$Page->setInfo("Zalogowany: ".$_SESSION['name']." ".$_SESSION['surname']);

	$row = $result->fetch_assoc();
	$Page->set("title",$row['title']);
	$Page->set("question","Czy zamieścić na stronie?");
	$Page->set("submit_title","Zatwierdź");
	$Page->set("form_action","article_approveConfirmed.php");
	$Page->set("articleid",$articleId);
}
else
{
	$Page = new RendererGNJ("./_tpl/info.tpl.php");
	$Page->set("info","Błąd");
}

$Page->publish();
?>
