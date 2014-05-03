<?php 

session_start();
if(!isset($_SESSION['email'])){
	header("Location:login.php");
}

include("../_php/mysql.php");
include("../_php/misc.php");
include("../_php/Renderer.php");
include("../_php/settings.php");
require_once("../_php/wikiParser.php");

$authorid = $_SESSION['userid'];
$id = $_REQUEST['id'];

$mysqli->query("SET NAMES 'utf8'");

$sql="SELECT * FROM $ARTICLE_TABLE_NAME WHERE id='$id'";
$result=$mysqli->query($sql);
$row = $result->fetch_assoc();

if(($_SESSION['usertype'] == "admin") || ($row['authorid'] == $authorid))
{
	ShwoArticle($mysqli,$row,$id,false);	
}	

?>
