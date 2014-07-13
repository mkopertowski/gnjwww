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
	// Gather all required data
	$articleid = $mysqli->real_escape_string($_POST['articleid']);

	if($_SESSION['usertype'] == "admin")
	{
		$sql="UPDATE $ARTICLE_TABLE_NAME SET status='ready' WHERE id='$id'";
	}
	// Execute the query
	$result = $mysqli->query($sql);
	
	// Check if it was successfull
	if($result) 
	{
		$sql="SELECT * FROM $ARTICLE_TABLE_NAME WHERE id='$id'";
		$result=$mysqli->query($sql);
	
		if($result->num_rows == 1)
		{
		$row = $result->fetch_assoc();
		
		if($row['author'] == "")
		{
			$author = getAuthorFromAuthorID($mysqli,$row['authorid']);
		}
		else
		{
			$author = $row['author'];
		}

			/* send emial to all admins */
			$mailSubject= "=?UTF-8?B?".base64_encode("[GNJWWW] artykul zamieszczony: ".$row['title'])."?=";
			$mail = new Renderer("./_tpl/mail.newarticle.tpl.php");
			$mail->set("title",$row['title']);
			$mail->set("author",$author);

			SendMail2AdminsAndUser($mysqli,$mailSubject,$mail->parse(),$row['authorid']);
		}
	
		$_SESSION['info'] = 'Artykuł zamieszczony na stronie!';
	}
	else {
		$_SESSION['info'] = 'Błąd:'."<pre>{$mysqli->error}</pre>";
	}
}
else {
	$_SESSION['info'] = 'Błąd';
}

header("Location: index.php");

ob_end_flush();
?>