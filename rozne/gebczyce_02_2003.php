<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

	renderHead($bSubdir);
	renderMenu($bSubdir,2,true);
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
	Podlodowe poręczowanie
</h1>

<p>Wszyscy wiemy, że ćwiczenie czyni mistrza. Wcielając w życie tę maksymę wybraliśmy się z Wiktorem w sobotę 08.02.2003 na mini warsztaty z poręczowania do naszych wspaniałych Gębczyc. Ćwiczenia miały mieć charakter jaskiniowy, a lodowa pokrywa wspaniale dodawała realizmu całej zabawie. Pogoda dopisała - słoneczko, temperatura lekko poniżej zera.</p>

<p align=center>
	<img src="./img/gebczyce_02_2003_1.jpg" alt="Michał trenuje poręczowanie &quot;na sucho&quot;" height=377 width=500><br>
	<i>Michał trenuje poręczowanie &quot;na sucho&quot;</i>
</p>

<p>Baliśmy się, że ostatnie opady śniegu utrudnią nam dojazd do kamieniołomu, ale okazało się, że jedynym problemem było trafienie we właściwą ścieżkę (ja też nie wierzyłem, że tam się można zgubić). Nad wodą było pusto i cicho, taflę lodu pokrywała cienka warstwa białego puchu. Wytaszczyłem z bagażnika siekierę i zabraliśmy się do prac ręcznych. Lód nie był gruby (najwyżej 10 cm) i szybko się z nim uporaliśmy. Przed wejściem Wiktor pokazał mi jeszcze raz wszystkie możliwe sposoby poręczowania "na sucho".</p>

<p align=center>
	<img src="./img/gebczyce_02_2003_2.jpg" alt="Wiktor wchodzi do przerębla" height=377 width=500><br>
	<i>Wiktor wchodzi do przerębla</i>
</p>

<p>Nurkowanie przebiegało sprawnie - ja poręczowałem, Wiktor mnie nadzorował. Wszystko trwało 30 minut, zeszliśmy na maksymalną głębokość 25 metrów. Gdy wyszliśmy świeciło słońce, nie było wiatru - czyli pełen luksus. Poskładaliśmy zabawki i wróciliśmy do Wrocławia. Jednym słowem - świetny sposób na spędzenie soboty.</p>
<p>[<a class="navismall" href="../galeria/gebczyce_02_2003.php">Więcej zdjęć...</a>]<br>&nbsp;

<h3 align=right>Michał Gignal</h3>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>