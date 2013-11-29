<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

	renderHead($bSubdir);
	renderMenu($bSubdir,11,true);
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
	Wzór Karty Członkowskiej GNJ
</h1>

<p align=center>
	<a href="./img/wzor_karty_czlonkowskiej_1.jpg" target="_new">
		<img src="./img/wzor_karty_czlonkowskiej_1_small.jpg" alt="Wzór Karty Członkowskiej - awers" height=249 width=400></a><br>
	<i>Wzór Karty Członkowskiej - awers</i>
</p>

<p align=center>
	<a href="./img/wzor_karty_czlonkowskiej_2.jpg" target="_new">
		<img src="./img/wzor_karty_czlonkowskiej_2_small.jpg" alt="Wzór Karty Członkowskiej - rewers" height=248 width=400></a><br>
	<i>Wzór Karty Członkowskiej - rewers</i>
</p>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
