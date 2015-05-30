<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

@include('../_php/publication_supp.php');
include('../_php/mysql.php');
include('../_php/misc.php');

	renderHead($bSubdir,'','');
	renderMenu($bSubdir,5,false,'POLSKA','SZTOLNIE, STUDNIE, KOPALNIE');
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
	POLSKA - SZTOLNIE, STUDNIE, KOPALNIE
</h1>

<ul class="normal">

<?php

$sqlfiltr="section='polska' AND tags LIKE '%kopalnie%'";

ArticleListFiltredMYSQL($mysqli,'..',$sqlfiltr);

?>
	
  <BR>
	<li class="normal">
		<b>Studnia w Srebrnej Górze</b> - Srebrna Góra - poligon doświadczalny<br>
		Jesienią 1997 roku powróciliśmy do studni w Srebrnej Górze. Zaletą tego miejsca jest stosunkowo łatwo dostępna duża głębokość. Do przeprowadzenia tutaj treningowych zanurzeń skłoniły nas perspektywy eksploracji zalanych ciągów...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./srebrnagora2.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Studnia w Srebrnej Górze</b> - Srebrna Góra - co było za zamkniętymi drzwiami?<br>
		Studnia ta jest położona bardzo nisko, na powierzchni, w zasadzie jeszcze w granicach Srebrnej Góry. Można do niej łatwo dojść z parkingu pod przełęczą, a dostępu do środka  bronią olbrzymie betonowe płyty. Po ich odsunięciu ukazał się nam wlot do studni. Do lustra wody było bardzo blisko około 4m...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./srebrnagora3.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Wyrobiska w Stolcu</b> - Nurkowanie w Stolcu<br>
		W artykule "Jaskinie i sztolnie Sudetów (14)" Maciej Pawełczyk opisuje tajemnice podziemnych wyrobisk w Stolcu, stwierdzając, że jest tam ciekawy problem do nurkowania - w miejscu, które określił jako Jeziorko II...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./stolec.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Sztolnia w Tąpadłach</b> W dniu 18 październka 2003 w ramach przygotowań do eksploracji Syfonu Mysi w Jaskini Wielka Śnieżna obyła się akcja nurkowa w tej sztolni. Wiktor Bolek zanurkował w w konfiguracji bocznej 2x 7l. Rozwarstwienie nie było widoczne ... &nbsp;&nbsp;&nbsp;[<a class="navismall" href="./tapadla200310.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">	
		<b>Sztolnia w Tąpadłach</b> W dniu 21 września 2003 obyła się akcja nurkowa w tej sztolni. Michał Gignal zanurkował w obydwu chodnikach odchodzących od szybu. Woda była rozwarstwiona ... &nbsp;&nbsp;&nbsp;[<a class="navismall" href="./tapadla200309.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Kopalnia na przełęczy Tąpadła</b> - Koniec eksploracji w sztolni na przełęczy Tąpadła<br>
		Na przestrzeni ostatnich kilku lat zalany szyb w tej sztolni stanowił dla nas cel weekendowych wyjazdów. Podczas kolejnych nurkowań coraz lepiej poznawaliśmy tajemnicze piętro kopalni, biorące swój początek na dnie tego szybu...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./tapadla.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Sztolnia odwadniająca w Wałbrzychu</b> - Opis zalanego chodnika w sztolni odwadniającej rejon miasta Wałbrzycha<br>
		Przy użyciu technik nurkowych, 21 grudnia przeprowadzono penetrację całkowicie zalanego chodnika idącego od szybu "w Porcelania" w kierunku południowo- zachodnim (do szybu "Julia"). W akcji wzięli udział nurkowie : Wiktor Bolek, Michał Stajszczyk...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./walbrzych.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Sztolnia przy Przełęczy Walimskiej</b> - Walim i Kamionki - problemy nurkowe<br>
		...Nie mniej jednak od pewnego już czasu pojawiały się pogłoski o obiektach pogórniczych na tym terenie, posiadających dolne, całkowicie zalane poziomy. Ostatnio udało się nam zlokalizować jedną z takich sztolni. Jest ona...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./walim.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Wieliczka</b> - Wieliczka jest najbardziej znaną kopalnią soli w Polsce. Na początku lat 90. ubiegłego stulecia na IV poziomie wdarła się do tej kopalni słodka woda...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./wieliczka_01_2004.php">więcej...</a>]<br>&nbsp;
	</li>
</ul>

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
