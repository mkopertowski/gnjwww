<?php

session_start();
if(!isset($_SESSION['email'])){
	header("Location:login.php");
}

ob_start();

include("../_php/mysql.php");
include("./_php/misc.php");
include("../_php/Renderer.php");

$tbl_name="articles"; // Table name

$title=$_POST['title'];
$subtitle=$_POST['subtitle'];
$text=$_POST['text'];
$section =$_POST['section']; 

$mysqli->query("SET NAMES 'utf8'");

$title = stripslashes($title);
$title = $mysqli->real_escape_string($title);

$text = stripslashes($text);
$text = $mysqli->real_escape_string($text);


if($_SESSION['usertype'] == "admin")
{
	/* overwrite date? */
	if($_POST['date'] =="")
	{
		$date = date( 'Y-m-d', strtotime("now") ); 
	} 
	else 
	{
		$date = date( 'Y-m-d', strtotime($_POST['date']));
	}
	
	/* overwrite author? */
	$author = "";
	if($_POST['authorlist'] == "notSet")
	{
		if($_POST['authortext'] == "")
		{
			/* use current user - no overwrite */
			$authorid = $_SESSION['userid'];
			$status = "edit";
		}
		else 
		{
			/* use author  */
			$authorid = 0;
			$author = $_POST['authortext'];
			$status = "toreview";
		}
	}
	else
	{
		/* use selected author  */
		$authorid = $_POST['authorlist'];
		$status = "toreview";
	}
	
	if(isset($_SESSION['articleid'])){
		$id = $_SESSION['articleid'];
		/* update */
		$sql="UPDATE $tbl_name SET authorid='$authorid', author= '$author', title='$title', subtitle='$subtitle', text='$text', section='$section' WHERE id='$id'";
	}
	else 
	{ 
		/* insert */
		$sql="INSERT INTO $tbl_name (authorid, author, title, subtitle, text, date, section, status) VALUES ('$authorid', '$author', '$title', '$subtitle', '$text', '$date', '$section', '$status')";
	}
	
	$result=$mysqli->query($sql);	
}
else 
{
	$authorid = $_SESSION['userid'];
	$author = $_SESSION['name']." ".$_SESSION['surname'];

	if(isset($_SESSION['articleid'])){
		$id = $_SESSION['articleid'];
		/* update */
		$sql="UPDATE $tbl_name SET title='$title', subtitle='$subtitle', text='$text', section='$section' date=now() WHERE id='$id'";
	}
	else
	{
		/* insert */
		$sql="INSERT INTO $tbl_name (authorid, title, subtitle, text, date, section) VALUES ('$authorid', '$title', '$text', now(), '$section')";
	}
	
	$result=$mysqli->query($sql);	
}

if($result)
{			
	/* go to index.php */
	$_SESSION['info'] = "Artykuł zapisany";
}
else
{
	/* go to index.php */
	$_SESSION['info'] = "Błąd";
}
	
unset($_SESSION['articleid']);

header("Location: index.php");

ob_end_flush();
?>