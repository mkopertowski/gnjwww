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
	Wladimir Kiseljow - pożegnanie
</h1>

<p>8 marca 1995 roku podczas nurkowania w jaskini ŻW-52 zginął znakomity rosyjski grotołaz i płetwonurek Wladimir Kiseljow. Był on znaną postacią na arenie międzynarodowej, co już samo w sobie jest nielada osiągnięciem. Za czasów komunizmu Związek Radziecki stanowił zamkniętą enklawę. Kiseljow jednak przenikał żelazną kurtynę, uczestniczył w międzynarodowych kongresach, był również w Polsce, wygłaszał prelekcje i pokazywał slajdy. Dostarczał do zagranicznych wydawnictw dane o eksploracji w jaskiniach na terenie swojego kraju, m. in. do atlasu Courbona czy monografii Martyna Farra o nurkowaniu w jaskiniach. 
<p>Jaskinia ŻW-52 jest położona na Biełamorsko-Kulojskim plateau w rejonie Archangielskim. Celem nurkowania prowadzonego przez Kiseljowa było kontynuowanie eksploracji w syfonie, w którym poprzednio przepłynął odległość 190m. Miał ze sobą trzy butle z zapasam powietrza na około godzinę. Gdy po trzech godzinach nie powrócił na powierzchnię rozpoczęto akcję poszukiwawczą. Jednak dopiero następnego dnia, po dostarczeniu z pobliskiego miasteczka zapasowego aparatu, jego partner Roman Prochorow mógł rozpocząć poszukiwania w syfonie. Po przepłynięciu 80m znalazł płetwę Kiseljowa z zerwanym paskiem. Na setnym metrze natknął się na dwie butle. Obie były puste, a wąż jednego z automatów był zaplątany w poręczówkę. Prochorow popłynął dalej. W odległości 220m od jeziorka natknął się na pozostawiony luźno kołowrotek, wziął go i dopłynął do 250m, gdzie przywiązał poręczówkę do oczka w ścianie i rozpoczął powrót. Około 60m przed jeziorkiem znalazł ciało Kiseljowa unoszące się pod stropem (korytarz w tym miejscu miał 3-4 metry wysokości). Ostatnia butla była również pusta. Jak wykazała późniejsza sekcja zwłok przyczyną śmierci było utonięcie.
<p>Najprawdopodobniej kolejność wydarzeń była następująca : Kiseljow pozostawił na setnym metrze jedną butlę w depozycie, podczas powrotu jeden z węży zaplątał się w poręczówkę, gdyż ta nie była zastabilizowana na końcu. Próbując rozplątać poręczówkę zużył całe powietrze z dwóch butli. Wtedy postanowił porzucić cały ten chłam i wrócić na resztkach powietrza w trzeciej butli. Jednak gdy pracował bardzo mocno płetwami zerwał się pasek w jednej z nich, co zmusiło go do jeszcze większego wysiłku. Ostatecznie nałożyło się zbyt wiele nieszczęśliwych przypadków i nie starczyło mu już powietrza by dopłynąć do powierzchni. 
<p>W osobie Wladimira Kiseljowa świat stracił zapalonego eksploratora, doskonałego grotołaza i płetwonurka. Jego koledzy prządkują obecnie pozostałe po nim olbrzymie archiwum oraz noszą się z myślą o wydaniu monografii i kasety wideo poświęconych jego życiu i działalności.

<h3 align=right>Tłumaczenie - Wiktor Bolek</h3>
<h3 align=right>Na podstawie Underwater Speleology 3/95</h3>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>