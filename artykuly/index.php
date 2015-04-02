<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

$GL_DIR = '..';

@include('../_php/publication_supp.php');
include('../_php/mysql.php');
include('../_php/settings.php');
include('../_php/misc.php');

	renderHead($bSubdir,'','');
	renderMenu($bSubdir,7,false,'ARTYKUŁY');
	renderGallery(true,false);
	renderCentral(true);
?>
		<!--============================= CONTENTS START ==========================================-->
<h1>
	ARTYKUŁY
</h1>

<!--
  ExtendedListItem('',
                   '...',
                   '../article.php?id=&?sec=','WIĘCEJ',
                   '.  2008','');
-->

<?php

NewSection('WYDARZENIA','section');

StartList();

	$sql="SELECT * FROM $ARTICLE_TABLE_NAME WHERE status='ready' and section='artykuły' ORDER BY date DESC";
	$result=$mysqli->query($sql);

	if($result) {

		while ($row = $result->fetch_assoc()) { // list start?

			ExtendedListItemMYSQL($mysqli,$row,'..');
		}
	}
                     
?>

	<li class="normal">
		<b>Ciekawostki z Francji</b><br> Goszcząc na stażu FFS w sierpniu 2005 zaobserwowałem wiele interesujących rzeczy. 
                [<a class="navismall" href="../artykuly/CiekawostkiZFrancji.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
                <b>Międzyrzecki Rejon Umocniony</b><br> MRU stanowi bardzo ciekawy obiekt architektury militarnej. Na rozległy pas umocnień składały się potężne bunkry z podziemnymi magazynami i koszarami połączone korytarzami z osią systemu, podziemną Główna Drogą Ruchu. 
                [<a class="navismall" href="../artykuly/mru.php">wiecej...</a>]
        <br>&nbsp;
	</li>
	<li class="normal">
		<b>Gałuboje Jeziero</b><br>
We wrześniu 2004 moskiewscy nurkowie Roman Prochorow i Igor Galajda
przeprowadzili nurkowanie w wywierzysku Gałuboje Jeziero.
[<a class="navismall" href="./galubujeJeziero2004.php">więcej...</a>]<br>&nbsp;
	</li>
        <li class="normal">
		<b>Grand Soucy</b><br>
Najgłębsze jak do tej pory nurkowanie na oddycharce Mk15.5 w jaskini wykonał Jerome Meynie w listopadzie 2003 w Grand Soucy (Francja, Commune de Saint-Vincent sur l'Isle). Jerome zanurzył się na głebokość -184m, przepływając przy tym odcinek 240 m w poziomie.
[<a class="navismall" href="./GrandSoucy2003.php">więcej...</a>]<br>&nbsp;

	</li>
	<li class="normal">
		<b>Blautopf</b><br>
27.09.2003 w wywierzysku Blautopf (Blaubeuren/Niemcy) zmarł podczas nurkowania 41 letni Dr. Bernd Aspacher należący do grupy nurków zabezpieczających nurkowanie J. Hasemayera.
[<a class="navismall" href="./blautopf2003.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Rekord w Bushmansgat</b><br>

		W dniu 11 września 2003 Leszek Czarnecki
ustanowił nowy rekord Polski w nurkowaniu jaskiniowym, zanurzając się na
głębokość 194 m w jaskini Boesmansgat (Bushmansgat) w RPA (1560 m n.p.m.).
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./bushmansgat2003.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Wypadek w jaskini Isverna (Rumunia)</b><br>
		W dniu 15 listopada 2002 roku w rumuńskiej jaskini Isverna (góry Muntii Mehedinti) zdarzył się wypadek...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./isverna2002.php">więcej...</a>]<br>&nbsp;

	</li>
	<li class="normal">
		<b>Wypadek w Grocie Scaletta na Przylądku Iacco (Capo Palinuro)</b><br>
		Dnia 10 .09.1996 o 17.30 trzech płetwonurków z Polski : Grzegorz Sosinka, Rafał Spyrka i Witold Olszowski, przebywający już od miesiąca we Włoszech na wyprawie, wpływają do jaskini Scaletta...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./scalet1.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">

		<b>Wypadek w Grocie Scaletta - inna relacja</b><br>
		Dnia 10.09.196 trzech płetwonurków zginęło w grocie morskiej Scaletta niedaleko Palinuro. Dwa ciała zostały wydobyte...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./scalett2.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Wypadek w Sotano de San Augustin</b><br>
		Ian Rolland, jeden z najbardziej doświadczonych brytyjskich płetwonurków jaskiniowych, zginął 27 marca 1994 eksplorując ostatni syfon w Sotano de San Augustin w Meksyku...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./sotdesan.php">więcej...</a>]<br>&nbsp;

	</li>
</ul>

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
