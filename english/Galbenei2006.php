<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);
@include('../_php/publication_supp.php');

	renderHead($bSubdir);
	renderMenu($bSubdir,10,true);
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
Galbenei Expedition 2006</h1>

<h2>Short summary...</h2>

<p>Five cave divers supported by seven cavers from Sekcja
Grotołazów Wrocław (SGW), Speleoklub Warszawski (SW) and 
Sopocki Klub Taternictwa Jaskiniowego (SKTJ)worked in Izbucul
Galbenei on 14-17.07.2006 . Current was to strong to dig out the gravel
restriction in the third sump, it will be possible with lower water level.
So we decided to focus on preparation to next expedition. Four cave divers
visited the exploration terminus.  First sump has been re-rigged,
current-proof steel core guideline has been placed. Some extra bolts has
been placed on the waterfalls for better rope routing on the waterfalls. The
support team has visited some caves entrances in the area.</p> 

<p>Next expedition is planned for November, near the date of 10-11.11.2006.</p>

<p>Special thanks to our friends from Romanian Speloclub Sphinks for their
help and hosting.</p>
<h3 align=right>Andrzej Szerszeń</h3>

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
