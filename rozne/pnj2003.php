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
	Spotkanie Podkomisji Nurkowania Jaskiniowego
</h1>
 <br>&nbsp;<br>

<br>


<ul class="normal"> 
	<li class="normal">
Dokonano wyboru Podkomisji Nurkowania Jaskiniowego na 2004. W jej skład weszli Wiktor Bolek - przewodniczący, Maciej Tomaszek, Andrzej Szerszeń, Włodzimierz Szymanowski.<br><br>
	</li>
<li class="normal">
Ustalono termin przyszłorocznych Warsztatów Nurkowania Jaskiniowego	na 10-13 czerwca 2004 w Gębczycach.	<br><br>
	</li>
<li class="normal">
Istnieje możliwość uczestnictwa w stażu nurkowania jaskiniowego we Francji latem 2004. W stażu mogą uczestniczyć osoby, które są członkami klubu zrzeszonego w PZA (mają opłacone składki), posiadają Kartę Taternika, są przeszkolone w zakresie nurkowania jaskiniowego. Osoby chętne na taki wyjazd proszone są o zgłaszanie się do Podkomisji Nurkowania Jaskiniowego. Ilość miejsc ograniczona.  Uczestnicy będą musieli pokryc koszt przejazdu do Francji. Termin zgłaszania upływa 05 stycznia 2004.<br><br>
	</li>
<li class="normal">
Kolejne spotkania Podkomisji odbędą się w czerwcu 2004 (przy okazji Warsztatów) oraz jesienią 2004 (przy okazji Speleokonfrontacji). <br><br>
	</li>
</ul>




<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>