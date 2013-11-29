<?php 

session_start();
if(!isset($_SESSION['email'])){
	header("Location:login.php");
}

include("../_php/mysql.php");
include("./_php/RendererGNJ.php");

$tbl_name="articles"; // Table name

$mysqli->query("SET NAMES 'utf8'");

$sql="SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = '$tbl_name' AND COLUMN_NAME = 'section'";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();
$sectionList = explode(",", str_replace("'", "", substr($row['COLUMN_TYPE'], 5, (strlen($row['COLUMN_TYPE'])-6))));

$tbl_name="members"; // Table name
$sql="SELECT id,name,surname FROM $tbl_name";
$membersList = $mysqli->query($sql);


$Page = new RendererGNJ("./_tpl/newarticle.tpl.php");
$Page->setInfo("Zalogowany: ".$_SESSION['name']." ".$_SESSION['surname']);

$Page->set("sectionList",$sectionList);
$Page->set("membersList",$membersList);

/* edytowanie? */
if(isset($_REQUEST['id'])){
	
	$id = $_REQUEST['id'];
	$authorid = $_SESSION['userid'];
	$_SESSION['articleid'] = $id;
	$tbl_name="articles"; // Table name
	
	if($_SESSION['usertype'] == "admin")
	{
		$sql="SELECT * FROM $tbl_name WHERE id='$id'";
	}
	else
	{
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
	}
}

$Page->publish();
?>
