<?php

include("../_php/mysql.php");
include_once("../_php/settings.php");
include_once("../_php/misc.php");

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
                header("Content-Disposition: attachment; filename=". $row['name']);
     
                // resize and print
                $image = getResizedImage($row['data'], $ARTICLE_IMAGE_WIDTH, $ARTICLE_IMAGE_HEIGHT);
                imagejpeg($image, NULL, 70);
                imagedestroy($image); //destroy img
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

