<?php 

session_start();
if(!isset($_SESSION['email'])){
	header("Location:login.php");
}

include("../_php/settings.php");
include("../_php/mysql.php");
include("./_php/RendererGNJ.php");

$tbl_name="articles"; // Table name

/* get sections for "HTML select" */ 
$sql="SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = '$tbl_name' AND COLUMN_NAME = 'section'";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();
$sectionList = explode(",", str_replace("'", "", substr($row['COLUMN_TYPE'], 5, (strlen($row['COLUMN_TYPE'])-6))));

/* get members for "HTML select" */
$tbl_name="members"; // Table name
$sql="SELECT id,name,surname FROM $tbl_name";
$membersList = $mysqli->query($sql);

$Page = new RendererGNJ("./_tpl/articleForm.tpl.php");
$Page->setInfo("Zalogowany: ".$_SESSION['name']." ".$_SESSION['surname']);

$Page->set("sectionList",$sectionList);
$Page->set("membersList",$membersList);

if($_SESSION['usertype'] == "admin")
{
	$Page->set("textMax",$ARTICLE_CHARACTERS_MAX_ADMIN);
}
else
{
	$Page->set("textMax",$ARTICLE_CHARACTERS_MAX);	
}

/* edit? */
if(isset($_REQUEST['id'])){
	
	$id = $_REQUEST['id'];
	$authorid = $_SESSION['userid'];
	$_SESSION['articleid'] = $id;
	$tbl_name="articles"; // Table name
	
	if($_SESSION['usertype'] == "admin")
	{
		/* admin can edit any article */
		$sql="SELECT * FROM $tbl_name WHERE id='$id'";
	}
	else
	{
		/* user can edit its own articles only */
		$sql="SELECT * FROM $tbl_name WHERE authorid='$authorid' and status='edit' and id='$id'";
	}
		
	$result=$mysqli->query($sql);
	
	if($result->num_rows == 1)
	{
		$row = $result->fetch_assoc();
		
		$Page->set("title",$row['title']);
		$Page->set("subtitle",$row['subtitle']);		
		$Page->set("section",$row['section']);
		$Page->set("text",$row['text']);
		$Page->set("tags",$row['tags']);
		$Page->set("html_keywords",$row['keywords']);
		$Page->set("html_description",$row['description']);
		if($row['author'] != "")
		{
			$Page->set("author",$row['author']);
			$Page->set("authorid","notSet");
		}
		else
		{
			$Page->set("author","");
			$Page->set("authorid",$row['authorid']);
		}
			
		$Page->set("date",$row['date']);
	}
	
	$Page->publish();
}

?>
