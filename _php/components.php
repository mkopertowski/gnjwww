<?php

include('WikiRenderer.lib.php');
include('rules/trac_to_xhtml.php');

function printItem($row,$mysqli,$dots,$tplfile,$footer)
{
	$item = new Renderer($dots."/_tpl/".$tplfile);
	
	$item->set("dots",$dots);
	$item->set("showFooter",$footer);
	$item->set("mysqli",$mysqli);
		
	$imgId = getFirstImageIDFromArticle($mysqli,$row['id']);

	$item->set("imgId",$imgId);
	
	$link = '';
	if($row['text'] != '') {
		$link = $dots.'/_php/show.php?id='.$row['id'];
	}

	$item->set("link",$link);
	$item->set("row",$row);
	
	if(isOldArticle($row['date']))
	{
		$date = "";
	}
	else
	{
		$date = formatDate($row['date']);
	}

	$item->set("date",$date);
	
	$author = $row['author'];
	if($author == "")
	{
		$author = getAuthorFromAuthorID($mysqli,$row['authorid']);
	}
	else if($author == "-")
	{
		$author = "";
	}

	$item->set("author",$author);
	
	$item->publish();
}

function printColumnItem($row,$mysqli,$dots,$footer)
{	
	printItem($row,$mysqli,$dots,"columnItem.tpl.php",$footer);
}

function printSalvattoreColumn($columnNr,$num_rows,$sqlResults,$mysqli,$dots,$footer)
{
	for($i=$columnNr; $i<$num_rows; $i+=3)
	{
		$sqlResults->data_seek($i);
		$row = $sqlResults->fetch_assoc();
		if ($row)
		{
			printColumnItem($row,$mysqli,$dots,$footer);
		}
	}
}

function printColumn($sqlResults,$mysqli,$dots,$footer)
{
	if($sqlResults) {
		while ($row = $sqlResults->fetch_assoc()) {
			if ($row)
			{
				printColumnItem($row,$mysqli,$dots,$footer);
			}		
		}
	}
}

function printItems($sqlResults,$mysqli,$dots,$footer)
{
	if($sqlResults) {
		while ($row = $sqlResults->fetch_assoc()) {
			if ($row)
			{
				printItem($row,$mysqli,$dots,"item.tpl.php",$footer);
			}
		}
	}
}

function printSearchResultItem($row,$mysqli,$dots)
{
	printItem($row,$mysqli,$dots,"searchResultItem.tpl.php",false);
}

function printResult($num_rows,$sqlResults,$mysqli,$dots)
{
	for($i=0; $i<$num_rows; $i++)
	{
		$sqlResults->data_seek($i);
		$row = $sqlResults->fetch_assoc();
		if ($row)
		{
			printSearchResultItem($row,$mysqli,$dots);
		}
	}
}


function PrepareArticle($mysqli,$row,$id,$showplugin,$Article)
{
	$title = $row['title'];
	$subtitle = $row['subtitle'];

	if(isOldArticle($row['date']))
	{
		$date = "";
	}
	else
	{
		$date = formatDate($row['date']);
	}

	$text = $row['text'];

	$wiki_txt = new WikiRenderer('trac_to_xhtml');
	$text = $wiki_txt->render($text);
	
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
	$sql="SELECT `description`, `id`, `name` FROM files WHERE articleId='$id' and mime LIKE 'image%'";
	$result_ids=$mysqli->query($sql);

	/* get local pdf files for links */
	$sql="SELECT `description`, `id`, `name` FROM files WHERE articleId='$id' and mime LIKE 'application/pdf'";
	$result_localfiles=$mysqli->query($sql);

	/* get links */
	$sql="SELECT `link`, `name` FROM links WHERE articleId='$id'";
	$result_links=$mysqli->query($sql);

	$Article->set("articleId",$id);
	$Article->set("title",$title);
	$Article->set("subtitle",$subtitle);
	$Article->set("date",$date);
	$Article->set("author",$author);
	$Article->set("imageIds",$result_ids);
	$Article->set("links",$result_links);
	$Article->set("localfiles",$result_localfiles);

	$Article->set("html_keywords",$row['keywords']);
	$Article->set("html_description",$row['description']);

	$Article->set("showPlugin",$showplugin);
	$Article->set("imgId",getFirstImageIDFromArticle($mysqli,$id));

	list($text1, $text2) = explode('</p>', $text,2);
	$Article->set("text1",$text1.'</p>');
	$Article->set("text2",$text2);
}

function PrepareArticleEx($mysqli,$row,$id,$showplugin,$Article)
{
	$title = $row['title'];
	$subtitle = $row['subtitle'];

	if(isOldArticle($row['date']))
	{
		$date = "";
	}
	else
	{
		$date = formatDate($row['date']);
	}

	$text = $row['text'];

	$wiki_txt = new WikiRenderer('trac_to_xhtml');
	$text = $wiki_txt->render($text);

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
	$sql="SELECT `description`, `id`, `name` FROM files WHERE articleId='$id' and mime LIKE 'image%'";
	$result_ids=$mysqli->query($sql);

	/* get local pdf files for links */
	$sql="SELECT `description`, `id`, `name` FROM files WHERE articleId='$id' and mime LIKE 'application/pdf'";
	$result_localfiles=$mysqli->query($sql);

	/* get links */
	$sql="SELECT `link`, `name` FROM links WHERE articleId='$id'";
	$result_links=$mysqli->query($sql);

	$Article->set("articleId",$id);
	$Article->set("title",$title);
	$Article->set("subtitle",$subtitle);
	$Article->set("date",$date);
	$Article->set("author",$author);
	$Article->set("imageIds",$result_ids);
	$Article->set("links",$result_links);
	$Article->set("localfiles",$result_localfiles);

	$Article->set("html_keywords",$row['keywords']);
	$Article->set("html_description",$row['description']);

	$Article->set("showPlugin",$showplugin);
	$Article->set("imgId",getFirstImageIDFromArticle($mysqli,$id));

	$text = explode('</p>', $text);
	$Article->set("text",$text);
}

?>