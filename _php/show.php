<?php 

include("mysql.php");
include("misc.php");
include("Renderer.php");
include("settings.php");
require_once("wikiParser.php");

$id = $_REQUEST['id'];

$sql="SELECT * FROM $ARTICLE_TABLE_NAME WHERE id='$id' and status='ready'";
$result=$mysqli->query($sql);

if($result->num_rows == 1)
{
	$row = $result->fetch_assoc();
	
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
    
	/* prepare and publish article */
	$Article = new Renderer("../_tpl/article.tpl.php");
	
	$Article->set("title",$title);
	$Article->set("subtitle",$subtitle);
	$Article->set("date",$date);
	$Article->set("author",$author);
	$Article->set("imageIds",$result_ids);
	
	list($text1, $text2) = explode('</p><p class="article">', $text,2);
	$Article->set("text1",$text1.'</p>');
	$Article->set("text2",'<p class="article">'.$text2);
	
	$Article->publish();	
}	

?>