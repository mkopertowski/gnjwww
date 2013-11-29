<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);
@include('../_php/publication_supp.php');

	renderHead($bSubdir);
	renderMenu($bSubdir,6,true);
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
Rumunia 2006 - Izbucul Galbenei</h1>

<h3 align=right>Lipiec 2006</h3>

<p>Kierując się ciekawością, dokąd prowadzi trzeci syfon w wywierzysku Izbucul Galbenei, udaliśmy się do Rumuni kontynuować jego eksplorację rozpoczętą w ubiegłym roku. Tym razem oprócz grupy speleonurkującej w składzie: Lucyna Cieślik (SKTJ), Dominik “Honzo” Graczyk (NZ, Warszawa), Mirek Kopertowski (SGW), Michał Stajszczyk (SGW) i niżej podpisany – Andrzej Szerszeń (SW) wybrał się z nami duży zespół speleoturystyczny: Kasia Kędracka, Magda Motylińska, Maciek “Lama” Olinkiewicz, Paula od Lamy, Krzysztof Recielski (większość SW, wszyscy Warszawa), oraz Łukasz Drozd (SGW) i Paulina (NZ). Wyprawa odbyła się w dniach 14-17.07.2006.</p>

<p>Mikroklimat Bihoru sprawił, że codziennie padały deszcze, utrzymując silny prąd i podwyższony poziom wody. Przeprowadziliśmy trzy akcje nurkowe , jednak nie udało się pokonać żwirowej wydmy na przodku zlokalizowanym na głębokości 17 m w trzecim syfonie. Prąd wody w zwężeniu był na tyle silny, że uniemożliwiał zbliżenie się do wydmy. Oprócz Mirka, który dotarł do przodka z zamiarem eksploracji, odwiedzili go również Honzo i Lucyna, przygotowując się do kolejnych akcji. Wykonane zostały również zdjęcia w suchych przestrzeniach między syfonami oraz dodatkowe oporęczowanie wodospadów w celu ułatwienia transportu i ochrony lin przed płynącą wodą.</p>

<p>Ważną innowacją było zorganizowanie biwaku przed trzecim syfonem z jedzeniem i ciepłymi napojami, co znacząco poprawiło stan psychofizyczny nurków. Na akcję zabrana została apteczka szturmowa, a w Polsce były przygotowane nosze ratownicze na wypadek konieczności zorganizowania transportu przez syfony.</p>

<p>Chciałbym uprzejmie podziękować grupie speleoturystycznej za pomoc w transportach sprzętu i dzielne oczekiwania na nasz powrót, oraz Andrzejowi - kierowcy wyprawowego busa za cierpliwe oczekiwanie i sprawny transport.</p>
<h3 align=right>Andrzej Szerszeń</h3>

<a class="navi" href="../eksploracja/rumunia2005.php">Relacja z poprzedniego wyjazdu (Listopad 2005).</a>

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
