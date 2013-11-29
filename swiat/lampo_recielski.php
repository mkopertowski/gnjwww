<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

	renderHead($bSubdir);
	renderMenu($bSubdir,6,true);
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
	Nurkowanie w Lamprechtsofen
</h1>

<p>Prezes (Speleoklub Warszawski) Krzysztof Recielski nurkował w jaskini Lamprechtsofen w dwóch syfonach: Smaragdseeabfluss (około 20 m przy głębokości 3,5 m, z próbą penetracji szczeliny w dnie syfonu, która okazała się niedostępna) oraz Brillensee (około 15 m przy głębokości 4m, widoczność zerowa). Akcje odbyły się 01.01.2004. Krzysiek przygotowuje się do kolejnych nurkowań tym razem w kraju
</p>



<h3 align=right>Andrzej Szerszeń</h3>

[<a class="navismall" href="http://speleo.waw.pl/modules.php?name=News&file=article&sid=61" target="_new">Oryginalny tekst</a>]
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>