<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

	renderHead($bSubdir);
	renderMenu($bSubdir,3,true);
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
Lista sprzętu potrzebnego na Warsztaty Nurkowania Jaskiniowego
</h1>
<!--
<a class="submenu" href="./pdf/sprzet_wnj.pdf" target="_new">Pobierz w formie pliku PDF</a>
-->
<h2> 1. Sprzęt powietrzny</h2>
<h3> 1.1 <a class="submenu" href="./automat.php">Automaty</a></h3>
<ul>
	<li class="normal">Dwa (2) automaty oddechowe wraz z manometrami i odpowiednimi wężami do inflatorów, zalecane żeby jeden umożliwiał montaż z prawej strony, (np. Posejdon)</li>
	<li class="normal">Automat oddechowy wraz manometrem do butli depozytowej</li>
	<li class="normal">Pętla szyjna z linki gumowej do wpięcia automatów *</li>
        <li class="normal">Małe karabinki do wpięcia drugich stopni automatów w gumkę szyjna</li>
	<li class="normal">Oznaczenie automatów kolorami przy pomocy taśmy izolacyjnej *</li>

</ul>
<h3> 1.2 Butle - konfiguracja podstawowa</h3>
<ul>
	<li class="normal">Zestaw 2 identycznych butli o pojemności minimum 8 l, <b> BEZ </b> łącznika miedzybutlowego</li>
	<li class="normal">Urządzenie wypornościowe wraz z noszakiem umożliwiające zamontowanie ww. zestawu (np. skrzydło)</li>
	<li class="normal">Zalecane osłony zaworów</li>
	<li class="normal">Butla depozytowa o poj. minimum 4 l wraz systemem mocującym</li>
</ul>
<!--
<h3> 1.3 <a class="submenu" href="./sidemount_pl.php">Butle - konfiguracja boczna i depozyty</a></h3>
<ul>
	<li class="normal">Dwie oddzielne, identyczne butle o poj. minimum 4 l,</li>
	<li class="normal">Wyposażenie butli do zamocowania po boku (linki przy zaworach, uchwyt na dole, karabinki) *</li>
	<li class="normal">Uprząż do mocowania butli - taśma piersiowa oraz pas biodrowy z pierścieniami (d-ring) *</li>
</ul>
-->
<h2> 2. Oświetlenie</h2>
Minimum 3 źródła światła, preferowane 4, wszystkie mocowane na kasku. <br>
<ul>
	<li class="normal">Dwie małe latarki, (np. Lumen 6)</li>
	<li class="normal">Dwie <a class="submenu" href="./latarki.php">latarki przewodowe </a>zasilane z zewnętrznych akumulatorów</li>
	<li class="normal">Kask z otworami do mocowania latarek, preferowany Ecrin Roc firmy Petzl (lub kask hokejowy)</li>
</ul>
<h2> 3. Pozostały sprzęt</h2>
<ul>
	<li class="normal">Skafander nurkowy</li>
	<li class="normal">Płetwy</li>
	<li class="normal">Maska, oraz maska zapasowa</li>
	<li class="normal">Komputer nurkowy lub przyrządy do pomiaru czasu i głębokości</li>
	<li class="normal">Kompas mocowany na zewnętrznej stronie dłoni *</li>
	<li class="normal">Sekator kowadełkowy (np. Wolf Garden RG 19 do róż) wraz z pochwą do mocowania na ręce *</li>
	<li class="normal">Tabliczka do pisania zakładana na rękę *</li>
	<li class="normal">Dwa ciężarki balastowe, luzem (do poręczowania) *</li>
	<li class="normal">Gumki z dętki samochodowej o szerokości 15 mm- 50 szt. *</li>
	<li class="normal"><a class="submenu" href="./kolowrotek.php">Kołowrotek</a> jaskiniowy wraz z poręczówką min. 100 m *</li>
	<li class="normal"><a class="submenu" href="./img/sidemount_7.jpg" target="_new">Karabinki</a> do mocowania w/w sprzętu, alpinistyczne 
	 najlepiej o gładkim zamku (bez 'ząbka')  lub karabinki 'tłokowe' 6 szt.</li>
</ul>
<h2> 4. Wyposażenie opcjonalne</h2>
<ul>
	<li class="normal"><a class="submenu" href="./img/sidemount_16.jpg" target="_new">FCD</a> - zawór odcinający drugi stopień automatu wraz z zaworem bezp. do pierwszego stopnia </li>
	<li class="normal">Zapasowe przyrządy do pomiaru czasu i głębokości</li>
	<li class="normal">Butle - konfiguracja boczna (opcjonalnie)</li>
    <ul>
       <li class="normal">Dwie oddzielne, identyczne butle o poj. minimum 4 l</li>
       <li class="normal">Wyposażenie butli do zamocowania po boku (linki przy zaworach, uchwyt na dole, karabinki) * </li>
       <li class="normal">Uprząż do mocowania butli - taśma piersiowa oraz pas biodrowy z pierścieniami (d-ring) * </li>
    </ul>	 
</ul>
<b>
 * możliwość  skonfigurowania w trakcie WNJ  <br>
</b>

<h3>Uczestnicy  zobowiązani są posiadać w/w komplet sprzętu. Istnieje możliwość zakupienia lub wypożyczenia brakujących 
    elementów sprzętu po wcześniejszym uzgodnieniu z organizatorami.</h3>

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>