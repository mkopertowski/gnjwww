<?php

include("../_php/mysql.php");

ob_start();

$tbl_name="members"; // Table name

$email=$_POST['email'];
$password=$_POST['password'];

$email = stripslashes($email);
$email = $mysqli->real_escape_string($email);
$password = stripslashes($password);
$password = $mysqli->real_escape_string($password);
$password = md5($password);

$mysqli->query("SET NAMES 'utf8'");

$sql="SELECT * FROM $tbl_name WHERE email='$email' and password='$password'";
$result=$mysqli->query($sql);

if($result->num_rows==1){
	$row = $result->fetch_assoc();
	session_start();
	$_SESSION['email'] = $email;
	$_SESSION['password'] = $password;
	$_SESSION['userid'] = $row['id'];
	$_SESSION['usertype'] = $row['usertype'];
	$_SESSION['name'] = $row['name'];
	$_SESSION['surname'] = $row['surname'];
	
	header("Location: index.php");
}
else {
	header("Location: login.php");
}

ob_end_flush();
?>