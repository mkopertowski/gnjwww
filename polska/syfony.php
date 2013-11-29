<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

@include('../_php/publication_supp.php');

	renderHead($bSubdir);
	renderMenu($bSubdir,5,false,'POLSKA','SYFONY');
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
	SYFONY w TATRACH
</h1>

<ul class="normal">
	<li class="normal">
		<b>SYFONY W TATRACH</b> - lista wszystkich syfonów w jaskiniach tatrzańskich, w których istnieje możliwość zanurkowania <br>Stan na dzień 08.05.2012 
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./syfony_tatry.php">więcej...</a>]<br>&nbsp;
	<li class="normal">
		<b>UWAGA</b>: nurkowanie w niektórych syfonach może być przeprowadzone po uzyskaniu dodatkowych zezwoleń
</ul>




<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
