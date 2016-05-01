<?php 

$GL_DIR = '..';

include($GL_DIR."/_php/Renderer.php");
include($GL_DIR."/_php/settings.php");
include($GL_DIR."/_php/mysql.php");
include($GL_DIR."/_php/misc.php");
include($GL_DIR."/_php/components.php");

$Content = new Renderer($GL_DIR."/_tpl/listaSimple.tpl.php");

$reg = $_REQUEST['reg'];
$sqlfiltr="tags LIKE '%".$reg."%'";
$sqlfiltr.=" AND section='plany i przekroje'";

$sql= "SELECT * FROM `articles` WHERE status='ready' and ".$sqlfiltr." ORDER BY title DESC";

$result=$mysqli->query($sql);

$Content->set("articles",$result);
$Content->set("showFooter",false);
$Content->set("mysqli",$mysqli);
$Content->set("dots",$GL_DIR);

$Content->set("showbreadcrumb",true);
$Content->set("section","WIEDZA");
$Content->set("subsection","PLANY I PRZEKROJE");

$Page = new Renderer($GL_DIR."/_tpl/gnj.tpl.php");
$Page->set("Content",$Content->parse());
$Page->set("dots",$GL_DIR);
$Page->set("mysqli",$mysqli);

$Page->publish();

?>