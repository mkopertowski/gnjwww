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
	Trudności w nurkowaniu jaskiniowym
</h1>
<h3>Wstęp</h3>
<p>Zalane podziemia tworzą specyficzne środowisko, które człowiek stara się penetrować, pomimo jego niedostępności. Jeżeli podwodne korytarze powstały w sposób naturalny - to mamy do czynienia z jaskinią. Wtedy celem penetracji jest eksploracja nowych miejsc, w których nikt jeszcze przedtem nie był, a mimo to istota ludzka jest w stanie do nich dotrzeć. W nurkowaniu jaskiniowym można wyróżnić dwa podejścia. Pierwsze z nich to pokonywanie syfonów (sump diving) - zalanych fragmentów korytarzy w wypełnionej powietrzem jaskini w celu dotarcia do kolejnych suchych ciągów. Drugie to tzw. nurkowanie w źródłach (spring diving), gdy nie zachodzi konieczność pokonywania suchej jaskini. Tutaj celem samym w sobie jest poznawanie podwodnego labiryntu. Zalane korytarze mogą również powstawać w wyniku działalności człowieka, np. w opuszczonych kopalniach czy budowlach hydrotechnicznych. Można tu również wymienić nurkowania na wrakach. Przy nurkowaniu w zalanych sztucznych obiektach nie można mówić o eksploracji w takim sensie jak w jaskiniach. Jednak te obiekty mogą mieć walory szkoleniowe bądź rekreacyjne.</p>

<p align=center>
	<img src="./img/trudnosci_1.jpg" alt="Nurek po powrocie z syfonu" height=375 width=500><br>
	<i>Nurek po powrocie z syfonu</i>
</p>

<p>Nurkowanie w tych wszystkich omówionych miejscach ma podobny charakter i wymaga odmiennego podejścia niż nurkowanie na wodach otwartych. W niniejszym opracowaniu zostaną omówione jedynie te aspekty, które w sposób istotny różnią się od standardowego podejścia.</p>

<h3>Niebezpieczeństwa środowiska</h3>
<p>W zalanych podziemiach występuje szereg niebezpieczeństw, których musimy unikać stosując odpowiedni sprzęt i technikę poruszania się.</p>
<ul>
	<li class="normal">Przede wszystkim w tym środowisku strop korytarza znajduje się pod wodą. Stąd też nie ma możliwości awaryjnego wynurzenia się bezpośrednio na powierzchnię. Implikuje to o wiele bardziej rygorystyczne podejście do zasad bezpieczeństwa : układy podtrzymujące życie musza być zdublowane.
	<li class="normal" >W zalanym korytarzu bardzo łatwo można stracić orientację, zwłaszcza że woda może ulec bardzo łatwo zmąceniu. Drogę powrotu zawsze musi wskazywać poręczówka.
	<li class="normal">Pod wodę zabieramy ograniczona ilość mieszanek oddechowych (np. powietrza), która limituje czas nurkowania. Przed wyczerpaniem się mieszanek musimy zdążyć powrócić do punktu wyjścia. Dlatego też stosujemy regułę jednej trzeciej prz planowaniu ilości mieszanek oddechowych.
	<li class="normal">Profil nurkowania jest określony przebiegiem korytarza. Nie możemy uniknąć zejścia na dana głębokość. Musimy dostosowywać prędkość poruszania się do wymogów dekompresji. Rozwiązaniem tego problemu jest precyzyjne planowanie dekompresji i stosowanie odpowiednich mieszanek oddechowych.
	<li class="normal">Pokonywany korytarz może być bardzo wąski, tak że przepłynięcie będzie wymagało przeciskania się pod woda. Takie miejsca nazywamy zaciskami. Przed wejściem w taki zacisk należy na chłodno przemyśleć sytuacje, aby nie ulec zaklinowaniu czy wpadnięciu w panikę.
	<li class="normal">W komorach miedzy syfonami mogą znajdować się trujące gazy jak : CO, H2S powstające w wyniku rozkładu substancji organicznych. Natomiast tlen mógł zostać zużyty przez poprzedników. W przypadkach wątpliwych należy badać stężenie gazów odpowiednimi indykatorami. Dotyczy to zwłaszcza starych sztolni.
	<li class="normal">W zalanych korytarzach może występować silny prąd. Zjawisko to nasila się w zwężeniach przekroju. W takiej sytuacji nie należy rozpoczynać nurkowania z prądem, gdyż powrót może być utrudniony bądź nawet niemożliwy.
	<li class="normal">Kolejne niebezpieczeństwo stanowią osuwiska luźnych kamieni, które w wyniku ingerencji płetwonurka mogą odciąć drogę odwrotu. Z taka sytuacja można się spotkać podczas eksploracji. Należy wtedy ocenić stabilność takiej struktury biorąc pod uwagę kierunek prądu.
</ul>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>