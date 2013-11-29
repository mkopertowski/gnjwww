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
	XI Warsztaty Nurkowania Jaskiniowego 2006 
</h1>

XI Warsztaty Nurkowań Jaskiniowych odbyły się według nowej, innej niż dotychczas formuły. Zamiast jednego czterodniowego spotkania zaproponowaliśmy dwa: pierwsze we Wrocławiu, drugie w Słowenii lub w Tatrach w zależności od możliwości i preferencji uczestników.

<h3>Etap 1 – Wrocław</h3>

Udział wzięli: Sebastian Dobrowolski, Krzysztof??? Dobrowolski, Arkadiusz Nowak, Rafał Koryś, Michał Plata, Łukasz Ogiński oraz Lucyna Cieślik, Rafał Górecki, Mirek Kopertowski, Paweł Mordkowicz, Michał Stajszczyk, Andrzej Szerszeń. Zajęcia odbywały się w gościnnej siedzibie Centrum Nurkowego Aquamatic Rafała Góreckiego oraz na basenie firmy Ocean Pro. Nurkowanie odbyło się w kamieniołomie w Gębczycach. Podczas zajęć teoretycznych i praktycznych zaprezentowano i przećwiczono podstawowe techniki stosowane w nurkowaniu jaskiniowym. Etap ten stanowił przygotowanie do nurkowań w jaskiniach.

<h3>Etap 2A – Słowenia</h3>

Udział wzięli: Rafał Górecki, Mirek Kopertowski, Rafał Koryś, Andrzej Szerszeń, Mirek Wróż oraz towarzyszący Kamil Bielecki. Przeprowadzono nurkowania w jaskiniach Suchadolca, Bilpa, Steberk. Nurkowanie w tych atrakcyjnych, a za razem stosunkowo łatwych jaskiniach pozwoliło wykorzystać i rozwinąć techniki nabyte podczas pierwszego etapu. Obejrzeliśmy także rejon południowo-wschodniej Słowenii, lokalizując kilka nowych dla nas wywierzysk. Andrzej zanurkował dodatkowo w jaskiniach Veselova Jama (Żerovica) i Izvir Obrscice.

<h3>Etap 2 B – Tatry</h3>

Etap ten dostępny był tylko dla grotołazów posiadających Kartę Taternika. Udział wzięli Mirek Kopertowski, Paweł Morkowicz, Łukasz Ogiński, Michał Plata, Andrzej Szerszeń, oraz towarzysząca Magda Motylińska. Nurkowaliśmy w jaskiniach Kasprowa Niżnia i Dudnica. Poziom wody był wysoki, gdyż w przeddzień naszego przyjazdu padały deszcze. W Kasprowej Niżniej poziom wody sięgał otworu, więc cały korytarz był zalany i warunki do nurkowania były bardzo dobre. W Dudnicy silny prąd płynący wgłąb jaskini ograniczył nurkowanie do pierwszego syfonu.

<h3>Podsumowanie</h3>

Nowa formuła znacznie uatrakcyjniła Warsztaty i uczyniła je bardziej interesującymi. Mamy nadzieję, że ich absolwenci będą nurkować w zalanych obiektach podziemnych i staną się dla nas partnerami do wspólnych akcji i wypraw.
<br><br>
Kolejna edycja Warsztatów w przyszłym roku. Zapraszamy!

<h3 align=right>Tekst: Andrzej Szerszeń</h3>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
