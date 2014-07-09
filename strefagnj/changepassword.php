<?php 

session_start();
if(!isset($_SESSION['email'])){
	header("Location:login.php");
}

include("../_php/mysql.php");
include("./_php/RendererGNJ.php");

$Page = new RendererGNJ("./_tpl/changepassword.tpl.php");

$Page->setInfo("Zalogowany: ".$_SESSION['name']." ".$_SESSION['surname']);

if(isset($_SESSION['passwordProblem']))
{
	$Page->set("passwordProblem",$_SESSION['passwordProblem']);
	unset($_SESSION['passwordProblem']);
}

$Page->publish();
?>