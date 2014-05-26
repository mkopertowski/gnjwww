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

	renderHead($bSubdir);
	renderMenu($bSubdir,3,false,'TECHNIKA');
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>SZKOLENIE I TECHNIKA</h1>

<?php 

NewSection('SZKOLENIA','section');

StartList();

$sqlfiltr="section='technika'";

ArticleListFiltredMYSQL($mysqli,'..',$sqlfiltr);

?>

	<li class="normal">
		<b>Rebreathery w nurkowaniu jaskiniowym</b><br>
		Informacje dotyczące zastosowania aparatów SCR i CCR w przestrzeniach zamkniętych.
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="../_uc/uc.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Lista sprzętu potrzebnego na Warsztatach Nurkowania Jaskiniowego</b><br>
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./listasprzetu.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Trudności w nurkowaniu jaskiniowym</b><br>
		Zalane podziemia tworzą specyficzne środowisko, które człowiek stara się penetrować, pomimo jego niedostępności. Jeżeli podwodne korytarze powstały w sposób naturalny - to mamy do czynienia z jaskinią. Wtedy celem penetracji jest eksploracja nowych miejsc...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./trudnosci.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Przygotowanie sprzętu do nurkowania w jaskini</b><br>
		Ze względu na fakt, że nurkując w podziemiach nie można natychmiast   wynurzyć   się,    każdy element aparatu umożliwiający oddychanie musi być zdublowany. Podstawowym wyposażeniem każdego płetwonurka jaskiniowego są...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./sprzet.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Latarki używane w Podkomisji Nurkowania Jaskiniowego</b><br>
		Oświetlenie jest bardzo ważnym elementem sprzętu uzywanego do nurkowania w jaskiniach. Zabieramy zawsze co najmniej dwie latarki o czasie świecenie dłuższym od planowanego nurkowania. Mocujemy je na kasku za pomocą gumek przełożonych przez...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./latarki.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Technika poruszania się pod wodą</b><br>
		Ze względu na łatwość stracenia  orientacji  w  syfonie musi być poprowadzona poręczówka, która zapewni nieprzerwane połączenie pomiędzy dowolnym punktem  osiąganym   podczas nurkowania a powierzchnią...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./poruszaniesie.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Technika poręczowania</b><br>
		Zalane korytarze poręczujemy rozwijając linkę z kołowrotka. Przed nurkowaniem linka musi być odpowiednio przygotowana. Należy umieścić na niej markery określające odległość oraz kierunek do wyjścia...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./technikaporeczowania.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Planowanie ilości mieszanek oddechowych</b><br>
		Poniższe rozważania dotyczą oddychania powietrzem. Planujemy, że podczas nurkowania przeznaczymy taka sama ilość powietrza na penetrację, powrót i rezerwę. Taki podział określa się mianem reguły jednej trzeciej...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./iloscmieszanek.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Wykorzystanie depozytów</b><br>
		Jeśli miejsce, do którego chcemy dopłynąć w jaskini, wymaga zużycia&nbsp;wiekszej niż wynika to z reguły 1/3 dla zestawu głównego ilości gazów oddechowych, należy wykorzystać dodatkowe butle z czynnikiem oddechowym, tzw. depozyty...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./depozyty.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>System mocowania butli po bokach</b><br>
		Ten sposób mocowania jest przewidziany do ciasnych i krótkich syfonów. Jego głównym założeniem jest możliwość łatwego przypinania i odpinania butli. Ze względu na przewidywane ciasności standardowy jacket nie będzie używany. Wobec tego należy użyć specjalnych taśm do mocowania...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./sidemount_pl.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Automaty</b><br>
		W nurkowaniu jaskiniowym zawsze używa się dwu niezależnych butli. Dobrze jest jeżeli jeden z drugich stopni automatów jest prawy a drugi lewy. Każdy z automatów należy przygotować w podobny sposób...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./automat.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Kołowrotek</b><br>
		Zasadniczym wyposażeniem każdego nurka jaskiniowego jest kołowrotek. Jego konstrukcja jak i przeznaczenie różni się istotnie od kołowrotków używanych podczas nurkowania w morzu. Poręczówka w jaskini służy do wskazywania kierunku powrotu w przypadku zmącenia wody...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./kolowrotek.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Autoratownictwo</b><br>
		Poniżej są omówione dwie najczęstsze sytuacje wymagające zastosowania specjalnych procedur ratowniczych. Związane są one z poruszaniem się w korytarzu jaskini...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./autoratownictwo.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Technika - Temperatura mieszanki oddechowej za pierwszym stopniem automatu</b><br>
		Celem niniejszego artykułu jest pokazanie praktycznego sposobu na wyznaczanie temperatury mieszanki oddechowej po rozprężeniu na pierwszym stopniu automatu...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./efektjt.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Nawigacja w technicznym nurkowaniu jaskiniowym</b><br>
		Rozbudowane procedury nawigacyjne stanowią ważny element w <i>technicznym nurkowaniu jaskiniowym</i>. W systemie tym zakłada się, że...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="../article.php?id=2008Nawigacja&sec=szkolenie">więcej...</a>]<br>&nbsp;
	</li>
</ul>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
