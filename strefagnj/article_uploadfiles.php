<?php 

session_start();
if(!isset($_SESSION['email'])){
	header("Location:login.php");
}

include("../_php/mysql.php");
include("./_php/RendererGNJ.php");
include("../_php/settings.php");

$authorid = $_SESSION['userid'];
$articleid = $_REQUEST['id']; 

if(isset($_REQUEST['del']))
{
	$fileid = $_REQUEST['fileid'];
	
	$sql="DELETE FROM $FILES_TABLE_NAME WHERE id='$fileid' and articleId='$articleid'";
	
	$mysqli->query($sql);
}

if($_SESSION['usertype'] == "admin")
{
	$sql="SELECT * FROM $ARTICLE_TABLE_NAME WHERE id='$articleid'";
}
else 
{
	$sql="SELECT * FROM $ARTICLE_TABLE_NAME WHERE authorid='$authorid' and status='edit' and id='$articleid'";
}
$result=$mysqli->query($sql);

if($result->num_rows == 1)
{
	$Page = new RendererGNJ("./_tpl/uploadfiles.tpl.php");
	$Page->setInfo("Zalogowany: ".$_SESSION['name']." ".$_SESSION['surname']);

	$row = $result->fetch_assoc();
	$Page->set("title",$row['title']);
	$Page->set("maxPhotos",$ARTICLE_IMAGE_MAX_NUM);
	$Page->set("articleid",$articleid);
	
	if(isset($_SESSION['info'])){
		$info = "<big>".$_SESSION['info']."</big><br>";
		$Page->set("info",$info);
		unset($_SESSION['info']);
	}
	
	/* file list */
	$sql="SELECT name, description, id FROM $FILES_TABLE_NAME WHERE articleId='$articleid'";
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
