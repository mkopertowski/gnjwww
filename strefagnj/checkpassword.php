<?php

ob_start();

include("../_php/mysql.php");

$tbl_name="members"; // Table name

$passwordold=$_POST['passwordold'];
$passwordnew1=$_POST['passwordnew1'];
$passwordnew2=$_POST['passwordnew2'];

$passwordold = stripslashes($passwordold);
$passwordold = $mysqli->real_escape_string($passwordold);

$passwordnew1 = stripslashes($passwordnew1);
$passwordnew1 = $mysqli->real_escape_string($passwordnew1);

$passwordnew2 = stripslashes($passwordnew2);
$passwordnew2 = $mysqli->real_escape_string($passwordnew2);

$passwordold = md5($passwordold);
session_start();

if($passwordold != $_SESSION['password']) {
	$_SESSION['passwordProblem'] = "Błędne hasło. Spróbuj jeszcze raz!";
	header("Location: changepassword.php");
}
else if($passwordnew1!=$passwordnew2) {
	$_SESSION['passwordProblem'] = "Nowe hasła są różne. Spróbuj jeszcze raz!";
	header("Location: changepassword.php");
}
else {	
	$_SESSION['info'] = "Hasło zmienione pomyślnie";
	$passwordnew2 = md5($passwordnew2);
	$_SESSION['password'] = $passwordnew2; 
	
	$sql="UPDATE $tbl_name SET password='$passwordnew2' WHERE password='$passwordold'";
	$result=$mysqli->query($sql);
	header("Location: index.php");
}

ob_end_flush();
?>