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
	Warsztaty Nurkowania Jaskiniowego GĘBCZYCE 2004 
</h1>
<p>W dniach od 10 do 13 czerwca bieżącego roku <b>Podkomisja Nurkowania Jaskiniowego KTJ PZA</b> zorganizowała po raz kolejny w Gębczycach koło Strzelina Warsztaty Nurkowania Jaskiniowego.</p>
<p>Uczestnikami warsztatów byli doświadczeni płetwonurkowie oraz "jaskiniowcy" z całego kraju. Wielu z nich przybyło po raz kolejny na tegoroczną edycję warsztatów aby doskonalić nabyte wcześniej umiejętności i dzielić się doświadczeniami z innymi. Duże zainteresowanie i chęć uczestnictwa w warsztatach ucieszyła organizatorów, którzy zadbali o przygotowanie licznych atrakcji.</p>

<table align=center>
	<tr>
		<td align=center>
			<img src="./img/opis04_1.jpg" alt="Briefing przed nurkowaniem" height=240 width=320><br>
			<i>Briefing przed nurkowaniem</i>
		</td>
		<td align=center>
			<img src="./img/opis04_10.jpg" alt="Wykład" height=240 width=320><br>
			<i>Wykład</i>
		</td>
	</tr>
	<tr>
		<td align=center>
			<img src="./img/opis04_2.jpg" alt="Widok na kamieniołom" height=240 width=320><br>
			<i>Widok na kamieniołom</i>
		</td>
		<td align=center>
			<img src="./img/opis04_5.jpg" alt="Poręczowanie na sucho" height=240 width=320><br>
			<i>Poręczowanie na sucho</i>
		</td>
	</tr>
	<tr>
		<td align=center>
			<img src="./img/opis04_6.jpg" alt="Poręczowanie na sucho" height=240 width=320><br>
			<i>Poręczowanie na sucho</i>
		</td>
		<td align=center>
			<img src="./img/opis04_11.jpg" alt="Przed zanurzeniem" height=240 width=320><br>
			<i>Przed zanurzeniem</i>
		</td>
	</tr>
</table>

<p>Podczas Warsztatów poruszane były zagadnienia teoretyczne: począwszy od charakterystyki środowiska jaskiniowego, poprzez sposoby poruszania się w nim, aż do planowania akcji i sposobów konfiguracji sprzętu nurkowego.</p>
<p>Znakomitym uzupełnieniem wykładów były ćwiczenia na "sucho" oraz mokro - w pobliskim kamieniołomie (i nie tylko, gdyż niektóre z zajęć nadwodnych odbywały się w strugach wiosennej ulewy). Po zaliczeniu ćwiczeń w kamieniołomie można było zrelaksować się przez chwilę w <b>Cafe Groza</b>.</p>
<p>Tegorocznymi uczestnikami warsztatów byli: Adam Leslie, Andrzej Radziszewski, Andrzej Szerszeń, Arkadiusz Krawczyk, Artur Ksycki, Beata Bolek, Ewa Szurmińska, Janusz Gąsecki, Jarosław Stępkowski, Jarosław Wrzesień, Lucyna Cieślik, Łukasz Lechowicz, Magdalena Czaja, Michał Gignal, Michał Harenża, Michał Stajszczyk, Paweł Mordkowicz, Paweł Woźniak, Paweł Zimnicki, Radosław Koniar, Rafał Górecki, Ryszard Rokita, Sławomir Łaski, Tomek Bielas, Wiesław Kokosza, Włodzimierz Szymanowski, Arnold Paliński, Jacek Konikowski, Justyna Błaszkowska, Maciej Czykierda oraz  Michał Stajszczyk.</p>
<p>Niestety wśród organizatorów zabrakło Wiktora, który z ogromnym zaangażowaniem rozpoczął organizację tegorocznych warsztatów...</p>

<table align=center>
	<tr>
		<td align=center>
			<img src="./img/opis04_3.jpg" alt="Konfiguracja boczna" height=320 width=256><br>
			<i>Konfiguracja boczna</i>
		</td>
		<td align=center>
			<img src="./img/opis04_4.jpg" alt="Po nurkowaniu" height=320 width=256><br>
			<i>Po nurkowaniu</i>
		</td>
	</tr>
	<tr>
		<td align=center>
			<img src="./img/opis04_8.jpg" alt="Radek z sekatorem" height=320 width=256><br>
			<i>Radek z sekatorem</i>
		</td>
		<td align=center>
			<img src="./img/opis04_9.jpg" alt="Ćwiczenia z autoratownictwa" height=320 width=256><br>
			<i>Ćwiczenia z autoratownictwa</i>
		</td>
	</tr>
	<tr>
		<td align=center>
			<img src="./img/opis04_7.jpg" alt="Konfigurowanie sprzętu" height=320 width=239><br>
			<i>Konfigurowanie sprzętu</i>
		</td>
		<td align=center>
			<img src="./img/opis04_12.jpg" alt="Szyld Cafe Groza" height=320 width=256><br>
			<i>Szyld Cafe Groza</i>
		</td>
	</tr>
</table>

<h3 align=right>Tekst: Paweł Mordkowicz<br>Zdjęcia: Janusz Gąsecki, Paweł Mordkowicz, Włodzimierz Szymanowski</h3>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>