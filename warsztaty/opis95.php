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
	Warsztaty Nurkowania w Jaskiniach WROCŁAW '95
</h1>


<p>Podczas weekendu 26 - 28.05.1995 udało się zorganizować spotkanie osób zajmujących się nurkowaniem w jaskiniach. Wzięli w nim udział Wiktor Bolek, Adam Domanasiewicz, Wacław Kozieł, Michał Stajszczyk z Sekcji Grotołazów KW Wrocław i Andrzej Czubalski, Izabella Luty, Krzysztof Starnawski - Speleoklub Warszawski oraz Anna Morgan jako osoba towarzysząca. Celem spotkania była wymiana doświadczeń dotyczących techniki pokonywania zalanych korytarzy, przy czym główny nacisk położono na zajęcia praktyczne. 
<p>W jednym z zalanych kamieniołomów w Strzeblowie (k/Sobótki) zrobiliśmy podwodny "tor przeszkód", tzn. ułożyliśmy na dnie poręczówkę stabilizując ją z różnego rodzaju punktów, jak : ciężarki, kamienie, gumy, bojka itp. W ten sposób symulowaliśmy zaporęczowanie zalanego korytarza. W oparciu o tę poreczówkę wykonywaliśmy szereg ćwiczeń. Do najciekawszych należały m. in. poruszanie się wzdłuż linki bez maski, co odpowiadało warunkom w jaskini, tzn. pogorszenie się widoczności i olbrzymi stres. Podczas innych prób wykonaliśmy przechodzenie podwodnego zacisku, nurkowanie w oparciu o depozyty z butli. 
<p>Ostatniego dnia warsztatów zdobytą wiedzę sprawdziliśmy w zalanym korytarzu, tzn. mając już strop nad głową. Wykorzystaliśmy do tego sztolnię w Bystrzycy Górnej, którą ostatnio wyeksplorowaliśmy (GiA nr 8 i 11). Zaporęczowaliśmy na stałe pierwszy zalany poziom białą linką, co powinno ułatwić dalsze wykorzystanie tego miejsce do celów treningowych. W tej akcji wzięły udział następujące osoby : K. Starnawski (poręczowanie), I. Luty, W. Kozieł, A. Domanasiewicz i A. Czubalski.
<p>Mamy nadzieję, że warsztaty staną się imprezą cykliczną i dzięki wzajemnemu wzbogacaniu wiedzy wpłyną pozytywnie na rozwój tej dyscypliny w naszym kraju.

<h3 align=right>Wiktor Bolek</h3>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>