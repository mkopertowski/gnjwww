<?php

if(isset($GL_DIR)) {
	include($GL_DIR.'/../mysqlgnj.private');
} else {
	include('../../mysqlgnj.private');
} 

// Connect to server and select databse.
$mysqli = new mysqli("$host", "$sqlusername", "$sqlpassword", "$db_name");

if ($mysqli->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} else {
	$mysqli->query("SET NAMES 'utf8'");
} 

function getAuthorFromAuthorID($mysqli,$authorID)
{
	$tbl_name="members"; // Table name
	$sql="SELECT * FROM $tbl_name WHERE id='$authorID'";
	$result=$mysqli->query($sql);
	
	if($result->num_rows == 1)
	{
		$row = $result->fetch_assoc();
		$author = $row['name']." ".$row['surname'];		
	}
	else 
	{
		$author = "";
	}
	
	return $author;
}

function getFirstImageIDFromArticle($mysqli,$articleID)
{
	$sql="SELECT `id` FROM `files` WHERE articleId='$articleID' and ( mime='image/jpeg' or mime='image/png' or mime='image/gif' ) LIMIT 1";
	$result=$mysqli->query($sql);

	$imgId = "";
	
	if($result)
	{
		$row = $result->fetch_assoc();
		$imgId = $row['id'];
	}

	return $imgId;
}

function getImageAspectRatio($mysqli,$imgId)
{
	$query = "SELECT `data400x266` FROM `files` WHERE id='$imgId'";
	$result = $mysqli->query($query);
	
	$aspectratio = 0;
	
	if($result) {
		// Make sure the result is valid
		if($result->num_rows == 1) {
			// Get the row
			$row = mysqli_fetch_assoc($result);
				
			$im = imagecreatefromstring($row['data400x266']);
			$x = imagesx($im);
			$y = imagesy($im);
			$aspectratio = $x/$y;
        }
	}
    // Free the mysqli resources
	@mysqli_free_result($result);
	
	return $aspectratio;
}

function getLastUpdateMYSQL($mysqli)
{
	$sql="SELECT `date` FROM `articles` WHERE status='ready' ORDER BY date DESC LIMIT 1";
	
	$result=$mysqli->query($sql);

	if($result)
	{
		$row = $result->fetch_assoc();
		return formatDate($row['date']);
	}
	else
	{
		return "";
	}
}


function createFileOnDisk($mysqli,$id) 
{
		$query = "SELECT `name`, `dataSmall` FROM `files` WHERE `id` = {$id}";
		$result = $mysqli->query($query);
		 
		if($result) {
			// Make sure the result is valid
			if($result->num_rows == 1) {
				// Get the row
				$row = $result->fetch_assoc();
		
				file_put_contents('../_tmp/'.$row['name'],$row['dataSmall']);
				error_log ('XXXX../_php/'.$row['name']);
				error_log ('XXXX'.get_current_user());
				echo '../_tmp/'.$row['name'];
			}
			else {
				echo 'Error! No image exists with that ID.';
			}
		}
		else {
			echo "Error! Query failed: <pre>{$mysqli->error}</pre>";
		}
}

function ArticleListFiltredMYSQL($mysqli,$sqlfiltr,$limit)
{
	$sql= "SELECT * FROM `articles` WHERE status='ready' and ".$sqlfiltr." ORDER BY date DESC ".$limit;
	
	$result=$mysqli->query($sql);
	
	return $result;
}

function ConvertStringMYSQL($mysqli,$str)
{
	return $mysqli->real_escape_string(stripslashes($str));	
}




function ShowArticleEx($mysqli,$row,$id,$showplugin)
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
	$sql="SELECT `description`, `id`, `name` FROM files WHERE articleId='$id' and mime LIKE 'image%'";
	$result_ids=$mysqli->query($sql);

	/* get links */
	$sql="SELECT `link`, `name` FROM links WHERE articleId='$id'";
	$result_links=$mysqli->query($sql);

	/* prepare and publish article */
	$Article = new Renderer("../_tpl/article.ex.tpl.php");

	$Article->set("articleId",$id);
	$Article->set("title",$title);
	$Article->set("subtitle",$subtitle);
	$Article->set("date",$date);
	$Article->set("author",$author);
	$Article->set("imageIds",$result_ids);
	$Article->set("links",$result_links);

	$Article->set("html_keywords",$row['keywords']);
	$Article->set("html_description",$row['description']);

	$Article->set("showPlugin",$showplugin);
	$Article->set("imgId",getFirstImageIDFromArticle($mysqli,$id));

	$text = explode('</p>', $text);
	$Article->set("text",$text);

	$Article->publish();

}


?>