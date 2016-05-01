<?php 

$GL_DIR = '..';

include($GL_DIR."/_php/Renderer.php");
include($GL_DIR.'/_php/settings.php');
include($GL_DIR.'/_php/mysql.php');
include($GL_DIR.'/_php/misc.php');
include($GL_DIR.'/_php/components.php');

// include the pagination class
require $GL_DIR.'/_php/Zebra_Pagination.php';

// how many records should be displayed on a page?
$records_per_page = $SWIAT_LIMIT_PER_PAGE;

// instantiate the pagination object
$pagination = new Zebra_Pagination();

$sqlfiltr="tags LIKE '%kopalnie%'";
$sqlfiltr.=" AND section='polska'";

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

$Content = new Renderer($GL_DIR."/_tpl/swiat.tpl.php");
$Content->set("searchResult",$searchResult);
$Content->set("dots","..");
$Content->set("mysqli",$mysqli);
$Content->set("pagination",$pagination);
$Content->set("resultsNum",$rows['found_rows']);
$Content->set("showbreadcrumb",true);
$Content->set("section","DZIAŁALNOŚĆ");
$Content->set("subsection","OBIEKTY SZTUCZNE");

$Page = new Renderer($GL_DIR."/_tpl/gnj.tpl.php");
$Page->set("Content",$Content->parse());
$Page->set("dots","..");
$Page->set("mysqli",$mysqli);

$Page->publish();

?>