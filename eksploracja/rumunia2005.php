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
Rumunia 2005 - Izbucul Galbenei</h1>

<h3 align=right>Listopad 2005</h3>

<p>W dniach 10-13.11.2005  Dominik Honzo Graczyk (NZ, Warszawa), Mirek Kopertowski (SGW) oraz niżej podpisany - Andrzej Szerszeń (SW) byli na krótkiej wyprawie w Górach Bihor w Rumunii. Celem wyprawy było podjęcie eksploracji w wywierzysku Izbucul Galbenei. 
</p>

<p>Podczas poprzednich akcji w 2003 roku nie udało się znaleźć drogi w trzecim syfonie. Przez niemal 2 godziny szukałem dalszej drogi, krążąc po olbrzymiej sali. Problemem były bardzo rozległe przestrzenie i bardzo mała przejrzystość wody rzędu 1 m.</p>
<p>Po całonocnej podróży malowniczy Bihor przywitał nas piękną jesienną pogodą. Korzystając z gościnności robotników leśnych, zatrzymaliśmy się w Canton Paluesa. Pierwszą zimną noc spędziliśmy w namiocie, drugą w niezwykle klimatycznym pomieszczeniu w domu robotników.</p>

<p>Przeprowadziliśmy jedną akcję nurkową, czas między pierwszym zanurzeniem a ostatnim wynurzeniem wyniósł niemal 8 godzin. Stan wody był na tyle niski, że drugi syfon zamienił się w jeziorko nie wymagające nurkowania. Wspomagani przez Dominika zanurkowaliśmy z Mirkiem w trzecim syfonie i wynurzyliśmy się w obszernej sali – w znanym z poprzednich akcji miejscu z trudno dostępnym wyjściem z wody. Rozpoczęliśmy wspinanie, jednak kilkanaście metrów powyżej lustra wody komin skończył się ślepo. Widać było z resztą że jest to stary ciąg, z bogatą szata naciekową, do którego nie dociera woda. Wycofaliśmy się do oczekującego nas Dominika. Postanowiłem jeszcze raz spróbować poszukiwań dalszej drogi w trzecim syfonie. Zdecydowałem, że będę okrążał wielką salę na stałych głębokościach. Założenie okazało się skuteczne, bo już przy pierwszej próbie na głębokości 8 m (2 m powyżej dna), znalazłem ładny wymyty korytarz z wyczuwalnym przepływem wody i żwirkiem zalegającym na spągu. Łagodnie opadający korytarz, doprowadził mnie do głębokości 17 m, gdzie żwir tworzył wydmę. Dalsze nurkowanie wymagałoby rozgarnięcia żwiru, więc postanowiłem zawrócić. Zadowoleni z postępu w eksploracji wycofaliśmy się z jaskini. W międzyczasie Dominik ospitował wodospad prowadzący to syfonu trzeciego, dzięki czemu jego pokonywanie stało się wygodniejsze i bezpieczniejsze.
</p>

<p>Kolejnego dnia zwiedziliśmy jeszcze wchłon systemu – Cetatile Ponorului oraz pojechaliśmy do Garda de Sus odwiedzić doktora Christiana Ciuboterescu i zobaczyć postępy w budowie jego słynnego domu.</p>
<h3 align=right>Andrzej Szerszeń</h3>

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
