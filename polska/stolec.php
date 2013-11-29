<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

	renderHead($bSubdir);
	renderMenu($bSubdir,5,true);
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
	Nurkowanie w Stolcu
</h1>

<p>W artykule "Jaskinie i sztolnie Sudetów (14)" Maciej Pawełczyk opisuje tajemnice podziemnych wyrobisk w Stolcu, stwierdzając, że jest tam ciekawy problem do nurkowania - w miejscu, które określił jako Jeziorko II (GiA 1(25)/96, str. 44-45). Chcąc wprowadzić trochę nowych faktów do obiegu pisanego przytaczam następujące informacje.
<p>Na przełomie lat osiemdziesiątych i dziewięćdziesiątych przeprowadzono w tymże jeziorku szereg nurkowań. Brali w nich udział płetwonurkowie z Wrocławia związani z klubem "ORCA", m. in. Michał Stajszczyk, Krzysztof Benducki, Mirosław Jarek, Ryszard Kląskała i in. Jednak te nurkowania należy zaliczyć do zanurzeń na wodach otwartych, ponieważ nie było tam w zasadzie miejsca, gdzie można by wpłynąć pod strop. Pośrodku jeziorka, w jego najgłębszej części, znajdowały się fragmenty drewnianego systemu odwadniającego, m. in. kawałek rury. Maksymalna głębokość wyniosła -3 metry. W jednym miejscu, w ścianie, była mała komora o wymiarach 2 x 2 x 2 metry. Zapewne jest to początek korytarza, w którym przerwano prace. Przodek stanowi lita skała, a nie zawalisko. 
<p>Po tych nurkowaniach problem uznano za definitywnie rozwiązany. 


<h3 align=right>Na podstawie relacji Michała Stajszczyka<br>Wiktor Bolek</h3>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>