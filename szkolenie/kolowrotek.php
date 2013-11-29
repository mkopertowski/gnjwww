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
	Kołowrotek Jaskiniowy
</h1>
<p>Zasadniczym wyposażeniem każdego nurka jaskiniowego jest kołowrotek. Jego konstrukcja jak i przeznaczenie różni się istotnie od kołowrotków używanych podczas nurkowania w morzu. Poręczówka w jaskini służy do wskazywania kierunku powrotu w przypadku zmącenia wody. Przy całkowicie zmąconej wodzie istnieje konieczność powrotu wzdłuż poręczówki po omacku. Linka musi być na tyle gruba by zapewnić dobre czucie w w grubych rękawicach neoprenowych lub suchych.</p>

<p>Kołowrotek musi być duży, aby zmieścić około 120m linki o średnicy 3mm lub grubszej. Linka musi być wyprowadzana z kołowrotka przez szeroki otwór, tak by można było nawijać (odwijać) markery, gumki i węzły pozostałe po poręczowaniu. Linka na kołowrotku musi być oznaczona markerami i mieć oznaczony kierunek powrotu. Kołowrotek musi być zabezpieczny przed dostawaniem się linki pomiędzy bęben a obudowę. Linkę na kołowrotku blokuje się zawijając linkę wokół korbki, na którą następnie zkłada się gumkę. Na rączce jest umieszczone kółko, na które założno gumkę za pomocą główki skowronka. W czasie poręczowania tę gumkę zakłada się na nadgarstek. W czasie transportu kołowrotek jest przypięty do półkółek jacketu (noszaka).</p>

<p align=center>
<table border=0>
	<tr>
		<td align=center valign=center>
			<a href="./img/kolowrotek_1.jpg" target="_new">
				<img src="./img/kolowrotek_1_small.jpg" alt="Kołowrotek jaskiniowy" height=200 width=264></a>
			<br>
			<i>Budowa kołowrotka jaskiniowego</i>
		</td>
		
	</tr>
</table>
</p>

<p>Na zamieszczonych zdjęciach pokazano przykładową kołowrotka. Została on wykonana przez kol. <b>Michała Stajszczyka</b>. Zainteresowani mogą uzyskać dalsze informacje pod telefonem <b>+48 600 052 747</b>.</p>

<div align=center>
<table>
	<tr>
		<td align=center valign=center>
			<a href="./img/kolowrotek_2.jpg" target="_new">
				<img src="./img/kolowrotek_2_small.jpg" alt="Kołowrotek jaskiniowy" height=226 width=300></a>
				<br>
			<i>Sposób blokowania linki na kołowrotku</i>
		</td>
		<td align=center valign=center>
			<a href="./img/kolowrotek_4.jpg" target="_new">
				<img src="./img/kolowrotek_4_small.jpg" alt="Kołowrotek jaskiniowy" height=226 width=300></a>
			<br>
			<i>Sposób mocowania gumki do rączki, zabezpieczającej <br>przed zgubieniem kołowrotka podczas poręczowania</i>
		</td>
	</tr>
	<tr>
		<td colspan=2 height=10>
		</td>
	</tr>
	<tr>
		<td align=center valign=center>
			<a href="./img/kolowrotek_3.jpg" target="_new">
				<img src="./img/kolowrotek_3_small.jpg" alt="Kołowrotek jaskiniowy" height=300 width=226></a>
			<br>
			<i>Sposób blokowania linki na kołowrotku</i>
		</td>
		<td align=center valign=center>
			<a href="./img/kolowrotek_5.jpg" target="_new">
				<img src="./img/kolowrotek_5_small.jpg" alt="Kołowrotek jaskiniowy" height=300 width=226></a>
			<br>
			<i>Marker z oznaczeniem kierunku powrotu - powrót w kierunku węzełka</i>
		</td>
	</tr>
</table>
</div>

<!--============================= CONTENTS END ==========================================-->
<?php
	renderBottom($bSubdir);
?>