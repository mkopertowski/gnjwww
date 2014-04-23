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


function ExtendedListItemMYSQL($mysqli,$row,$dir)
{
	$author = $row['author'];
	if($author == "")
	{
		$author = getAuthorFromAuthorID($mysqli,$row['authorid']);
	}

	$date = formatDate($row['date']);

	$title = $row['title'];
	if(isRecentDate($row['date'])) {
		$title = '<IMG src="'.$dir.'/_gfx/new.gif" border=0>'.$title;
	}
	
	$link = '';
	$link_text = '';
	if($row['text'] != '') {
		$link = $dir.'/_php/show.php?id='.$row['id'];
		$link_text = 'Więcej';
	}

	ExtendedListItem($title,$row['subtitle'],$link,$link_text,$date,$author);
}

function ArticleListFiltredMYSQL($mysqli,$dir,$sqlfiltr)
{
	$sql= "SELECT * FROM `articles` WHERE status='ready' and ".$sqlfiltr." ORDER BY date DESC";
	
	$result=$mysqli->query($sql);
	
	if($result) {
		while ($row = $result->fetch_assoc()) {
			ExtendedListItemMYSQL($mysqli,$row,$dir);
		}
	}	
}

function ConvertStringMYSQL($mysqli,$str)
{
	return $mysqli->real_escape_string(stripslashes($str));	
}

?>