<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

	renderHead($bSubdir);
	renderMenu($bSubdir,3,true);
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
	Oświetlenie w nurkowaniu jaskiniowym
</h1>
<p>Oświetlenie jest bardzo ważnym elementem sprzętu uzywanego do nurkowania w jaskiniach. Zabieramy zawsze co najmniej dwie latarki o czasie świecenie dłuższym od planowanego nurkowania. Mocujemy je na kasku za pomocą gumek przełożonych przez otwory. Zapewnia to łatwość zakładania oraz elastyczność mocowania. Używamy wodoszczelnych latarek o możliwie małej średnicy i możliwie dużej mocy. Zastosowanie dużych latarek z wielkimi lustrami mija się z celem, gdyż są nieporęczne, drogie i mogą łatwo ulec zniszczeniu. Latarki o dużej mocy 20 W - 50 W najlepiej jest wykonać we własnym zakresie na bazie żarówek halogenowych na 12V. Do zasilania stosuje się ołowiane akumulatory żelowe, które zakłada się na pasie jak ciężarki. Akumulator łączy się z latarka osobnym przewodem. Jako światło awaryjne można wykorzystywać tzw. świecące ampułki (light stick). Jest to plastykowa ampułka, w której po złamaniu następuje mieszanie dwu substancji. W wyniku reakcji chemicznej otrzymujemy silne źródło światła na kilka godzin. Może się to okazać bezcenne przy oczekiwaniu na pomoc w komorze miedzy syfonami.</p>

<p align=center>
<table border=0>
	<tr>
		<td align=center valign=center>
			<img src="./img/latarki_1.jpg" alt="Mocowanie żarówki w latarce" height=400 width=260><br>
			<i>Mocowanie żarówki w latarce</i>
		</td>
		<td align=center valign=center>
			<img src="./img/latarki_3.jpg" alt="Zestaw oświetleniowy gotowy do użycia" height=400 width=530><br>
			<i>Zestaw oświetleniowy gotowy do użycia</i>
		</td>
	</tr>
</table>
</p>

<p>Na zamieszczonych zdjęciach pokazano przykładową konstrukcję latarki zasilanej z zewnętrznego akumulatora żelowego. Żarówka halogenowa ma standardowe wymiary. Do latarki można założyć żarówkę o wybranej mocy i kącie skupienia wiązki, w zależności od potrzeb. Dużą zaletą tej latarki jest odporność na uszkodzenia, które mogą powstać w podczas transportu ekwipunku w jaskini. Latarka została wykonana przez kol. <b>Michała Stajszczyka</b>. Zainteresowani mogą uzyskać dalsze informacje pod telefonem <b>+48 600 052 747</b>.</p>

<p align=center>
<table border=0>
	<tr>
		<td align=center valign=center>
			<img src="./img/latarki_4.jpg" alt="Mocowanie latarki na kasku za pomocą gumek" height=400 width=318><br>
			<i>Mocowanie latarki na kasku za pomocą gumek</i>
		</td>
		<td align=center valign=center>
			<img src="./img/latarki_5.jpg" alt="Latarka i akumulator zamocowany na pasie" height=400 width=302><br>
			<i>Latarka i akumulator zamocowany na pasie</i>
		</td>
	</tr>
</table>
</p>

<!--============================= CONTENTS END ==========================================-->
<?php
	renderBottom($bSubdir);
?>