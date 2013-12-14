<?php 

function SendMail2Admins($mysqli,$subject,$message)
{
	$tbl_name="members"; // Table name
    $headers='Content-type: text/html; charset=utf-8\r\n From: admin@gnj.org.pl\r\n ';
		
	$sql="SELECT * FROM $tbl_name WHERE usertype='admin'";
	$result=$mysqli->query($sql);
	
	while ($row = $result->fetch_assoc())
	{
		mail($row['email'],$subject,$message,$headers);
	}
}

function SendMail2User($mysqli,$userid,$subject,$message)
{
	$tbl_name="members"; // Table name
    $headers='Content-type: text/html; charset=utf-8\r\n From: admin@gnj.org.pl\r\n ';
		
	$sql="SELECT * FROM $tbl_name WHERE id='$userid'";
	$result=$mysqli->query($sql);

	if($result)
	{
		$row = $result->fetch_assoc();
		mail($row['email'],$subject,$message,$headers);
	}
}





?>