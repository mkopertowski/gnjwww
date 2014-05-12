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
  ExtendedListItem('Wodna Pod Pisaną – ciąg dalszy eksploracji',
                   'W dniu 15 września przeprowadzono kolejne nurkowania ',
                   '../polska/publication.php?id=2012wpp','WIĘCEJ',
                   '29. Września 2012','Arkadiusz Nowak');
		
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
<li class="normal">
		<b>Jaskinia Dudnica</b> - W dniu 14 marca 2004 odbyła się akcja filmowa w jaskini Dudnica. Nakręcono pierwszy w Polsce film w syfonach ...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./dudnica2004_03.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Jaskinia Dudnica</b> - Moje pierwsze nurkowanie jaskiniowe - Dudnica'2002<br>
		...Pogoda była piękna - mało śniegu i lekki mróz. Przebraliśmy się pod otworem (Wiktor nurkował "na sucho", Arnold i ja w piankach), sprawdziłem jeszcze raz automaty i zanurzyłem się w czystej wodzie. Pierwszy syfon, choć krótki...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./dudnica12_2002.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Jaskinia Dudnica</b> - Problem eksploracyjny w Dudnicy nadal otwarty<br>
		Najłatwiej dostępnym miejscem, gdzie można wykonać nurkowanie w korytarzu zalanym po strop jest jaskinia Dudnica, położona w Tatrach nieopodal Kalatówek. Odkryto ją jeszcze w 1932r., kiedy to Stefan Zwoliński i Józef Dobiecki...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./dudnica.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Jaskinia Dudnica</b> - Nurkować w jaskiniach latem ? - ależ tak!<br>
		Już od prawie czterech lat trwa uporczywa eksploracja Syfonu Drzemiącego w Śnieżnej Studni. Zmęczeni wyczerpującymi podejściami w zimie postanowiliśmy wykorzystać lato do kolejnych ataków, zwłaszcza, że poziom wody...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./nurkowaniewlecie.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Jaskinia Dudnica 1972</b> - pierwsze sekcyjne nurkowanie.<br>
		Opis akcji nurkowej przeprowadzonej w jaskini Dudnica w 1972 roku przez członków Sekcji Grotołazów z Wrocławia. Tekst dostarczony przez Włodka Szymanowskiego...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./dudnica1972.php">więcej...</a>]<br>&nbsp;
	</li>
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

<li class="normal">
	<b>Kasprowa Niżnia - Luty 2004</b> W dniu 04.02.2004 Jarosław Niekludow (Garbek) przeprowadził akcję poznawczą w syfonach w jaskini Kasprowej Niżniej. W Syfonie Warszawiaków (V) przepłynął 260m korzystając z zestawu 2x10l. Transoort przez cztery pierwsze syfony zrobił przy użyciu zestawu 2x4l. W czasie powrotu z jaskini odwilż dotarła do jaskini zalewając Złotą Kaczkę. Garbek wraz z ekipą wspomagającą po ciężkiej walce uszli z życiem ... &nbsp;&nbsp;&nbsp;
[<a class="navismall" href="../polska/kasprowa_garbek.php"> więcej ...</a>]

     <br>&nbsp;
</li>
	<li class="normal">
		<b>Jaskinia Kasprowa Niżna</b> - Eksploracja za Ósmym Syfonem<br>
		Jaskinia Kasprowa Niżnia jest jednym z najatrakcyjniejszych problemów nurkowych w Polsce - w znacznej mierze dzięki łatwemu dostępowi. Otwór znajduje się niemalże w korycie Kasprowego Potoku, około 200 m od szlaku wiodącego...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./kasprowa.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Jaskinia Kasprowa Niżna</b> - Nurkowanie w Kasprowej Niżniej<br>
		Pod koniec sezonu zimowego 96 odbyła się akcja nurkowa w jaskini Kasprowa Niżnia, zorganizowana przez Sekcję Grotołazów Wrocław. Wzięli w niej udział : Wiktor Bolek- kierownik, płetwonurek oraz koledzy, którzy pomogli w...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./kasprowazima1996.php">więcej...</a>]<br>&nbsp;
	</li>
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
	<li class="normal">
		<b>Nurkowanie w Wielkich Kominach</b><br>
		Jeszcze w styczniu 2004 narodził się plan nurkowania w Wielkich Kominach jaskini Miętusiej. W dniu 24 stycznia odbył się uciążliwy transport sprzętu nurkowego. Akcja transportowa bardzo się przeciągnęła gdyż na powierzchni była tak duża ilość świeżego śniegu, ze torowanie i szukanie otworu zajęło nam kilka godzin...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./mietusia.01.2005.php">więcej...</a>]<br>&nbsp;
	</li>
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
