<?php 

session_start();
if(!isset($_SESSION['email'])){
	header("Location:login.php");
}

include("../_php/mysql.php");
include("./_php/RendererGNJ.php");

$_SESSION['articleId'] = $_REQUEST['id'];

$tbl_name="articles"; // Table name

$mysqli->query("SET NAMES 'utf8'");

$authorid = $_SESSION['userid'];
$articleId = $_SESSION['articleId']; 

if($_SESSION['usertype'] == "admin")
{
	$sql="SELECT * FROM $tbl_name WHERE id='$articleId'";
}
else 
{
	$sql="SELECT * FROM $tbl_name WHERE authorid='$authorid' and status='edit' and id='$articleId'";
}
$result=$mysqli->query($sql);

if($result->num_rows == 1)
{
	$Page = new RendererGNJ("./_tpl/uploadfiles.tpl.php");
	$Page->setInfo("Zalogowany: ".$_SESSION['name']." ".$_SESSION['surname']);

	$row = $result->fetch_assoc();
	$Page->set("title",$row['title']);
	$Page->set("maxPhotos",$ARTICLE_IMAGE_MAX_NUM);
		
	if(isset($_SESSION['info'])){
		$info = "<big>".$_SESSION['info']."</big><br>";
		$Page->set("info",$info);
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
