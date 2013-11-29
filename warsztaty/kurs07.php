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
	Kurs Nurkowania Jaskiniowego 2007 
</h1>

W 2007 roku w miejsce tradycyjnych Warsztatów został zorganizowany Kurs Nurkowania Jaskiniowego prowadzący do uzyskania formalnych uprawnień nurka jaskiniowego. W zależności preferencji, doświadczeń i posiadanego sprzętu, uczestnicy Kursu wybrali techniczny lub speleologiczny system nurkowania jaskiniowego, w którym rozwijali swoje umiejętności. Utworzone zostały dwie odrębne grupy prowadzone przez oddzielnych instruktorów: Rafała Góreckiego i Andrzeja Szerszenia. Kurs odbywał się w Jaworze i w kamieniołomie w Zimniku.

<h3>W roli kursantów udział wzięli:</h3>

Sebastian Dobrowolski<br>
Krzysztof Dobrowolski<br>
Piotr Dąbrowski<br>
Jarek Dąbrowski<br>
Paweł Olejniczak<br>
Paweł Mordkowicz<br>
Mariusz Różański<br>
Tomek Różański<br>
Waldek Świderski<br>

<h3>Towarzysko uczestniczyli:</h3>
Lama<br>
Rafał Koryś<br>
Magda Motylińska<br>
Darek Lermer<br>
<br>
<b>Fotoreleacje:</b>
[<a class="navi" href="http://posejdon.org.pl/zimnik.html">1</a>]
[<a class="navi" href="http://www.lama.waw.pl/gallery3/main.php?g2_itemId=18202">2</a>]
<br>

<h3 align=right>Andrzej Szerszeń</h3>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
