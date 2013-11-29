<?php

session_start();
if(!isset($_SESSION['email'])){
	header("Location:login.php");
}

ob_start();

include("../_php/mysql.php");
include("./_php/misc.php");
include("../_php/Renderer.php");

// Check if a file has been uploaded
if(isset($_FILES['uploaded_file'])) {
	// Make sure the file was sent without errors
	if($_FILES['uploaded_file']['error'] == 0) {
		// Connect to the database
	
		// Gather all required data
		$name = $mysqli->real_escape_string($_FILES['uploaded_file']['name']);
		$mime = $mysqli->real_escape_string($_FILES['uploaded_file']['type']);
		$data = $mysqli->real_escape_string(file_get_contents($_FILES  ['uploaded_file']['tmp_name']));
		$size = intval($_FILES['uploaded_file']['size']);
		$description = $mysqli->real_escape_string($_POST['description']);
	    $id = $_SESSION['articleId'];
		
		// Create the SQL query
		$sql = "INSERT INTO `files` ( `name`, `mime`, `size`, `data`, `description`, `articleId`) VALUES (
			                               '{$name}', '{$mime}', {$size}, '{$data}', '{$description}', '{$id}')";
	
		// Execute the query
		$result = $mysqli->query($sql);
	
		// Check if it was successfull
		if($result) {
			$_SESSION['info'] = 'Zdjęcie dodane!';
		}
		else {
			$_SESSION['info'] = 'Błąd:'."<pre>{$mysqli->error}</pre>";
        }
    }
	else {
		$_SESSION['info'] = 'Błąd podczas wysyłania zdjęcia. '
           . 'Kod błędu: '. intval($_FILES['uploaded_file']['error']);
	}
}
else {
    $_SESSION['info'] = 'Błąd. Zdjęcie niewysłane';
}

header("Location: article_uploadfiles.php?id=".$_SESSION['articleId']);

ob_end_flush();
?>