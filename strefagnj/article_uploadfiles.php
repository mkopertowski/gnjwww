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

if(isset($_REQUEST['del']))
{
	$fileid = $_REQUEST['fileid'];
	
	if($_SESSION['usertype'] == "admin")
	{
		$sql="DELETE FROM $FILES_TABLE_NAME WHERE id='$fileid' and articleId='$articleId'";
	}
	else
	{
		$sql="DELETE FROM $FILES_TABLE_NAME WHERE authorid='$authorid' and id='$fileid' and articleId='$articleId'";
	}

	$mysqli->query($sql);
}

if($_SESSION['usertype'] == "admin")
{
	$sql="SELECT * FROM $ARTICLE_TABLE_NAME WHERE id='$articleId'";
}
else 
{
	$sql="SELECT * FROM $ARTICLE_TABLE_NAME WHERE authorid='$authorid' and status='edit' and id='$articleId'";
}
$result=$mysqli->query($sql);

if($result->num_rows == 1)
{
	$Page = new RendererGNJ("./_tpl/uploadfiles.tpl.php");
	$Page->setInfo("Zalogowany: ".$_SESSION['name']." ".$_SESSION['surname']);

	$row = $result->fetch_assoc();
	$Page->set("title",$row['title']);
	$Page->set("maxPhotos",$ARTICLE_IMAGE_MAX_NUM);
	$Page->set("articleid",$articleId);
	
	if(isset($_SESSION['info'])){
		$info = "<big>".$_SESSION['info']."</big><br>";
		$Page->set("info",$info);
		unset($_SESSION['info']);
	}
	
	/* file list */
	$sql="SELECT name, description, id FROM $FILES_TABLE_NAME WHERE articleId='$articleId'";
	$result=$mysqli->query($sql);
	$Page->set("files",$result);
}
else
{
	$Page = new RendererGNJ("./_tpl/info.tpl.php");
	$Page->set("info","Błąd");
}

$Page->publish();
?>
