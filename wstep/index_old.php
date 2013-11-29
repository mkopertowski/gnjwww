<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

	renderHead($bSubdir);
	renderMenu($bSubdir,1,false);
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
	WSTĘP
</h1>
<br>
<ul class="normal">
	<li class="normal">
		<b>Definicja</b>. Nurkowanie w jaskiniach (a także w zalanych podziemiach powstałych w sposób sztuczny, np. w sztolniach) polega na pokonywaniu korytarzy jaskiniowych, które są wypełnione wodą po strop. Ogólniej - można określić jako nurkowanie w zalanych podziemiach...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./definicja.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Historia</b>. Pierwsze nurkowania jaskiniowe miały miejsce w Wielkiej Brytanii w okresie międzywojennym. Nurkowania prowadzono w skafandrze klasycznym, zasilanym powietrzem z powierzchni... 
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./historia.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Rejony</b>. Rejonów, gdzie można uprawiać nurkowanie jaskiniowe jest stosunkowo niewiele. Najpopularniejsze są te miejsca, które nie wymagają żmudnego transportu sprzętu nurkowego przez suchą jaskinię...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./rejony.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Rekordy</b>. Najdłuższe nurkowanie w pojedynczym syfonie przeprowadzili Michael Waldbrenner i Reinhard Buchaly  w La Doux de Coly na odległość ponad 5000m oraz Jarrod Jablonski i Todd Kincaid w Manatee Springs 3700 m...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./rekordy.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Sprzęt w nurkowaniu jaskiniowym</b>. W nurkowaniu jaskiniowym używa się sprzętu, które bazuje na wyposażeniu płetwonurka na wodach otwartych. Jednak w tym sprzęcie wprowadza się kilka zasadniczych modyfikacji, które pozwalają uniknąć niebezpieczeństw środowiska...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./sprzet.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Trudności w nurkowaniu jaskiniowym</b>. Specyfika nurkowania w zalanych podziemiach wynika z charakteru środowiska, które jest połączeniem podziemnych korytarzy i podwodnych przestrzeni. Te czynniki determinują niebezpieczeństwa środowiska...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./trudnosci.php">więcej...</a>]<br>&nbsp;
	</li>
</ul>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>