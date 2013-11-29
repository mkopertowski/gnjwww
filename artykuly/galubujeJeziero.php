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
	Nurkowanie w wywierzysku Gałuboje Jeziero
</h1>
<p>We wrześniu 2004 moskiewscy nurkowie Roman Prochorow i Igor Galajda
przeprowadzili nurkowanie w wywierzysku Gałuboje Jeziero (Garginskij
Chrebet, Zachodni Kaukaz, Rosja) osiągając głębokość 180 m. Nurkowie
korzystali z komputerów VR3 i programu Proplanner, dekompresja trwała 280
min. U obydwu wystąpiła choroba dekompresyjna wyleczona później w komorze
hiperbarycznej. Maksymalna poznana głębokość wywierzyska wynosi 258 m.
</p>
<br><br>
<h3 align=right>Andrzej Szerszeń<br>
Na podstawie : www.cavediver.lehin.ru</h3>

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>