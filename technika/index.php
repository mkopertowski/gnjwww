<?php 

$GL_DIR = '..';

include($GL_DIR."/_php/Renderer.php");
include($GL_DIR."/_php/settings.php");
include($GL_DIR."/_php/mysql.php");
include($GL_DIR."/_php/misc.php");
include($GL_DIR."/_php/components.php");

$Content = new Renderer($GL_DIR."/_tpl/listaSalvattore.tpl.php");

$sqlfiltr = "section='technika'";
$result=ArticleListFiltredMYSQL($mysqli,$sqlfiltr,"");

$Content->set("articles",$result);
$Content->set("showFooter",false);
$Content->set("mysqli",$mysqli);
$Content->set("dots",$GL_DIR);

$Content->set("showbreadcrumb",true);
$Content->set("section","WIEDZA");
$Content->set("subsection","TECHNIKA");

$Page = new Renderer($GL_DIR."/_tpl/gnj.tpl.php");
$Page->set("Content",$Content->parse());
$Page->set("dots",$GL_DIR);
$Page->set("mysqli",$mysqli);

$Page->publish();

?>