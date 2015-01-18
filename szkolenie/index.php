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
		<b>Lista sprzętu potrzebnego na Warsztatach Nurkowania Jaskiniowego</b><br>
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./listasprzetu.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Planowanie ilości mieszanek oddechowych</b><br>
		Poniższe rozważania dotyczą oddychania powietrzem. Planujemy, że podczas nurkowania przeznaczymy taka sama ilość powietrza na penetrację, powrót i rezerwę. Taki podział określa się mianem reguły jednej trzeciej...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./iloscmieszanek.php">więcej...</a>]<br>&nbsp;
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
		<b>Technika - Temperatura mieszanki oddechowej za pierwszym stopniem automatu</b><br>
		Celem niniejszego artykułu jest pokazanie praktycznego sposobu na wyznaczanie temperatury mieszanki oddechowej po rozprężeniu na pierwszym stopniu automatu...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./efektjt.php">więcej...</a>]<br>&nbsp;
	</li>
</ul>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
