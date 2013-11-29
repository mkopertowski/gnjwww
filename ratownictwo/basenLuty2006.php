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
<h1>Trening basenowy
</h1>

<p>Etapami powstaje jedyna w Polsce Grupa Ratownictwa Nurkowego w Jaskiniach. 
   Tym razem w czwartek 09.02.2006 udało się przeprowadzić ćwiczenia w zespołowym 
   transporcie noszy z poszkodowanym pod wodą. 
</p>
<table align=center>
	<tr>
		<td align=center>
			<img src="./img/basenLuty06_1.jpg" alt="przygotowania" height=225 width=300><br>
			<i>przygotowania</i>
		</td>
		<td align=center>
			<img src="./img/basenLuty06_2.jpg" alt="wchodzimy na basen" height=225 width=300><br>
			<i>wchodzimy na basen</i>
		</td>
	</tr>
</table>

<p>
Trening odbył się na basenie WKS przy ul. Racławickiej. Było to przygotowanie 
do manewrów, które zamierzamy przeprowadzić już w mniej cieplarnianych warunkach 
w jaskini Zimnej pod koniec lutego. 
</p>

<table align=center>
	<tr>
		<td align=center>
			<img src="./img/basenLuty06_3.jpg" alt="Ola - nie może się doczekać" height=225 width=300><br>
			<i>Ola - nie może się doczekać</i>
		</td>
		<td align=center>
			<img src="./img/basenLuty06_4.jpg" alt="w wodzie" height=225 width=300><br>
			<i>w wodzie</i>
		</td>
	</tr>
</table>

<p>W ćwiczeniach wzięło udział pięciu nurków: Lucyna Cieślik „Luca” (SKTJ), 
Rafał Górecki, Mirek Kopertowski, Paweł Mordkowicz „Loti” i 
Michał Stajszczyk wszyscy z SGW oraz w nieocenionej roli poszkodowanego 
Ola Potulska (NZ).</p>
<h3 align=right>Lucyna Cieślik „Luca”</h3>

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
