<?php

include("../_php/mysql.php");
include_once("../_php/settings.php");


function resize($blob_binary, $desired_width, $desired_height) 
{ 
	$im = imagecreatefromstring($blob_binary);
	$x = imagesx($im);
	$y = imagesy($im);
	$aspectratio = $x/$y;
	
	if($x>$y)
	{
		$desired_height = $desired_width / $aspectratio;
	}
	else
	{
		$desired_width = $desired_height * $aspectratio;
	}
	
	$new = imagecreatetruecolor($desired_width, $desired_height) or exit("bad url");
	
	imagecopyresampled($new, $im, 0, 0, 0, 0, $desired_width, $desired_height, $x, $y) or exit("bad url");
	imagedestroy($im);
	imagejpeg($new, null, 100) or exit("bad url");
    return $new;
}

// Make sure an ID was passed
if(isset($_GET['id'])) {
	// Get the ID
	$id = intval($_GET['id']);
     
    // Make sure the ID is in fact a valid ID
    if($id <= 0) {
    	die('The ID is invalid!');
    }
    else {   
        // Fetch the file information
        $query = "SELECT `mime`, `name`, `size`, `data` FROM `files` WHERE `id` = {$id}";
        $result = $mysqli->query($query);
     
        if($result) {
        	// Make sure the result is valid
            if($result->num_rows == 1) {
            	// Get the row
                $row = mysqli_fetch_assoc($result);
     
                // Print headers
                header("Content-Type: ". $row['mime']);
                header("Content-Length: ". $row['size']);
                header("Content-Disposition: attachment; filename=". $row['name']);
     
                // resize and print
                $image = resize($row['data'], $ARTICLE_IMAGE_WIDTH, $ARTICLE_IMAGE_HEIGHT);
                
            }
            else {
                echo 'Error! No image exists with that ID.';
            }
     
            // Free the mysqli resources
            @mysqli_free_result($result);
        }
        else {
            echo "Error! Query failed: <pre>{$mysqli->error}</pre>";
        }
        @mysqli_close($mysqli);
    }
}
else {
    echo 'Error! No ID was passed.';
}

?>

