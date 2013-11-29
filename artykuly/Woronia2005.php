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
	Nurkowanie w Woroniej
</h1>


<p>Podczas jesiennej (2005 r.) wyprawy do jaskini Woroniej w Abchazji Gienadij
Samochin
przenurkowal syfon 'Kwitoczka' położony 1980 m poniżej otworu jaskini. Ma on
głębokość 1,5 m i długość 15 m. Kolejny syfon, położony na dnie jaskini
znajduje się na głębokości 2140 m poniżej otworu i jest
duży oraz szeroki. Będzie celem kolejnej wyprawy.
</p>

<p>Nurkowania w Woroniej są akcjami przeprowadzonymi najgłebiej pod ziemią.
Determinacja i klasa przedsięwzięcia budzi podziw.</p>

<h3 align=right>Andrzej Szerszeń<br>
Na podstawie relacji Gienadija Samochina z korespondecji własnej<h3>


<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>