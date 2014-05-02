<?php 

session_start();
if(!isset($_SESSION['email'])){
	header("Location:login.php");
}

include("../_php/mysql.php");
include("../_php/misc.php");
include("../_php/Renderer.php");
include("../_php/settings.php");
require_once("../_php/wikiParser.php");

$authorid = $_SESSION['userid'];
$id = $_REQUEST['id'];

$mysqli->query("SET NAMES 'utf8'");

$sql="SELECT * FROM $ARTICLE_TABLE_NAME WHERE id='$id'";
$result=$mysqli->query($sql);
$row = $result->fetch_assoc();

if(($_SESSION['usertype'] == "admin") || ($row['authorid'] == $authorid))
{
    $title = $row['title'];
    $subtitle = $row['subtitle'];
    $date = formatDate($row['date']);
        
    $text = $row['text'];
    $wiki_txt = new wikiParser;
    $text = $wiki_txt->parse($text);
        
    if($row['author'] == "")
    {
    	$authorid = $row['authorid'];    
    	$author = getAuthorFromAuthorID($mysqli,$authorid);
    }
    else
    {
    	$author = $row['author'];
    }
    
    /* get image ids */
    $sql="SELECT `description`, `id`, `name` FROM $FILES_TABLE_NAME WHERE articleId='$id'";
    $result_ids=$mysqli->query($sql);    

    /* get links */
    $sql="SELECT `link`, `name` FROM $LINKS_TABLE_NAME WHERE articleId='$id'";
    $result_links=$mysqli->query($sql);
    
	/* prepare and publish article */
	$Article = new Renderer("../_tpl/article.tpl.php");
	
	$Article->set("title",$title);
	$Article->set("subtitle",$subtitle);
	$Article->set("date",$date);
	$Article->set("author",$author);
	$Article->set("imageIds",$result_ids);
	$Article->set("links",$result_links);
	
	$Article->set("html_keywords",$row['keywords']);
	$Article->set("html_description",$row['description']);
	
	list($text1, $text2) = explode('</p><p class="article">', $text,2);
	$Article->set("text1",$text1.'</p>');
	$Article->set("text2",'<p class="article">'.$text2);
	
	$Article->publish();	
}	

?>
