<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

	renderHead($bSubdir);
	renderMenu($bSubdir,1,true);
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
	Historia nurkowania w jaskiniach
</h1>
<p>
	Pierwsze nurkowania jaskiniowe miały miejsce w Wielkiej Brytanii w okresie międzywojennym. Nurkowania prowadzono w skafandrze klasycznym, zasilanym powietrzem z powierzchni. Graham Balcomb wyeksplorował w ten sposób kilka pierwszych syfonów w Wookey Hole. W tym samych czasie Norbert Casteret eksplorował samotnie nurkując na bezdechu jaskinie we Francji. 
</p>
<p>
	Po II wojnie światowej w Wielkiej Brytanii nurkowano z aparatami tlenowymi o obiegu zamkniętym. Dopiero upowszechnienie automatów o obiegu otwartym, w których powietrze wydycha się do wody pozwoliło na dłuższe i zwłaszcza głębsze nurkowania. We Francji Jacques Causteau zanurkował na -70m w Fontaine Vauclause. 
</p>
<p>
	Pod koniec lat 80-tych opanowano technikę nurkowania na mieszankach zawierających hel. Pozwoliło to na bezpieczne osiąganie dużych głębokości. Pionierami w tej dziedzinie byli Sheck Exley, Rob Palmer, Jochen Hasenmayer, Olivier Isler. Powstały konstrukcje aparatów o obiegu zamkniętym (rebreather), pozwalające na kilkunastogodzine przebywanie pod wodą. Przeprowadzono eksplorację w Wakulla Springs, Fontaine Vauclause, La Doux de Coly. 
</p>
<p>
	Obecnie wykonuje się na świecie nurkowania trwające kilkanaście godzin, pokonuje się przy tym odległości rzędu kilku kilometrów z użyciem skuterów podwodnych, zanurzenia odbywają się na głębokości ponad 100 metrów.
</p>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>