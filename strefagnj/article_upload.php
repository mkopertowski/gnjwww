<?php

session_start();
if(!isset($_SESSION['email'])){
	header("Location:login.php");
}

ob_start();

include("../_php/mysql.php");
include("./_php/misc.php");
include("../_php/misc.php");
include("../_php/Renderer.php");
include("../_php/settings.php");

// Check if a file has been uploaded
if(isset($_FILES['uploaded_file'])) {
	if( ($_FILES['uploaded_file']["type"] != "image/jpeg") &&
	    ($_FILES['uploaded_file']["type"] != "image/png") &&
	    ($_FILES['uploaded_file']["type"] != "image/gif"))
	{
		$_SESSION['info'] = 'Błąd. Nieobsługiwany typ pliku: '.$_FILES['uploaded_file']["type"];
	}
	// Make sure the file was sent without errors
	else if($_FILES['uploaded_file']['error'] == 0) {
		// Connect to the database
	
		// Get all required data
		$name = $mysqli->real_escape_string($_FILES['uploaded_file']['name']);
		$mime = $mysqli->real_escape_string($_FILES['uploaded_file']['type']);
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
	    	
	    	// compress only jpeg (gif and png are left untouched)
	    	if($_FILES['uploaded_file']["type"] != "image/jpeg")
	    	{
	    		$image = imagecreatefromstring($data);
	    		ob_clean(); //Stdout --> buffer
	    		imagejpeg($image, NULL, $ARTICLE_IMAGE_QUALITY);
	    		$data = ob_get_contents(); //store stdout in $img2
	    		ob_clean(); //clear buffer
	    		imagedestroy($image); //destroy img
	    	}
	    	
	    	// small images are always jpeg
	    	$image = getResizedImage($data, $ARTICLE_IMAGE_SMALL_WIDTH, $ARTICLE_IMAGE_SMALL_HEIGHT);
	    	ob_clean(); //Stdout --> buffer
	    	imagejpeg($image, NULL, 60);
	    	$dataSmall = ob_get_contents(); //store stdout in $img2
	    	ob_clean(); //clear buffer
	    	imagedestroy($image); //destroy img
	    		    	
	    	$data = $mysqli->real_escape_string($data);
	    	$dataSmall = $mysqli->real_escape_string($dataSmall);
	    	
	    	// Create the SQL query
	    	$sql = "INSERT INTO `files` ( `name`, `mime`, `data`, `dataSmall`, `description`, `articleId`) VALUES (
	    	'{$name}', '{$mime}', '{$data}', '{$dataSmall}', '{$description}', '{$id}')";
	    	
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