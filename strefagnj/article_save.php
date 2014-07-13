<?php

session_start();
if(!isset($_SESSION['email'])){
	header("Location:login.php");
}

ob_start();

include("../_php/mysql.php");
include("../_php/settings.php");
include("./_php/misc.php");
include("../_php/Renderer.php");

$title = ConvertStringMYSQL($mysqli,$_POST['title']);
$subtitle = ConvertStringMYSQL($mysqli,$_POST['subtitle']);
$text = ConvertStringMYSQL($mysqli,$_POST['text']);
$articleid = $mysqli->real_escape_string($_POST['articleid']);

$section =$_POST['section']; 

/* article update if 'articleid' not set "new" */
if($articleid != "new")
{
	/* select the article from database */
	$sql="SELECT * FROM $ARTICLE_TABLE_NAME WHERE id='$articleid'";
	$result=$mysqli->query($sql);
	
	if($result->num_rows == 1)
	{
		$articleToUpdate = $result->fetch_assoc();
	}	
	
	$status = $articleToUpdate['status'];
}
else
{
	/* a new article */
	$status = "edit";
}

/* overwrite date? */
if($_POST['date'] =="")
{
	$date = date( 'Y-m-d', strtotime("now") );
}
else
{
	$date = date('Y-m-d', strtotime($_POST['date']));
}

/* this is admin so some special handling of form data */
if($_SESSION['usertype'] == "admin")
{
	$tags = ConvertStringMYSQL($mysqli,$_POST['tags']);
	$html_keywords = ConvertStringMYSQL($mysqli,$_POST['html_keywords']);
	$html_description = "";
	
	/* overwrite author? */
	$author = "";
	if($_POST['authorlist'] == "notSet")
	{
		if($articleid == "new") /* a new article */
		{
			$authorid = $_SESSION['userid'];
			
			if($_POST['authortext'] != "")
			{
				$author = ConvertStringMYSQL($mysqli,$_POST['authortext']);
			}
		}
		else /* article update */
		{
			$authorid = $articleToUpdate['authorid'];
			if($_POST['authortext'] != "")
			{
				$author = ConvertStringMYSQL($mysqli,$_POST['authortext']);
			}
		}
	}
	else
	{
		/* use selected author  */
		$authorid = $_POST['authorlist'];
		if($articleid == "new")
		{
			/* over write the status */
			$status = "adminedit";
		}
	}
	
	if(isset($articleToUpdate)){
		/* update */
		$sql="UPDATE $ARTICLE_TABLE_NAME SET authorid='$authorid', author= '$author', title='$title', subtitle='$subtitle', text='$text', section='$section', tags='$tags', keywords='$html_keywords', description='$html_description', status='$status', date='$date' WHERE id='$articleid'";
	}
	else 
	{ 
		/* insert */
		$sql="INSERT INTO $ARTICLE_TABLE_NAME (authorid, author, title, subtitle, text, date, section, status, tags, keywords, description) VALUES ('$authorid', '$author', '$title', '$subtitle', '$text', '$date', '$section', '$status', '$tags', '$html_keywords', '$html_description')";
	}
	
	$result=$mysqli->query($sql);	
}
else /* member adding/updating article */
{
	$authorid = $_SESSION['userid'];

	if(isset($articleToUpdate)){
		/* update */
		$sql="UPDATE $ARTICLE_TABLE_NAME SET title='$title', subtitle='$subtitle', text='$text', section='$section', date=now() WHERE id='$articleid'";
	}
	else
	{
		/* insert */
		$sql="INSERT INTO $ARTICLE_TABLE_NAME (authorid, title, subtitle, text, date, section) VALUES ('$authorid', '$title', '$subtitle', '$text', now(), '$section')";
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

header("Location: index.php");

ob_end_flush();
?>