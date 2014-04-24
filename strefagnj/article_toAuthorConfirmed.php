<?php

session_start();
if(!isset($_SESSION['email'])){
	header("Location:login.php");
}

ob_start();

include("../_php/mysql.php");
include("./_php/misc.php");
include("../_php/Renderer.php");

if(isset($_SESSION['articleId'])) {
	
   	// Gather all required data
   	$id = $_SESSION['articleId'];
   	$tbl_name = "articles";	
   
   	if($_SESSION['usertype'] == "admin")
   	{
   		$sql="UPDATE $tbl_name SET status='edit' WHERE id='$id'";
   	}
   	// Execute the query
   	$result = $mysqli->query($sql);
	
   	// Check if it was successfull
   	if($result) 
   	{
   		$sql="SELECT * FROM $tbl_name WHERE id='$id'";
   		$result=$mysqli->query($sql);
   	
	   	if($result->num_rows == 1)
   		{
      		$row = $result->fetch_assoc();
   			$author = $_SESSION['name']." ".$_SESSION['surname'];
   			$message=$_POST['text'];
   		
   			/* send emial to all admins */
   			$mailSubject = "[GNJWWW] artykuł przekazany do ponownej edycji";
   			$mail = new Renderer("./_tpl/mail.newarticle.tpl.php");
   			$mail->set("title",$row['title']);
   			$mail->set("author",$author);
   			$mail->set("text",$message);
   			
   			SendMail2Admins($mysqli,$mailSubject,$mail->parse());	
   			if($_SESSION['usertype'] != "admin")
   			{
   				SendMail2User($mysqli,$row['authorid'],$mailSubject,$mail->parse());
   			}
   		}   	
   	
		$_SESSION['info'] = 'Artykuł wysłany ponownie do autora!';
   }
   else {
		$_SESSION['info'] = 'Błąd:'."<pre>{$mysqli->error}</pre>";
   }
}
else {
    $_SESSION['info'] = 'Błąd';
}

unset($_SESSION['articleId']);

header("Location: index.php");

ob_end_flush();
?>