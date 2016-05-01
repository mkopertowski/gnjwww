<?php 

$GL_DIR = '..';

include("../_php/Renderer.php");
include('../_php/settings.php');
include('../_php/mysql.php');
include('../_php/misc.php');
include('../_php/components.php');

// include the pagination class
require '../_php/Zebra_Pagination.php';

session_start();

// how many records should be displayed on a page?
$records_per_page = $SEARCH_LIMIT_PER_PAGE;

// instantiate the pagination object
$pagination = new Zebra_Pagination();

if(isset($_POST['searchString']))
{
	$searchString = ConvertStringMYSQL($mysqli,$_POST['searchString']);
	$_SESSION['searchString'] = $searchString;
}
else if (isset($_SESSION['searchString']))
{
	$searchString = $_SESSION['searchString'];
}
else 
{
	$searchString = "";
}

$sqlfiltr="tags LIKE '%".$searchString."%'";
$sqlfiltr.=" OR text LIKE '%".$searchString."%'";
$sqlfiltr.=" OR title LIKE '%".$searchString."%'";
$sqlfiltr.=" OR subtitle LIKE '%".$searchString."%'";

$sqllimit = "LIMIT " . (($pagination->get_page() - 1) * $records_per_page) . ', ' . $records_per_page;

$sql="SELECT SQL_CALC_FOUND_ROWS * FROM $ARTICLE_TABLE_NAME WHERE status='ready' and ".$sqlfiltr." ORDER BY date DESC ".$sqllimit;
$searchResult=$mysqli->query($sql);

$sql= "SELECT FOUND_ROWS() AS `found_rows`";
$rows=$mysqli->query($sql);
$rows=$rows->fetch_assoc();

// pass the total number of records to the pagination class
$pagination->records($rows['found_rows']);

// records per page
$pagination->records_per_page($records_per_page);

$Content = new Renderer("../_tpl/search.tpl.php");
$Content->set("searchString",$searchString);
$Content->set("searchResult",$searchResult);
$Content->set("dots","..");
$Content->set("mysqli",$mysqli);
$Content->set("pagination",$pagination);
$Content->set("resultsNum",$rows['found_rows']);

$Page = new Renderer("../_tpl/gnj.tpl.php");
$Page->set("Content",$Content->parse());
$Page->set("dots","..");
$Page->set("mysqli",$mysqli);

$Page->publish();

?>