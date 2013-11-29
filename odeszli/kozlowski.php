<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

	renderHead($bSubdir);
	renderMenu($bSubdir,7,true);
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->


<h1>
Artur Kozłowski
</h1>

<p>
Podczas nurkowania w jaskini Pollonora Co. Galway w Irlandii zginął Artur Kozłowski. Był jednym z najbardziej doświadczonych
                    polskich nurków jaskiniowych. Otrzymał KOLOSA 2010 w kategorii EKSPLORACJA JASKIŃ za eksplorację podziemnego przepływu rzeki Coole od ponoru Polltoophill do wywierzyska Polledeelin na Nizinie Gort w hrabstwie Galway w Irlandii.



<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
