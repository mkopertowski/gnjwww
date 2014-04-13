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
	Francuskie Warsztaty Nurkowań Jaskiniowych 2005 
</h1>
<p>Wzorem zeszłych lat FFS (Fédération Française de Spéléologie) zorganizowała tygodniowy staż nurkowania jaskiniowego przeznaczony dla nurków speleologów oraz francuskich ratowników jaskiniowych (Spéléo-Secours Français). W tym roku jako jedyni obcokrajowcy, zaproszeni zostali nurkujący grotołazi z Polski: Lucyna Cieślik, Andrzej Szerszeń oraz Jarosław Kur. Staż prowadzony był w formie warsztatów. Zajęcia składały się z części teoretycznej oraz praktycznej. Teoretyczna cześć obejmowała wykłady: niebezpieczeństwo środowiska, technika poręczowania, sprzęt nurkowy, planowanie ilości mieszanin oddechowych, autoratownictwo, kartowanie, aparaty o obiegu zamkniętym itp. Wykłady prowadzone były w języku francuskim, grupa „polska” posiadała swoich tłumaczów wytypowanych z mówiacych po angielsku francuzów. Teoria wykładana była w postaci dwóch modułów: porannego oraz rozbudowanej odprawy wieczornej.. Nurkowania warsztatowe odbywały się w syfonach jaskiń skupionych w dorzeczach rzek Lot i Dordogne. Nurkowano w takich jaskiniach: Émergence du Ressel, Trou Madami, Source de Landenouse, Fontaine Saint-Georges, Source de Cabouy, Fountain de Trufle.
</p>

<p>Według francuskich procedur nurkowania w jaskiniach, nurek powinien być zupełnie samodzielny. Sprzęt podtrzymujący życie jest zdublowany, a nurek musi posiadać umiejętność poradzenia sobie ze wszystkimi sytuacjami awaryjnymi pod wodą. Dlatego kursanci poświęcali wiele czasu na trening oraz na odpowiedni dobór i konfigurację sprzętu.</p>

<p>Uczestnicy wykonali 7 ponad 60 minutowych nurkowań. Sumarycznie na każdego nurka przypadało ponad 1500 metrów pod sufitem jaskiń. Wszystkie nurkowania nadzorowali instruktorzy FFS, oceniali: zachowanie pod wodą, kontakt z poręczówką, zdolność do prowadzenia nurkowania eksploracyjnego. Wykonywano ćwiczenia: poręczowanie, poszukiwanie zagubionej poręczówki, kartowanie, pływanie bez maski, pływanie bez płetw, rozstawianie depozytów, używanie gazów dekompresyjnych i inne. Poziom płetwonurków z Polski oceniono wysoko i zaproszono do wspólnych ekspedycji organizowanych przez FFS. Prowadzącymi zajęcia byli instruktorzy, starsi nurkowie jaskiniowi, którzy często wyeksplorowali jaskinie w których nurowaliśmy.</p>

<p>Należy dodać, że tereny masywu centralnego są bardzo atrakcyjne turystycznie, dominują tu malownicze krasowe krajobrazy. Strona francuska zadbała o bardzo dobrą organizację stażu. Oprócz jaskiń uczestnicy warsztatów poznawali francuską kulturę oraz degustowali miejscowe potrawy i wyśmienite wino. Ciężko opisać atmosferę francuskiego miasteczka oraz życzliwych i otwartych ludzi, których spotkaliśmy.</p>

<p>Dziękujemy za pomoc PZA (Polski Związek Alpinizmu),w zorganizowaniu wyjazdu oraz Adamowi i „Płetwie” za retransport uczestników i sprzętu z Francji.</p>

<h3 align=right>Tekst: Jarosław Kur</h3>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
