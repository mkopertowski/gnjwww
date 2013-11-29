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
	Wypadek w Sotano de San Augustin
</h1>

<p>Ian Rolland, jeden z najbardziej doświadczonych brytyjskich płetwonurków jaskiniowych, zginął 27 marca 1994 eksplorując ostatni syfon w Sotano de San Augustin w Meksyku.
<p>Ian działał na końcu jaskini, zmieniając się na prowadzeniu z amerykańskim płetwonurkiem Kenny Broad'em. Tegp dnia Kenny przepłynął ostatni syfon i odkrył za nią piaszczystą komorę. Obydwaj używali prototypowego automatu Billa Stone'a o obiegu zamkniętym (rebreather) - bardzo nowoczesnego sprzętu, który Ian znał doskonale gdyż był on mocno zaangażowany przez wiele lat przy budowie i testowaniu tego aparatu. Jego doświadczenie przyczyniło się w znacznym stopniu do ulepszenia obecnej wersji aparatu.
<p>Ian planował trzygodzinną akcję, w czasie której zamierzał eksplorować wspomnianą komorę i odnaleźć dalszą drogę. Kiedy jego nieobecność przedłużała się, Kenny zaczął składać rezerwowy rebreather i wrócił do jaskini ratować kolegę. Po przetestowaniu rezerwowego wyposażenia Kenny przepłynął przez syfon dotarł do komory i nieoczekiwanie odnalazł ciało Iana leżące na dnie jeziorka syfonowego, w czystej, otwartej wodzie. Późniejsze testy jego aparatu pokazały, że był w pełni sprawny. Ian, według zwykłej praktyki, wychodząc z wody, aby przejść przezkomorę, zamknął dopływ tlenu. Okazało się, że ponownie zanurzając się nie włączył go na powrót.
<p>Członkowie wyprawy wynieśli ciało Iana wespół z wyprawą Cuetzalan. Żona Iana, Erica, rozsypała jego prochy w pobliżu szczytu Ben Nevis 23 kwietnia 1994.

<h3 align=right>Na podstawie: "Underwater Speleology" July/August 1994, Accident Report R. Palmer<br>
Tłumaczył : Wiktor Bolek</h3>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>