<?php 

function formatDate($date)
{
	$months = array(
			1 => "Styczeń",
			2 => "Luty",
			3 => "Marzec",
			4 => "Kwiecień",
			5 => "Maj",
			6 => "Czerwiec",
			7 => "Lipiec",
			8 => "Sierpień",
			9 => "Wrzesień",
			10 => "Październik",
			11 => "Listopad",
			12 => "Grudzień"
	);
	
	$dtime = new DateTime($date);
	
	$formatedDate = $dtime->format("d. ").$months[$dtime->format("n")].$dtime->format(" Y");
	
	return $formatedDate;
}

/* check if the date is in the last 3 months */
function isRecentDate($date)
{
	$dtime = new DateTime($date);
	$now = new DateTime();
	
	$interval = $now->diff($dtime);
		
	// is not older than 3 months?
	return ($interval->format("%R%a") > -90);  
}

/* check if the date is in the last 3 months */
function GetYearFromDate($date)
{
	$dtime = new DateTime($date);

	return $dtime->format("Y");
}


function getResizedImage($blob_binary, $desired_width, $desired_height)
{
	$im = imagecreatefromstring($blob_binary);
	$x = imagesx($im);
	$y = imagesy($im);
	$aspectratio = $x/$y;

	if($x>$y)
	{
		$height = $desired_width / $aspectratio;
		
		if($height>$desired_height) {
			$desired_width = $desired_height * $aspectratio;
		} else {
			$desired_height = $height;
		} 	
	}
	else
	{
		$width = $desired_height * $aspectratio;
		
		if($height>$desired_height) {
			$desired_height = $desired_width * $aspectratio;
		} else {
			$desired_width = $width;
		}
	}

	$new = imagecreatetruecolor($desired_width, $desired_height) or exit("bad url");
	imagecopyresampled($new, $im, 0, 0, 0, 0, $desired_width, $desired_height, $x, $y) or exit("bad url");
	imagedestroy($im);
	return $new;
}

function strReplaceNth($search, $replace, $input, $nth)
{
	$found = preg_match_all('/'.preg_quote($search).'/', $input, $matches, PREG_OFFSET_CAPTURE);
	if (false !== $found && $found > $nth) {
		return substr_replace($input, $replace, $matches[0][$nth][1], strlen($search));
	} else {
		return $input.$replace;
	}
}



?>