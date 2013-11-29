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
	Aktualności z roku 2002
</h1>

<br>
[ <a class="navi" href="./index.php">Bieżący rok</a> ] [ <a class="navi" href="./index2003.php">Rok 2003</a> ] [ <a class="navi" href="./index2004.php">Rok 2004</a> ]
<br>&nbsp;<br>

<!-- month -->
<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>GRUDZIEŃ 2002</B>
		</td>
	</tr>
</table>
<br>
<ul class="normal">
	<li class="normal">
		Dodany opis nurkowania w <b>Sztolni w Bystrzycy Górnej</b>.

		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="../polska/bystrzycagornawb.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		Dodany opis nurkowania w jeziorku w <b>Jaskini Szmaragdowej-Szeptunow</b>.

		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="../polska/szmaragdowaszeptunow1991.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Maciej Tomaszek</b>, członek Zarządu Podkomisji Nurkowania Jaskiniowego KTJ PZA, zbiera ankiety dotyczące środowiska nurków jaskiniowych. Prosimy o pobranie ankiety i wysłanie jej do Macieja Tomaszka.<br>
		<ol>
			<li><a class="navi" href="..rozne/doc/pnj_ankieta12_02.doc" target="_new">POBIERZ ANKIETĘ</a> (dokument Word 2000)<br>
			<li>Wyślij ankietę na adres <a class="navi" href="mailto:maciej.tomaszek@kw.krakow.pl?SUBJECT=Ankieta Podkomisji Nurkowania Jaskiniowego" target="_new">Maciej.Tomaszek@kw.krakow.pl</a>
		</ol>
		<br>
	</li>
	<li class="normal">
		W dniu 14.12.2002 w karczmie "U Zięby" odbylo sie zebranie Podkomisji 
Nurkowania Jaskiniowego. W spotkaniu wzięło udział kilkanaście osób 
związanych z nurkowaniem w jaskiniach oraz Andrzej Ciszewski z ramienia 
KTJ. Omówiono sprawę wypadku w Rumunii, kierunki dalszej działaności oraz 
wybrano nowy Zarząd Podkomisji. Weszli do niego <b>Wiktor Bolek</b> (SGW) - 
przewodniczacy, <b>Andrzej Szerszeń</b> (SW), <b>Maciej Tomaszek</b> (STJ KW Krakow).<br>&nbsp;
	</li>
	<li class="normal">
		Kilka nowych artykułów po angielsku, w tym krótki opis działalnosci polskich nurków jaskiniowych w krajowych jaskiniach na przestrzeni ostatnich kilku lat.

		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="../english/index.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		Plan syfonów na dnie <b>Ciasnych Kominów</b> w artykule dotyczącym pierwszego nurkowania na mieszankach w polskiej jaskini.

		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="../polska/ciasnekominy3.php">więcej...</a>]<br>&nbsp;
	</li>
</ul>
<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>LISTOPAD 2002</B>
		</td>
	</tr>
</table>
<br>
<ul class="normal">
	<li class="normal">
		Dodana mapa syfonów w tatrzańskiej jaskini <b>Dudnica</b>.

		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="../polska/dudnica.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		Opis nurkowania w jaskini <b>Zimna</b> w Tatrach.

		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="../polska/zimna.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		Wypadek w rumuńskiej jaskini <b>Isverna</b>, w którym smierć poniosło dwóch płetwonurków węgierskich.
		
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="../artykuly/isverna2002.php">więcej...</a>]<br>&nbsp;
	</li>
</ul>

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>