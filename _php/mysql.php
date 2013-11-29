<?php 

include('../../mysqlgnj.private');

// Connect to server and select databse.
$mysqli = new mysqli("$host", "$sqlusername", "$sqlpassword", "$db_name");

if ($mysqli->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
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


?>