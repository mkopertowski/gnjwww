
<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

@include('../_php/publication_supp.php');

	renderHead($bSubdir,'','');
	renderMenu($bSubdir,12,false,'OGŁOSZENIA');
	renderGallery(true,false);
	renderUpdates($bSubdir);
	renderCentral(true);
	
?>
		
<!--============================= CONTENTS START ==========================================-->



<h1>
	OGŁOSZENIA
</h1>


<p>&nbsp;</p>
<p>Aby dodać nowe ogłoszenie prosimy wysłać e-maila <a class="navi" href="mailto:relic/at/poczta.onet.pl">TUTAJ</a>
</p> 

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
