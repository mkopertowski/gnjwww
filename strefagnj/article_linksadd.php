<?php

session_start();
if(!isset($_SESSION['email'])){
	header("Location:login.php");
}

include("../_php/mysql.php");
include("./_php/misc.php");
include("../_php/misc.php");
include("../_php/Renderer.php");
include("../_php/settings.php");

// Check if link and its name is present
if(isset($_POST['link']) && isset($_POST['name'])) {
	
	// Get all required data
	$link = $mysqli->real_escape_string($_POST['link']);
	$name = $mysqli->real_escape_string($_POST['name']);
	$id = $_SESSION['articleId'];
		
	// get the number of links for this article
	/* get link ids */	    
	$sql="SELECT `id` FROM $LINKS_TABLE_NAME WHERE articleId='$id'";
	$result=$mysqli->query($sql);
	    	    
	if($result->num_rows >= $ARTICLE_LINKS_MAX_NUM)
	{
		$_SESSION['info'] = 'Błąd: za dużo linków. limit: '.$ARTICLE_LINKS_MAX_NUM;
	}
	else
	{
		if(is_numeric($link))
		{
			$link ="http://gnj.org.pl/_php/mysql_getFile.php?id=".$link."&type=data";
			$link = $mysqli->real_escape_string($link);
		}
		
	   	// Create the SQL query
	    $sql = "INSERT INTO $LINKS_TABLE_NAME ( `link`, `name`, `articleId`) VALUES (
	    	'{$link}', '{$name}', '{$id}')";
	    	
	    // Execute the query
	    $result = $mysqli->query($sql);
	    	
	    // Check if it was successfull
	    if($result) {
	    	$_SESSION['info'] = 'Link dodany!';
	    }
	    else {
	    	$_SESSION['info'] = 'Błąd:'."<pre>{$mysqli->error}</pre>";
	    }
	}
}
else {
    $_SESSION['info'] = 'Błąd. Link nie dodany';
}

header("Location: article_links.php?id=".$_SESSION['articleId']);

?>