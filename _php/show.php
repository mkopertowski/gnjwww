<?php 

include("mysql.php");
include("misc.php");
include("Renderer.php");
include("settings.php");
require_once("wikiParser.php");

$id = $_REQUEST['id'];

$sql="SELECT * FROM $ARTICLE_TABLE_NAME WHERE id='$id' and status='ready'";
$result=$mysqli->query($sql);

if($result->num_rows == 1)
{
	$row = $result->fetch_assoc();
	
	ShwoArticle($mysqli,$row,$id,true);
}	

?>