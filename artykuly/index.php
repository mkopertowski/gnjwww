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

  ExtendedListItem('Specyfika pracy na podwodnym stanowisku archeologicznym',
                   '...',
                   '../article.php?id=2012ArcheologiaPodwodna&sec=artykuly','WIĘCEJ',
                   '20. Września 2012','Dominik Graczyk');
  
  ExtendedListItem('10 lat eksploracji masywu Bihor',
                   '...',
                   '../article.php?id=2010RumuniaBihor&sec=artykuly','WIĘCEJ',
                   '23. Kwietnia 2010','Mirosław Kopertowski');
  
  ExtendedListItem('Kurs fotografii podwodnej',
                   'W dniach 23–24 lutego 2008 roku, na krakowskim Zakrzówku, obył się kurs fotogragii podwodnej (PF1)...',
                   '../article.php?id=2008KursFoto&sec=artykuly','WIĘCEJ',
                   '13. Marca 2008','Maciek "Lama" Olinkiewicz');

  ExtendedListItem('III Międzynarodowy Kongres Nurkowania Jaskiniowego',
                   'W dniach 18-19 maja, we Francji, odbył się III Międzynarodowy Kongres Nurkowania Jaskiniowego. To jedno z ważniejszych wydarzeń w roku w dziedzinie nurkowania jaskiniowego...',
                   '../artykuly/publication.php?id=IIIKongres','WIĘCEJ',
                   '27. Maj 2007','Mirek Kopertowski');

  ExtendedListItem('Zimowa działalność PNJ - podsumowanie',
                   'Podczas zimy 2006/2007 spelonurkowie działający przy Podkomisji Nurkowania 
                    Jaskiniowego zorganizowali 5 biwaków jaskiniowych spędzając na nich łącznie 
                    15 dni!...',
                   '../polska/publication.php?id=2007PNJZima','WIĘCEJ',
                   '7. Kwiecień 2007','Mirek Kopertowski');
                   
?>

	<li class="normal">
		<b>Tatry 4-5.02.2006</b><br> 
      Podczas weekendu odbył się krótki ale za to bardzo intensywny wyjazd 
      kondycyjno-towarzyski GNJ...           
      [<a class="navismall" href="../artykuly/TatryLuty2006.php">więcej...</a>]
      <br><br><div align="right"><i>zamieszczono: 12. Luty 2006</i></div>
              <div align="right"><i>autor: Lucyna Cieślik</i></div>      
      
	</li>
	<li class="normal">
		<b>Akcja ratownicza w jaskini ,,Bystrej” w Tatrach. </b><br> 
                Tekst pochodzi z prywatnych zbiorów Jarka Kura. 
                [<a class="navismall" href="../artykuly/AkcjaWBystrej.php">więcej...</a>]<br>&nbsp;
	</li>
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
