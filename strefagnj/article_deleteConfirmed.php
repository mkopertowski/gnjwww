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
	
   // gather all required data
   $id = $_SESSION['articleId'];
   $authorid = $_SESSION['userid'];
   
   /* delete the article */
   $tbl_name = "articles";	
   
   if($_SESSION['usertype'] == "admin")
   {
   		$sql="DELETE FROM $tbl_name WHERE id='$id'";
   }
   else
   {
   		$sql="DELETE FROM $tbl_name WHERE authorid='$authorid' and id='$id'";
   }   
   
   $sql="DELETE FROM $tbl_name WHERE id='$id'";
   // Execute the query
   $result = $mysqli->query($sql);
	
   // Check if it was successfull
   if($result) {
		$_SESSION['info'] = 'Artykuł usunięty.';
   }
   else {
		$_SESSION['info'] = 'Błąd:'."<pre>{$mysqli->error}</pre>";
   }
   
   /* delete the article */
   $tbl_name = "files";
   
   if($_SESSION['usertype'] == "admin")
   {
   		$sql="DELETE FROM $tbl_name WHERE articleId='$id'";
   }
   else 
   {
   		$sql="DELETE FROM $tbl_name WHERE authorid='$authorid' and articleId='$id'";
   }
   
   // Execute the query
   $result = $mysqli->query($sql); 
}
else {
    $_SESSION['info'] = 'Błąd.';
}

unset($_SESSION['articleId']);

header("Location: index.php");

ob_end_flush();
?>