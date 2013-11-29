<?php

$bSubdir = true;
$sInclude = './_php/page.php';
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
	Hagengebirge 2004, Podwodna eksploracja w Jaskini Kasztanowej
</h1>

<p> Na prze�omie lipca i sierpnia go�cinnie wzi��em udzia� w wyprawie eksploracyjnej, kt�ra odby�a si� pod kierownictwem Marka Wierzbowskiego w masywie <b>Hagengebirge</b>. Jednym z cel�w wyprawy by�o zbadanie zalanych partii w <b>Jaskini Kasztanowej</b> i sprawdzenie mo�liwo�ci eksploracyjnych za stref� syfon�w, na poziomie -270m.</p>

<p>W sk�ad zespo�u nurkowego wchodzi� <b>Micha� Gignal</b> (Sekcja Groto�az�w Wroc�aw) oraz ni�ej podpisany. Niestety, ju� podczas mojego nurkowania rekonesansowego, problem nurkowy zosta� zamkni�ty. Uda�o mi si� pokona� pierwszy z syfon�w (-6m g��boko�ci, 20m d�ugo�ci) i osi�gn�� jeziorko, do kt�rego w  zesz�ym roku dotarto wspinaj�c si� w meandrach. W drugim z syfon�w osi�gn��em prawdopodobnie przegi�cie. Panuj�ce ciasnoty i mu� uniemo�liwi�y przedostanie si� dalej. W wyniku wniosk�w z mojego rekonesansu, uznali�my, �e podj�cie pr�by przedostania si� przez zamulone przew�enie w drugim syfonie jest zbyt niebezpieczne. Ponadto fatalna pogoda utrudniaj�ca transport sprz�tu na powierzchni oraz braku czasu, spowodowa�y, i� uznali�my, �e kolejne nurkowania by�yby trudne lub niemo�liwe do przeprowadzenia i niecelowe.</p>
<p>Syfony wraz z jeziorkiem u�o�one s� na jednej szczelinie. Dno syfon�w jest silnie zamulone. Niewielkie przep�ywy powoduj�, �e pok�ady mu�u tworz� przew�enia uniemo�liwiaj�ce przedostanie si� dalej. Nale�y jednak spodziewa� si�, �e strefa syfon�w, le��cych na tak niewielkiej g��boko�ci, ma charakter lokalny, a za ni� wyst�puj� suche ci�gi. Przedostanie si� przez syfony, poza ow� stref�, pozwoli�oby mie� w przysz�o�ci niezbit� pewno�� o ci�g�o�ci systemu w przypadku dostania si� do niej od drugiej strony, z innego otworu.</p>
<p>Serdeczne podzi�kowania dla cz�onk�w wyprawy za transport i retransport sprz�tu oraz pomoc w jaskini - bez Was, nasze nurkowanie nie by�oby mo�liwe.<p>
<p>Wyeksplorowany syfon nazwany zosta� "<b>Syfonem naszych dzieci</b>" - zar�wno Micha� jak i ja zostaniemy niebawem ojcami.

<h3 align=right>Piotr K�pkiewicz (Kempek)</h3>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>