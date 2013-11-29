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
	Warsztaty Nurkowań Jaskiniowych GĘBCZYCE 2005 
</h1>
<p>Dziesiąte Warsztaty Nurkowań Jaskiniowych odbyły się tradycyjnie w długi weekend, który w tym roku wypadł w dniach 26-29 maja. Jak zwykle spotkaliśmy się na Dolnym Śląsku. Rejon ten jest najlepszy w kraju do prowadzenia tego typu spotkań, ponieważ obfituje w kamieniołomy i sztolnie. Większość nurkowań była odbywała się w kamieniołomie w Gębczycach, a niektórzy uczestnicy prowadzili akcje w obiektach podziemnych. Pojawili się zarówno doświadczeni jak i osoby stawiające pierwsze kroki w nurkowaniu jaskiniowym. Udział wzięli nurkowie: Lucyna Cieślik, Piotr Dąbrowski, Konrad Dubiel, Janusz Gąsecki, Rafał Górecki, Dominik Graczyk, Izabela Kapuściarek, Jarosław Kur, Mirek Kopertowski, Bartosz Lizak, Paweł Mordkowicz, Michał Stajszczyk,  Andrzej Szerszeń, Mirek Wróż i Piotr Zimnicki. Pojawiły się też osoby towarzyszące.
</p>

<p>Naszym celem była oczywiście wymiana informacji na tematy związane z nurkowaniem w jaskiniach. Podczas zajęć teoretycznych omówiliśmy następujące zagadnienia: specyfika środowiska, sprzęt do nurkowania jaskiniowego, poruszanie się w jaskini, planowanie zużycia mieszanek oddechowych, korzystanie z depozytów, autoratownictwo, sporządzanie planów, specjalne konfiguracje sprzętu - konfiguracja boczna, geologia i morfologia jaskiń. Podczas zajęć praktycznych, zarówno suchych - w ośrodku, jak i pod wodą  przećwiczyliśmy następujące techniki: poruszanie się w zalanych jaskiniach, poręczowanie, kartowanie, wykorzystywanie depozytów z mieszankami oddechowymi, sytuacje autoratownicze, pływanie w konfiguracji bocznej.</p>

<p>Charakterystyczne dla tegorocznych Warsztatów było duże doświadczenie, dobre przygotowanie i zaangażowanie wszystkich uczestników. Tendencja ta daje się zaobserwować z roku na rok i zapewne odzwierciedla trendy panujące w polskim nurkowaniu w ogóle. Techniki, które jeszcze kilka lat temu stosowane były przez wąskie grono wtajemniczonych i zarezerwowane wyłącznie dla nurkowań zaawansowanych (jaskiniowych, technicznych), obecnie stały się powszechne i znajdują miejsce nie tylko w trudniejszych nurkowaniach, ale również jako podstawowa, uniwersalna droga do wszelkiego typu zanurzeń, gwarantując przy tym wysoki poziom bezpieczeństwa. Standardem stało się korzystanie z zestawów dwóch butli i dublowanie istotnych elementów wyposażenia, stosowanie suchych skafandrów oraz oświetlenia dużej mocy. Dzięki temu sprawy podstawowe były dla wszystkich jasne, a wymiana doświadczeń przebiegała na wysokim poziomie.</p>

<p>Organizatorzy dziękują wszystkim za czynny udział i liczą na spotkania na wspólnych wyprawach oraz na kolejnych Warsztatach w przyszłym roku.</p>

<h3 align=right>Tekst: Andrzej Szerszeń</h3>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
