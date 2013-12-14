<?php

session_start();
if(!isset($_SESSION['email'])){
	header("Location:login.php");
}

ob_start();

include("../_php/mysql.php");
include("./_php/misc.php");
include("../_php/Renderer.php");
include("../_php/settings.php");

// Check if a file has been uploaded
if(isset($_FILES['uploaded_file'])) {
	// Make sure the file was sent without errors
	if($_FILES['uploaded_file']['error'] == 0) {
		// Connect to the database
	
		// Get all required data
		$name = $mysqli->real_escape_string($_FILES['uploaded_file']['name']);
		$mime = $mysqli->real_escape_string($_FILES['uploaded_file']['type']);
		$size = intval($_FILES['uploaded_file']['size']);
		$description = $mysqli->real_escape_string($_POST['description']);
	    $id = $_SESSION['articleId'];
		
	    // store the file size to check
	    $size=filesize($_FILES['uploaded_file']['tmp_name']);

	    // get the number of images for this article
	    /* get image ids */
	    $tbl_name="files"; // Table name
	    
	    $sql="SELECT `name` FROM `files` WHERE articleId='$id'";
	    $result=$mysqli->query($sql);
	    	    
	    if($result->num_rows >= $ARTICLE_IMAGE_MAX_NUM)
	    {
	    	$_SESSION['info'] = 'Błąd: za dużo plików. limit: '.$ARTICLE_IMAGE_MAX_NUM;
	    }
	    else if($size > $ARTICLE_IMAGE_MAX_SIZE*1024)
	    {
	    	$_SESSION['info'] = 'Błąd: za duży rozmiar pliku. limit: '.$ARTICLE_IMAGE_MAX_SIZE.'kB';
	    }
	    else
	    {
	    	$data = file_get_contents($_FILES['uploaded_file']['tmp_name']);
	    	
	    	$image = imagecreatefromstring($data);
	    	
	    	ob_start(); //Stdout --> buffer
	    	imagejpeg($image, NULL, $ARTICLE_IMAGE_QUALITY);
	    	$data = ob_get_contents(); //store stdout in $img2
	    	ob_end_clean(); //clear buffer
	    	imagedestroy($image); //destroy img

	    	$data = $mysqli->real_escape_string($data);
	    	
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