<?php 

session_start();
if(!isset($_SESSION['email'])){
	header("Location:login.php");
}

include("../_php/mysql.php");
include("../_php/misc.php");
include("../_php/Renderer.php");
include("../_php/settings.php");
include("../_php/components.php");

$authorid = $_SESSION['userid'];
$id = $_REQUEST['id'];

$mysqli->query("SET NAMES 'utf8'");

$sql="SELECT * FROM $ARTICLE_TABLE_NAME WHERE id='$id'";
$result=$mysqli->query($sql);
$row = $result->fetch_assoc();

if(($_SESSION['usertype'] == "admin") || ($row['authorid'] == $authorid))
{	
	switch($row['layout'])
	{
		case "ex":
	        $Article = new Renderer("../_tpl/article.ex.tpl.php");
			PrepareArticleEx($mysqli,$row,$id,true,$Article);
			break;
		case "nofb":
			$Article = new Renderer("../_tpl/article.tpl.php");
			PrepareArticle($mysqli,$row,$id,false,$Article);
			break;	
		default:
			if($row['section'] == "plany i przekroje")
			{
				$Article = new Renderer("../_tpl/planprzekroj.tpl.php");
			}
			else
			{
				$Article = new Renderer("../_tpl/article.tpl.php");
			}
			PrepareArticle($mysqli,$row,$id,true,$Article);
	}
		
	$Article->set("mysqli",$mysqli);
	$Article->set("dots","..");

	/* decide which layout to use */
	if(($row['section'] == "odeszli") || ($row['section'] == "plany i przekroje")) 
	{
		$ArticleLayout = new Renderer("../_tpl/simpleLayout.tpl.php");
	}
	else 
	{
		$sqlfiltr = "id != ".$id;
		$sqlfiltr.= " AND section='".$row['section']."'";
		$limit = "LIMIT 3";
		$result=ArticleListFiltredMYSQL($mysqli,$sqlfiltr,$limit);
		
		$ArticleLayout = new Renderer("../_tpl/advancedLayout.tpl.php");
		$ArticleLayout->set("dots","..");
		$ArticleLayout->set("panelArticles",$result);
		$ArticleLayout->set("mysqli",$mysqli);
	}
		
	$ArticleLayout->set("article",$Article->parse());
	
	$Page = new Renderer("../_tpl/gnj.tpl.php");
	$Page->set("Content",$ArticleLayout->parse());
	$Page->set("dots","..");
	$Page->set("mysqli",$mysqli);
	
	$Page->publish();
	
}		

?>
