<?php

session_start();
if(!isset($_SESSION['email'])){
	header("Location:login.php");
}

ob_start();

include("../_php/mysql.php");
include("./_php/misc.php");
include("../_php/Renderer.php");
include("../_php/settings.php");

if(isset($_POST['articleid'])) 
{
	// gather all required data
	$articleid = $mysqli->real_escape_string($_POST['articleid']);
	$authorid = $_SESSION['userid'];

	/* delete the article */
	if($_SESSION['usertype'] == "admin")
	{
		$sql="DELETE FROM $ARTICLE_TABLE_NAME WHERE id='$articleid'";
	}
	else
	{
		$sql="DELETE FROM $ARTICLE_TABLE_NAME WHERE authorid='$authorid' and id='$articleid'";
	}
	// Execute the query
	$result = $mysqli->query($sql);

	// Check if it was successfull
	if($result) {
		$_SESSION['info'] = 'Artykuł usunięty.';
	}
	else {
		$_SESSION['info'] = 'Błąd:'."<pre>{$mysqli->error}</pre>";
	}

	/* delete article files */
	if($_SESSION['usertype'] == "admin")
	{
		$sql="DELETE FROM $FILES_TABLE_NAME WHERE articleId='$articleid'";
	}
	else 
	{
		$sql="DELETE FROM $FILES_TABLE_NAME WHERE authorid='$authorid' and articleId='$articleid'";
	}   
	// Execute the query
	$result = $mysqli->query($sql); 

	/* delete article links */
	if($_SESSION['usertype'] == "admin")
	{
		$sql="DELETE FROM $LINKS_TABLE_NAME WHERE articleId='$articleid'";
	}
	else 
	{
		$sql="DELETE FROM $LINKS_TABLE_NAME WHERE authorid='$authorid' and articleId='$articleid'";
	}
	// Execute the query
	$result = $mysqli->query($sql); 
}
else {
	$_SESSION['info'] = 'Błąd.';
}

header("Location: index.php");

ob_end_flush();
?>