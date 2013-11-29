<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

	renderHead($bSubdir);
	renderMenu($bSubdir,4,true);
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
	Warsztaty Nurkowania Jaskiniowego 2004
</h1>
<!--<h3 align=center>Mapa aż do czasu ogłoszenia o nowych Warsztatach Nurkowania Jaskiniowego<br>będzie niedostępna.</h3>-->

<div align=center>
<a href="./img/mapa.jpg" target="_new"><img src="./img/mapamala.jpg" border=0 alt="Mapa dojazdu do Gębczyc (260 KB)"></img></a>
<p>Kliknij na mapę w celu pobrania wersji w formacie 1500 X 1850 px (260 KB)</p>
</div>


<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>