<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

$GL_DIR = '..';

@include('../_php/publication_supp.php');
include('../_php/mysql.php');
include('../_php/misc.php');

	renderHead($bSubdir,'','');
	renderMenu($bSubdir,5,false,'POLSKA','TATRY, JURA');
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
	POLSKA - TATRY, JURA
</h1>

<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>WODNA POD PISANĄ</B> 
		</td>
	</tr>
</table>
<br>
<ul class="normal">

<?php 

$sqlfiltr="section='polska' AND tags LIKE '%WodnaPodPisana%'";

ArticleListFiltredMYSQL($mysqli,'..',$sqlfiltr);

?>

</ul>

<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>DUDNICA</B> 
		</td>
	</tr>
</table>
<br>
<ul class="normal">
<?php 
$sqlfiltr="section='polska' AND tags LIKE '%Dudnica%'";
ArticleListFiltredMYSQL($mysqli,'..',$sqlfiltr);
?>
</ul>

<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>KASPROWA NIŻNIA</B> 
		</td>
	</tr>
</table>
<br>
<ul class="normal">

<?php 

$sqlfiltr="section='polska' AND tags LIKE '%Kasprowa%'";

ArticleListFiltredMYSQL($mysqli,'..',$sqlfiltr);

?>
</ul>
<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>MIĘTUSIA</B> 
		</td>
	</tr>
</table>
<br>
<ul class="normal">

<?php 

$sqlfiltr="section='polska' AND tags LIKE '%Mietusia%'";

ArticleListFiltredMYSQL($mysqli,'..',$sqlfiltr);

?>
	<li class="normal">
		<b>Jaskinia Miętusia</b> - Rekordowe nurkowanie w Ciasnych Kominach<br>
		Jaskinia Miętusia - jedna  z  największych  w  Polsce  -  już  od najwcześniejszych etapów eksploracji  była  arena  rozwoju  nurkowania podziemnego w naszym kraju. W 1957 grupa płetwonurków związanych z Marynarką Wojenną...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./ciasnekominy1.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Jaskinia Miętusia</b> - Ciasne Kominy po raz drugi<br>
		Podczas poprzedniego nurkowania uległem fascynacji syfonem na dnie Ciasnych Kominów w Jaskini Miętusiej. Ogromne przestrzenie, klarowna woda, korytarz wiodący w nieznane...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./ciasnekominy2.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Jaskinia Miętusia</b> - Pierwsze nurkowanie na mieszankach w polskich jaskiniach<br>
		Już od bez mała trzech lat syfony na dnie Ciasnych Kominów w Jaskini Miętusiej stanowią dla nas wyzwanie. Na terenie Polski jest to unikalne miejsce. Nie mamy wielu dużych zalanych jaskiń w porównaniu z innymi krajami Europy..
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./ciasnekominy3.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Jaskinia Miętusia</b> - Retransport sprzętu<br>
		W styczniu 98 przeprowadziliśmy akcję nurkową w Ciasnych Kominach w Jaskini Miętusiej. Podczas nurkowania trimixowego w południowym jeziorku osiągnąłem głębokość 63m. W północnym jeziorku nurkował Norbert Ziober...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./ciasnekominy4.php">więcej...</a>]<br>&nbsp;
	</li>

</ul>
<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>NIECKA NIDZIAŃSKA</B> 
		</td>
	</tr>
</table>
<br>
<ul class="normal">
	<li class="normal">
		<b>Jaskinie Niecki Nidziańskiej</b> - Notka o nurkowaniu<br>
		W dniach 18-20.07.2003 odbył się wyjazd na tereny Niecki Nidziańskiej i okolic, mający na celu głównie eksplorację zalanych jaskiń Skorocic oraz Siesławic koło Buska...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./nieckanidzianska2003.php">więcej...</a>]<br>&nbsp;
	</li>
</ul>
<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>SZMARAGDOWA</B> 
		</td>
	</tr>
</table>
<br>
<ul class="normal">
	<li class="normal">
		<b>Jaskinia Szmaragdowa-Szeptunow</b> - Nurkowanie w jaskini Szmaragdowej-Szeptunow<br>
		Przy okazji corocznego wyjazdu na Jurę postanowiliśmy sprawdzić problemy nurkowe w jaskini Szmaragdowej-Szeptunow, które tak zachęcająco były opisane w 'Eksploranciku'. Jaskinię postanowiliśmy zaatakować...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./szmaragdowaszeptunow1991.php">więcej...</a>]<br>&nbsp;
	</li>
</ul>
<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>ŚNIEŻNA STUDNIA</B> 
		</td>
	</tr>
