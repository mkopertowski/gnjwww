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
	Nurkowanie w jaskiniach s�owe�skich listopad 2003
</h1>

<p>Wyjazd odby� si� w sk�adzie: Andrzej Czubalski, Iza i Darek Lermer oraz Arek Nowak. 
Nasze plany to dwa wywierzyska oraz rozpoznanie terenu, jako miejsca przysz�ego dzia�ania.
Po obowi�zkowej wizycie w Trie�cie oraz zjedzeniu pizzy jedziemy na miejsce noclegowe. 
Nazajutrz na pierwszy ogie� idzie wywierzysko Steberk.
 Wnikamy w czelu��, na pocz�tku - faktycznie - ma�o obszerna, ale w poprzek zestaw 2x10L + ja wchodzi. 
Dziura nie za wielka, lecz bardzo �adna i nie m�c�ca si�. Zgodnie z namiarami FAR u�ywamy tylko specjalnych gaz�w.
</p>

<p>Zabrany z Warszawy agregat klubowy, mimo, �e nie napracowa� si� wiele, okaza� si� niezb�dny i spisuje si� niezawodnie. Na tego typu wyjazdy - idea�.
</p>

<p>Przy okazji namierzamy liczne ponory i wywierzyska Cetnickiego Polja.</p>
<p>Nast�pnym obiektem naszej eskapady jest Jama Suchodolca odwiedzana ju� przez cz�onk�w naszego klubu. 
Czubal szuka jej w biegu i znajduje.
Dzi�ki ci GPS... Transport przez las i wnikamy w g��b. Poniewa� dla co poniekt�rych to pierwsze nurkowanie jaskiniowe, 
zwiedzane groty ko�czymy po przebyciu trzech syfon�w (+/- 200m ci�gu jaskini). 
</p>
<p>Nazajutrz, �eby nie zosta� zabitym przez �on� (nie nurkuj�c�, ale ubieraj�c� nas i b. b. pomagaj�c�) odwiedzamy Kri�nu Jamu oraz w�w�z �ela RAK , jak r�wnie� liczne wywierzyska i ponory tego rejonu. Jako za�o�yciele Federacji FAR robimy sobie pami�tkowe zdj�cie na tle wielkiego mostu na rzece RAK. Zaraz potem penetrujemy wielki ponor rzeki Rak w jaskini Tkalca Jama , ale szybko ko�czymy penetracj� po przeczytaniu tabliczki 'ku pami�ci nurka, kt�ry spenetrowa� j� tylko w jedn� stron�'..</p>
<p>Zdj�cia podwodne z Jamy Suchodolca zrobili�my zwyk�� cyfr�wk� w prostej, wodoszczelnej obudowie i pewnie by�y by fajniejsze gdyby nie to, �e robili�my je w drodze powrotnej (zm�cenie).</p>

<h3 align=right>Darek Lermer</h3>

[<a class="navismall" href="http://speleo.waw.pl/modules.php?name=News&file=article&sid=58" target="_new">Oryginalny tekst</a>]
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>