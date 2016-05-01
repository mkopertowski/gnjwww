<?php 

$GL_DIR = '..';

include("mysql.php");
include("misc.php");
include("Renderer.php");
include("settings.php");
include('components.php');

$id = $_REQUEST['id'];

$sql="SELECT * FROM $ARTICLE_TABLE_NAME WHERE id='$id' and status='ready'";
$result=$mysqli->query($sql);

if($result->num_rows == 1)
{
	$row = $result->fetch_assoc();
			
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