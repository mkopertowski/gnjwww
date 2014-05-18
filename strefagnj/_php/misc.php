<?php 

function SendMail2Admins($mysqli,$subject,$message)
{
	$tbl_name="members"; // Table name
    //$headers='Content-type: text/html; charset=utf-8\r\n From: admin@gnj.org.pl\r\n ';
		
    $header = "From: admin@gnj.org.pl>\n";
    $header .= "Reply-To: admin@gnj.org.pl\n";
    $header .= "Return-Path: admin@gnj.org.pl\n";
    $header .= "Envelope-from: admin@gnj.org.pl\n";
    $header .= "MIME-Version: 1.0\n";
    $header .= "Content-Type: text/html charset=utf-8\n";
        
	$sql="SELECT * FROM $tbl_name WHERE usertype='admin'";
	$result=$mysqli->query($sql);
	
	while ($row = $result->fetch_assoc())
	{
		mail($row['email'],$subject,$message,$headers);
	}
}

function SendMail2AdminsAndUser($mysqli,$subject,$message,$userid)
{
	$tbl_name="members"; // Table name
	//$headers='Content-type: text/html; charset=utf-8\r\n From: admin@gnj.org.pl\r\n ';

	$header = "From: admin@gnj.org.pl>\n";
	$header .= "Reply-To: admin@gnj.org.pl\n";
	$header .= "Return-Path: admin@gnj.org.pl\n";
	$header .= "Envelope-from: admin@gnj.org.pl\n";
	$header .= "MIME-Version: 1.0\n";
	$header .= "Content-Type: text/html charset=utf-8\n";

	$sql="SELECT * FROM $tbl_name WHERE usertype='admin' OR id='$userid'";
	$result=$mysqli->query($sql);

	while ($row = $result->fetch_assoc())
	{
		mail($row['email'],$subject,$message,$headers);
	}
}



function SendMail2User($mysqli,$userid,$subject,$message)
{
	$tbl_name="members"; // Table name
    //$headers='Content-type: text/html; charset=utf-8\r\n From: admin@gnj.org.pl\r\n ';

    $header = "From: admin@gnj.org.pl>\n";
    $header .= "Reply-To: admin@gnj.org.pl\n";
    $header .= "Return-Path: admin@gnj.org.pl\n";
    $header .= "Envelope-from: admin@gnj.org.pl\n";
    $header .= "MIME-Version: 1.0\n";
    $header .= "Content-Type: text/html charset=utf-8\n";
    
	$sql="SELECT * FROM $tbl_name WHERE id='$userid'";
	$result=$mysqli->query($sql);

	if($result)
	{
		$row = $result->fetch_assoc();
		mail($row['email'],$subject,$message,$headers);
	}
}





?>