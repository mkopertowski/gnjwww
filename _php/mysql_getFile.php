<?php

ob_start();

include("../_php/mysql.php");
include_once("../_php/settings.php");
include_once("../_php/misc.php");


// Make sure an ID was passed
if(isset($_GET['id'])) {
	// Get the ID
	$id = intval($_GET['id']);
	$type = $_GET['type'];
     
    // Make sure the ID is in fact a valid ID
    if($id <= 0) {
    	die('The ID is invalid!');
    }
    else {   
        // Fetch the file information
        
    	if($type == "data800x532")
    	{
    		$query = "SELECT `name`, `data800x532` FROM `files` WHERE `id` = {$id}";
    		$result = $mysqli->query($query);
    		 
    		if($result) {
    			// Make sure the result is valid
    			if($result->num_rows == 1) {
    				// Get the row
    				$row = mysqli_fetch_assoc($result);
    				 
    				// Print headers
    				header("Content-Type: image/jpeg");
    				 
    				echo $row['data800x532']; // dataSmall is always jpeg
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
    	else if($type == "data400x266")
    	{
    		$query = "SELECT `name`, `data400x266` FROM `files` WHERE `id` = {$id}";
    		$result = $mysqli->query($query);
    		 
    		if($result) {
    			// Make sure the result is valid
    			if($result->num_rows == 1) {
    				// Get the row
    				$row = mysqli_fetch_assoc($result);
    				 
    				// Print headers
    				header("Content-Type: image/jpeg");
    				//header("Content-Disposition: inline; filename=". $row['name']);
    				 
    				echo $row['data400x266']; // dataSmall is always jpeg
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
}
else {
    echo 'Error! No ID was passed.';
}

ob_end_flush();

?>

