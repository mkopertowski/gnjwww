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
<h1>Tatry 4-5.02.2006
</h1>

<p>Podczas weekendu odbył się krótki ale za to bardzo intensywny wyjazd 
kondycyjno-towarzyski GNJ. Na bazie u pani Glizdy pojawił się następujący 
zestaw: Lucyna Cieślik „Luca” (SKTJ), Rafał Górecki (SGW), 
Dominik Graczyk „Honzo” (NZ), Piotrek Kępkiewicz „Kępek” (SW), 
Mirek Kopertowski (SGW), Paweł Mordkowicz „Loti” (SGW), Ola Potulska 
(NZ), Michał Stajszczyk (SGW), Tomek Szych (NZ), Andrzej Szerszeń „Pszczółek” 
(SW) oraz Michał Gignal (SGW) i Martin Hicks, którzy przylecieli z 
iście polskiego grodu Londynu. </p>
<table align=center>
	<tr>
		<td align=center>
			<img src="./img/TatryLuty06_1.jpg" alt="spotkanie" height=225 width=300><br>
		</td>
		<td align=center>
			<img src="./img/TatryLuty06_2.jpg" alt="wychodzimy" height=225 width=300><br>
		</td>
	</tr>
</table>

<p>Udało się zrealizować wyjścia do 3 jaskiń. W sobotę do jaskini Kasprowej Niżniej 
(do Zapałek i syfonu Danka) natomiast w niedzielę w dwóch zespołach do 
jaskini Miętusiej (do Wielkich Kominów i syfonu Marwoja) oraz do Zimnej 
(do syfonu Zwolińskich).</p>

<table align=center>
	<tr>
		<td align=center>
			<img src="./img/TatryLuty06_3.jpg" alt="przygotowania" height=300 width=225><br>
		</td>
		<td align=center>
			<img src="./img/TatryLuty06_4.jpg" alt="w Tatry" height=300 width=255><br>
		</td>
	</tr>
</table>

<p>Byle więcej takich konsolidujących środowisko, przemiłych i twórczych eskapad, 
a już niedługo spotkamy się ponownie podczas manewrów RNJ 
(Ratownictwa Nurkowo-Jaskiniowego).
</p>
<table align=center>
	<tr>
		<td align=center>
			<img src="./img/TatryLuty06_5.jpg" alt="juz po" height=225 width=300><br>
		</td>
		<td align=center>
			<img src="./img/TatryLuty06_6.jpg" alt="powrot" height=225 width=300><br>
		</td>
	</tr>
</table>



<h3 align=right>Lucyna Cieślik „Luca”<BR>
zdjęcia: Paweł Mordkowicz „Loti”</h3>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
