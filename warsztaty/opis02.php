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
	Warsztaty nurkowania jaskiniowego 2002 - podsumowanie
</h1>
<p>Jak co roku Podkomisja Nurkowania Jaskiniowego KTJ PZA urządza Warsztaty Nurkowania Jaskiniowego. Tegoroczne Warsztaty odbyły się w terminie od 30 maja do 2 czerwca, na Dolnym Ślasku, który obfituje w miejsca treningowe o różnym stopniu trudności.</p>
<table align=center>
	<tr>
		<td align=center>
			<img src="./img/warsztaty2002_1.jpg" alt="Nurkowie jaskiniowi" height=240 width=320><br>
			<i>Nurkowie jaskiniowi</i>
		</td>
		<td align=center>
			<img src="./img/warsztaty2002_2.jpg" alt="Retransport po nurkowaniu w kamieniołomie" height=240 width=320><br>
			<i>Retransport po nurkowaniu w kamieniołomie</i>
		</td>
	</tr>
</table>
<p>Baza została założona w Ośrodku Wypoczynku Świątecznego, który znajduje się kilometr za Białym Kosciołem, koło Strzelina. Stąd już tylko pozostawało 10 minut drogi do kamieniołomów w Gębczycach, które były głównym miejscem nurkowań.</p>
<table align=center>
	<tr>
		<td align=center>
			<img src="./img/warsztaty2002_3.jpg" alt="Wykład n/t technik poręczowania" height=240 width=320><br>
			<i>Wykład n/t technik poręczowania</i>
		</td>
		<td align=center>
			<img src="./img/warsztaty2002_4.jpg" alt="Jak wyciąć się z poręczówki ?" height=240 width=320><br>
			<i>Jak wyciąć się z poręczówki ?</i>
		</td>
	</tr>
</table>
<p>Podczas czterech dni część uczestników doskonaliła swoje umiejętości, część zaś przyswajała od podstaw zagadnienia teoretyczne i praktyczne pozwalające na bezpieczne nurkowanie w zalanych podziemiach. Przeprowadzone zostały zajęcia teoretyczne, które przybliżyły takie zagadnienia jak zagrożenia środowiska podczas nurkowań w zalanych podziemiach, dobór i konfiguracja sprzętu, zasady kartowania, czy podstawy obliczania zużycia mieszanek oddechowych. Duży nacisk położono na zajęcia z autoratownictwa i właściwego poręczowania. </p>
<table align=center>
	<tr>
		<td align=center>
			<img src="./img/warsztaty2002_5.jpg" alt="Klatka schodowa nie jest wygodnym miejscem do szykowania się na nurkowanie..." height=240 width=320><br>
			<i>Klatka schodowa nie jest wygodnym miejscem<br>do szykowania się na nurkowanie...</i>
		</td>
		<td align=center valign=top>
			<img src="./img/warsztaty2002_6.jpg" alt="...pozwala jednak komfortowo wychodzić z wody" height=240 width=320><br>
			<i>...pozwala jednak komfortowo wychodzić z wody</i>
		</td>
	</tr>
</table>
<p>Zajęcia pod wodą skupiały się na właściwej technice poruszania się wzdłuż poręczówki, odpowiednim doborze punktów do jej stabilizacji, odpowiednim rozmieszczaniu depozytów, orientacji pod wodą za pomocą kompasu. Osobny dzień był przeznaczony na ćwiczenia autoratownicze, takie jak poszukiwanie poręczówki, wycinanie się z zaplatanej poręczówki itp. Uczestnicy starali się podczas każdego nurkowania prowadzić notatki kartograficzne, które wspólnie weryfikowano w oparciu o program komputerowy.</p>
<table align=center>
	<tr>
		<td align=center>
			<img src="./img/warsztaty2002_7.jpg" alt="Wycinanie się z poręczówki - na sucho" height=240 width=320><br>
			<i>Wycinanie się z poręczówki - na sucho</i>
		</td>
		<td align=center>
			<img src="./img/warsztaty2002_8.jpg" alt="Kolejna grupa nurków wchodzi do wody" height=240 width=320><br>
			<i>Kolejna grupa nurków wchodzi do wody</i>
		</td>
	</tr>
</table>
<p>Osoby, które pozytywnie zaliczyły nurkowania treningowe w wodach otwartych, nurkowały w sztolni w Bystrzycy Górnej lub w sztolni na przełęczy Tąpadła.</p>

<table align=center>
	<tr>
		<td>
			<h3>Uczestnicy</h3>
			<ol>
				<li>Wiktor Bolek - kierownik</li>
				<li>Maciej Czykierda</li>
				<li>Rafał Garski</li>
				<li>Tomasz Gołębiewski</li>
				<li>Krzysztof Kłosinski</li>
				<li>Mirosław Kopertowski</li>
				<li>Marcin Krzywicki</li>
				<li>Jarosław Niekludow</li>
				<li>Bartłomiej Nowakowski</li>
				<li>Michał Stajszczyk</li>
				<li>Przemysław Stasiak</li>
				<li>Włodzimierz Szymanowski</li>
				<li>Tomasz Wróblewski</li>
			</ol>
		</td>
	</tr>
</table>
<p align=center><i><b>ZDJĘCIA : Krzysztof Kłosiński, Przemysław Stasiak</b></i></p>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>