</table>
<br>
<ul class="normal">
	<li class="normal">
		<b>Jaskinia Śnieżna Studnia</b> - Znów w Syfonie Drzemiącym<br>
		Między świętami Bożego Narodzenia a Sylwestrem roku 1994 kontynuowaliśmy eksplorację w Syfonie Drzemiącym w Śnieżnej Studni. Akcja była przygotowywana niemal przez cały rok. W jaskini znajdowały się butle zaniesione jeszcze...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./snieznastudnia1994.php">więcej...</a>]<br>&nbsp;
	</li>
</ul>
<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>WIELKA ŚNIEŻNA</B> 
		</td>
	</tr>
</table>
<br>
<ul class="normal">

<?php

  $sqlfiltr="section='polska' AND tags LIKE '%WielkaSniezna%'";

  ArticleListFiltredMYSQL($mysqli,'..',$sqlfiltr);

  ExtendedListItem('Wielka Śnieżna - Jeziorko X. Najniżej położony problem nurkowy w Tatrach',
                   'Od wielu lat kusi grotołazów swą niedostępnością i zagadką, która kryje się za nim. Pojawiało się wiele hipotez o możliwości pogłębienia systemu jaskiniowego...',
                   '../polska/publication.php?id=2007JeziorkoX','WIĘCEJ',
                   '8. Czerwiec 2007','Michał Plata');

?>
<BR>
	<li class="normal">
		<b>Jaskinia Wielka Śnieżna</b> - Trzeci syfon w partiach za Syfonami Krakowskimi<br>
		Na przełomie roku 2002 i 2003 zintensyfikowano eksploracje partii położonych za Syfonami Krakowskimi. Kilkakrotne akcje transportowe i nurkowe zaowocowały odkryciem kolejnego syfonu w tym ciągu...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./syfony_krakowskie_01_2003.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Jaskinia Wielka Śnieżna</b> - Pogłębianie Syfonu Mysi - <i>styczeń 2003</i><br>
		Nauczony wieloletnim doświadczeniem, starałem się zawsze organizować eksplorację za Syfonem Krakowskim jesienią. Wówczas nie ma problemów z torowaniem na podejściu, kopaniem igloo, zasypywaniem rury itd. Poziom wody jest umiarkowany w porównaniu z tym co się dzieje podczas wiosennych roztopów czy gwałtownych letnich opadów. Oprócz pogody eksploracja wymaga zaangażowania większej ilości osób przez kilka dni...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./syfon_mysi_01_2003.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Jaskinia Wielka Śnieżna</b> - Pogłębianie Syfonu Mysi - <i>marzec 2003</i><br>
		W marcu 2003 odbyła się kolejna akcja nurkowa w Syfonie Mysi. Poprzednia akcja obyła się w lutym. W jej trakcie Włodzimierz Szymanowski (Spryciula) zanurzył się w tym syfonie na głębokość -5m, stwierdzając możliwość dalszej eksploracji. Syfon rozpoczynał się studnią, która rozwijała się na pionowej szczelinie. Po tej akcji pomiędzy Syfonem Krakowskim a Syfonem Mysi pozostały 2 butle 4l...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./syfon_mysi_03_2003.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Jaskinia Wielka Śnieżna</b> - Działalność eksploracyjna w Syfonach Krakowskich 1999 - 2000<br>
		Eksploracja partii związanych z Syfonem Krakowskim i Syfonem Magdy, pomimo opinii poprzedników (A. Stupak, W. Kozieł) o ciasnotach, przyniosła ok. 130 metrów nowych korytarzy i wielkie nadzieje na odkrycie dużych partii jaskini pomiędzy...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./syfony_krakowskie_99-00.php">więcej...</a>]<br>&nbsp;
	</li>
</ul>
<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>ZIMNA</B> 
		</td>
	</tr>
</table>
<br>
<ul class="normal">

<?php
  ExtendedListItem('Jaskinia Zimna',
                   '17. lutego 2007 roku odbyło się nurkowanie w syfonach jaskini Zimnej...',
                   '../polska/publication.php?id=2007zimna','RELACJA Z WYJAZDU',
                   '25. Marzec 2007','Maciek \'Lama\' Olinkiewicz');
?>
<BR>
	<li class="normal">
		<b>Jaskinia Zimna</b> - Syfony w Jaskini Zimnej<br>
		Syfony w Jaskini Zimnej należą do najłatwiej dostępnych w Polsce. Dotarcie do nich wymaga jedynie pokonania poziomego odcinka jaskini o długości ok. 500m. Są tutaj trzy stałe syfony : Zwolińskich, Ogazy i Warszawiaków...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./zimna.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Jaskinia Zimna</b> - Obóz Sylwestrowy 1990/1991<br>
		...W programie sportowym było przewidziane nurkowanie w jaskini Zimnej. Akcję tę zorganizowaliśmy jako trening przed nurkowaniem w Syfonie Krakowskim w jaskini Wielka Śnieżna (-450m), gdzie aktualnie prowadziliśmy działalność eksploracyjną...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./zimna90-91.php">więcej...</a>]<br>&nbsp;
	</li>
</ul>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
