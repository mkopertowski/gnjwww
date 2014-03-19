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
        
    	if($type == "small")
    	{
    		$query = "SELECT `name`, `dataSmall` FROM `files` WHERE `id` = {$id}";
    		$result = $mysqli->query($query);
    		 
    		if($result) {
    			// Make sure the result is valid
    			if($result->num_rows == 1) {
    				// Get the row
    				$row = mysqli_fetch_assoc($result);
    				 
    				// Print headers
    				header("Content-Type: image/jpeg");
    				header("Content-Disposition: inline; filename=". $row['name']);
    				 
    				echo $row['dataSmall']; // dataSmall is always jpeg
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
    	else 
    	{
    		$query = "SELECT `name`, `dataSmall` FROM `files` WHERE `id` = {$id}";
    		$result = $mysqli->query($query);
    		 
    		if($result) {
    			// Make sure the result is valid
    			if($result->num_rows == 1) {
    				// Get the row
    				$row = mysqli_fetch_assoc($result);

    				ob_clean();
    				header("Content-Type: image/jpeg");
    				echo $row['dataSmall']; // dataSmall is always jpeg
    				
    				
    				file_put_contents($row['name'],$row['dataSmall']);
    				error_log ('XXXX../_php/'.$row['name']);
    				/**/
    				
    				echo '../_php/'.$row['name'];
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

