<?php 

ob_start();

$dots = '..';
$GL_DIR = '..';

include("../_php/mysql.php");
include("../_php/Renderer.php");
include("../_php/settings.php");
require_once "RSS.class.php"; 

$sql="SELECT `id`, `title`, `subtitle` FROM articles WHERE status='ready' and date >= '2013-01-01' ORDER BY date DESC LIMIT $AKTUALNOSCI_LIMIT";
$items=$mysqli->query($sql);

if($items)
{
	ob_clean();
	
	header("Content-Type: application/atom+xml; charset=utf-8");
	
	$a_channel = array(
			"title" => "GNJ",
			"link" => "http://gnj.org.pl",
			"description" => "Grupa Nurków Jaskiniowych PZA",
			"language" => "pl",
			"image_title" => "GNJ",
			"image_link" => "http://gnj.org.pl",
			"image_url" => "http://gnj.org.pl/_gfx/logoGNJ.png",
	);
		
	$RSSfeed = new RSS($a_channel, $items);
	$RSSfeed->create();
	
	ob_end_flush();
}

?>
