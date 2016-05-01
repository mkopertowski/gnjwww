<?php 

$GL_DIR = '..';

include($GL_DIR.'/_php/Renderer.php');
include($GL_DIR.'/_php/settings.php');
include($GL_DIR.'/_php/mysql.php');
include($GL_DIR.'/_php/misc.php');
include($GL_DIR.'/_php/components.php');

$Content = new Renderer($GL_DIR.'/_tpl/partnerzy.tpl.php');

$Page = new Renderer($GL_DIR.'/_tpl/gnj.tpl.php');
$Page->set("Content",$Content->parse());
$Page->set("dots",$GL_DIR);
$Page->set("mysqli",$mysqli);

$Page->publish();

?>
