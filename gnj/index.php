<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

	renderHead($bSubdir);
	renderMenu($bSubdir,11,false,'GNJ');
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
	Grupa Nurków Jaskiniowych
</h1>

<p>
<b>Grupa Nurków Jaskiniowych</b> (wcześniej Podkomisja Nurkowania Jaskiniowego KTJ PZA) działa pod egidą KTJ PZA.
</p>

<p>
Zajmujemy się nurkowaniem jaskiniowym, popularyzacją tej formy aktywności, eksploracją jaskiń oraz działalnością na rzecz bezpieczeństwa nurkowania jaskiniowego.
</p>

<p>
Jesteśmy nurkującymi grotołazami, zrzeszonymi w klubach jaskiniowych PZA.
</p>

<p>
Prowadzimy nurkowania w jaskiniach tatrzańskich, organizujemy również wyprawy zagraniczne. Poszukując coraz to nowych rejonów dla naszej działalności, jeździmy wszędzie tam, gdzie możemy znaleźć wywierzyska, w jaskiniach docieramy tam, gdzie mogą być syfony.
</p>

<p>
Od 1995 roku organizujemy Warsztaty Nurkowań Jaskiniowych, będące okazją do wymiany doświadczeń i rozwoju swoich umiejętności.
</p>
<!--
<h3>
	Zarząd GNJ
</h3>

<ul class="normal">
	<li class="normal">Prezes zarządu:	Andrzej Szerszeń</li>
	<li class="normal">Wiceprezes zarządu:	Rafał Górecki</li>
	<li class="normal">Skarbnik:		Beata Bednarska-Bolek</li>
</ul>

<h3>
	Komisja Rewizyjna
</h3>

<ul class="normal">
	<li class="normal">Michał Stajszczyk</li>
	<li class="normal">Lucyna Cieślik</li>
	<li class="normal">Rafał Szaniawski</li>
</ul>

<h3>
	Członkostwo
</h3>

<p>
Członkiem <b>Grupy Nurków Jaskiniowych</b> może zostać każdy doświadczony, aktywny nurek jaskiniowy, któremu bliskie są idee propagowane przez Grupę. Do uzyskania statusu członka GNJ konieczne jest:
</p>

<ul class="normal">
	<li class="normal">posiadanie Karty Taternika,</li>
	<li class="normal">posiadanie wiedzy teoretycznej i umiejętności z zakresu nurkowania jaskiniowego obejmujących:
		<ul class="normal">
 			<li class="normal">poręczowanie, poruszanie się wzdłuż poręczówki, deporęczowanie,</li>
 			<li class="normal">korzystanie z zestawu dwóch oddzielnych rozdzielonych butli,</li>
 			<li class="normal">nurkowanie samodzielne (solo),</li>
 			<li class="normal">planowanie nurkowania jaskiniowego,</li>
 			<li class="normal">autoratownictwo,</li>
 			<li class="normal">kartowanie,</li>
		</ul>
        </li>
	<li class="normal">przedstawienie wykazu 10 samodzielnych nurkowań o łącznej długości min. 1000m, wykonanych w co najmniej 5 jaskiniach,</li>
	<li class="normal">rekomendacja 2 członków GNJ,</li>
	<li class="normal">złożenie deklaracji członkowskiej,</li>
	<li class="normal">wniesienie opłaty wpisowej.</li>
</ul>



<p>
Wyżej wymienione umiejętności mogą zostać zweryfikowane poprzez uczestnictwo w Warsztatach Nurkowania Jaskiniowego lub w szczególnych sytuacjach indywidualną weryfikację przeprowadzoną przez członka Zarządu GNJ.
</p>

<p>
Potwierdzeniem przynależności do Grupy Nurków Jaskiniowych jest legitymacja członkowska. 
</p>

<p>
Wzory dokumentów:
</p>

<ul class="normal">
	<li class="normal"><a class="navismall" href="gnj_deklaracja_czlonkowska.doc">deklaracja członkowska,</a></li>
	<li class="normal"><a class="navismall" href="wzor_karty.php">legitymacja członkowska.</a></li>
</ul>

<p>
Dokumenty przyjmowane są wyłącznie w wersji elektronicznej na adres gnj@gnj.org.pl. Deklaracji należy nadać nazwę deklaracja_czlonkowska_imie_nazwisko.doc. Zdjęcie do legitymacji należy dostarczyć w formacie tif (lub jpg) w rozdzielczości minimum 200 dpi (optymalnie 300) nazwane imie_nazwisko.jpg.
</p>

<p>
Numery legitymacji będą nadawane w kolejności otrzymania deklaracji członkowskich.
<br><br>
<b>Kontakt</b>:<br>
gnj.pnj / at / gnj.org.pl<br>
ul. Szczytnicka 33/10, 50-382 Wrocław
</p>

-->

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
