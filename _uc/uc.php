<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

	renderHead($bSubdir);
	renderMenu($bSubdir,0,true);
	renderGallery($bSubdir,false);
	renderCounter();
	renderCentral($bSubdir);
?>
<!--============================= CONTENTS START ==========================================-->
<p>&nbsp;</p>
<p align="center">
	<img src="./_uc.gif">
</p>
	<h1 align=center>Strona w trakcie przygotowania</h1>
	<h3 align="center">Zapraszamy niebawem</h3>
	<p>&nbsp;
	<center><a class="navi" href="javascript:history.go(-1);">Powrót</a></center>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>