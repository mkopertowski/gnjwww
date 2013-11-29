<?php 

session_start();
if(!isset($_SESSION['email'])){
	header("Location:login.php");
}

include("../_php/mysql.php");
include("../_php/misc.php");
include("../_php/Renderer.php");

$tbl_name="articles"; // Table name

$authorid = $_SESSION['userid'];
$id = $_REQUEST['id'];

$mysqli->query("SET NAMES 'utf8'");

$sql="SELECT * FROM $tbl_name WHERE id='$id'";
$result=$mysqli->query($sql);
$row = $result->fetch_assoc();

if(($_SESSION['usertype'] == "admin") || ($row['authorid'] == $authorid))
{
    $title = $row['title'];
    $subtitle = $row['subtitle'];
    $date = formatDate($row['date']);
        
    $text = $row['text'];
    $text = nl2br($text, false);
    $text = '<p class="article">' . preg_replace('#(<br>[\r\n]+){2}#', '</p><p class="article">', $text) . '</p>';
    
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
    $tbl_name="files"; // Table name
        
    $sql="SELECT * FROM $tbl_name WHERE articleId='$id'";
    $result_ids=$mysqli->query($sql);
    
	/* prepare and publish article */
	$Article = new Renderer("../_tpl/article.tpl.php");
	
	$Article->set("title",$title);
	$Article->set("subtitle",$subtitle);
	$Article->set("date",$date);
	$Article->set("text",$text);
	$Article->set("author",$author);
	$Article->set("imageIds",$result_ids);
	
	$Article->publish();	
}	

?>