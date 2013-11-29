<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

	renderHead($bSubdir);
	renderMenu($bSubdir,13,true);
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>PRÓBNA akcja ratownicza w Jaskini Zimnej
</h1>

<p>Rolę poszkodowanego dzielnie zagrał Pszczółek (Andrzej Szerszeń).</p>

<table align=center>
	<tr>
		<td align=center>
			<img src="./img/ZimnaLuty06_1.jpg" alt="Lucyna Cieślik" height=225 width=300><br>
			<i>Lucyna Cieślik</i>
		</td>
		<td align=center>
			<img src="./img/ZimnaLuty06_2.jpg" alt="Przed jaskinią" height=225 width=300><br>
			<i>Przed jaskinią</i>
		</td>
	</tr>
</table>

<p>W akcji uczetniczyło 8 nurków jaskiniowych podzielonych na 3 zespoły:</p>

<ol class="normal">
   <li class="normal">
   <b>Zespół poszukiwawczy i opieki nad poszkodowanym</b><br><br>

    Zaginiony nurek został znaleziony za syfonem Ogazy w ciężkim stanie: 
    wychłodzony, z urazem nogi. Zespół nurków zaopiekował się poszkodowanym, 
    zbudował punkt cieplny, nakarmił...<br><br>
   </li>
   
   <li class="normal">
   <b>Zespół transportujący poszkodowanego w syfonach</b><br><br>

   Stan poszkodowanego okazał się na tyle dobry, że możliwe było 
   przetransportowanie go przez syfony w specjalnie przystosowanych 
   do tego noszach (z butlami bocznymi, system wypornościowym i balastem). 
   Transport przez syfony odbył się w bardzo ciężkich warunkach &shy;
   przy całkowicie zmąconej wodzie.<br><br>
   </li>
   
   <li class="normal">
   <b>Zespół transportujący poszkodowanego pomiędzy syfonami</b><br><br>

   Syfony Zwolińskich i Ogazy odległe są o kilkadziesiąt metrów. 
   Pomiędzy nimi transport przejął 3-ci zespół nurków. 
</ol>

<table align=center>
	<tr>
		<td align=center>
			<img src="./img/ZimnaLuty06_3.jpg" alt="Garbek" height=225 width=300><br>
			<i>Garbek</i>
		</td>
		<td align=center>
			<img src="./img/ZimnaLuty06_4.jpg" alt="Transport" height=225 width=300><br>
			<i>Transport</i>
		</td>
	</tr>
</table>

<p>Oprócz nurków w akcji uczestniczyli grotołazi z wielu klubów: 
AKG, SGW, SKTJ, SW i Straż Pożarna GPR Poznań (WKTJ). Akcja przebiegała bardzo sprawnie i zakończyła 
się pełnym sukcesem. Przetransportowaliśmy ponad 30 worków, a  
dzięki sprawnemu kierownictwu Krzysztofa Recielskiego zakończyła się już 
po około 13 godzinach!</p>

<table align=center>
	<tr>
		<td align=center>
			<img src="./img/ZimnaLuty06_5.jpg" alt="Oczekiwanie" height=225 width=300><br>
			<i>Oczekiwanie na wieści</i>
		</td>
		<td align=center>
			<img src="./img/ZimnaLuty06_6.jpg" alt="Rafał Górecki" height=300 width=225><br>
			<i>Rafał Górecki</i>
		</td>
	</tr>
</table>

<h3 align=right>zdjęcia: Małgorzata Tofiluk<br>
                tekst: Mirek Kopertowski</h3>


<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
