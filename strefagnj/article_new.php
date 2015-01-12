<?php 


session_start();
if(!isset($_SESSION['email'])){
	header("Location:login.php");
}

include("../_php/settings.php");
include("../_php/mysql.php");
include("./_php/RendererGNJ.php");
include("../_php/settings.php");

$tbl_name="articles"; // Table name

$sql="SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = '$tbl_name' AND COLUMN_NAME = 'section'";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();
$sectionList = explode(",", str_replace("'", "", substr($row['COLUMN_TYPE'], 5, (strlen($row['COLUMN_TYPE'])-6))));

$sql="SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = '$tbl_name' AND COLUMN_NAME = 'language'";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();
$languageList = explode(",", str_replace("'", "", substr($row['COLUMN_TYPE'], 5, (strlen($row['COLUMN_TYPE'])-6))));

$tbl_name="members"; // Table name
$sql="SELECT id,name,surname FROM $tbl_name";
$membersList = $mysqli->query($sql);

$Page = new RendererGNJ("./_tpl/articleForm.tpl.php");
$Page->setInfo("Zalogowany: ".$_SESSION['name']." ".$_SESSION['surname']);

$Page->set("sectionList",$sectionList);
$Page->set("languageList",$languageList);
$Page->set("membersList",$membersList);

if($_SESSION['usertype'] == "admin")
{
	$Page->set("textMax",$ARTICLE_CHARACTERS_MAX_ADMIN);
}
else
{
	$Page->set("textMax",$ARTICLE_CHARACTERS_MAX);	
}

$Page->set("title","");
$Page->set("subtitle","");
$Page->set("section","");
$Page->set("language","");
$Page->set("text","");
$Page->set("tags","");
$Page->set("html_keywords","");
$Page->set("html_description","");
$Page->set("author","");
$Page->set("authorid","notSet");
$Page->set("date","");
$Page->set("articleid","new");

$Page->publish();
?>
