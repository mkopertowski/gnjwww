<?php

$bSubdir = false;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

$dots = '.';

$GL_DIR = '.';

@include('./_php/publication_supp.php');
include('./_php/mysql.php');
include('./_php/settings.php');
include('./_php/misc.php');

	renderHead($bSubdir,'','');
	renderMenu($bSubdir,2,false,'STRONA GŁÓWNA');
	renderGallery($bSubdir,false);
	renderUpdates($bSubdir,getLastUpdateMYSQL($mysqli));
	renderPZA($bSubdir);
	
	renderCentral(true);
?>
		
<!--============================= CONTENTS START ==========================================-->




<!--<div align=left><p class="hotinfo">
  <a class="hotinfo" href="./ogloszenia/index_plany.php">OGŁOSZENIA</a>
  
</p></div>-->

<div align=center><p class="hotinfo">


<!--

<font size="5">22 stycznia, Uniwersystet Warszawski, Archeologia Podwodna. Zapraszamy na prezenta cje.</font> <br>
<font size="3">Więcej informacji w sekcji <a class="hotinfo" href="./ogloszenia/index_var.php">Ogłoszenia.</a><br></font></i>
<br><br>-->

<!--
<font size="5">W dniach 30.04-03.05 odbyły się Warsztaty Nurkowania Jaskiniowego edycja 2011</font> <br>
<font size="3">Więcej informacji niebawem </font></i>
<br><br>
-->

<font size="4">Plany Grupy Nurków Jaskiniowych PZA na rok 2014</font> <br>
<font size="3">Więcej informacji w sekcji <a class="hotinfo" href="./ogloszenia/index_plany.php">Ogłoszenia.</a><br></font></i>
<br>

<font size="4"><font color=#d76a01>Najbliższe Warsztaty Nurkowania Jaskiniowego odbędą się podczas wyjazdu turystyczno-eksploracyjnego na Bałkanach, termin majówkowy to jest 26 kwietnia - 4 maja 2014.</font></font> <br>
<font size="3"><font color=#d76a01>Więcej informacji w sekcji <a class="hotinfo" href="./warsztaty/index.php">Warsztaty.</a> Zapraszamy</font></font></i>
<br><br>

</div>


<!--
<div align=left><p class="hotinfo">
</p>
<i>Spotkanie odbędzie się podczas Speleokonfrontacji, 21 listopada br. w Podlesicach (Zajazd Jurajski „U Konkurencji”) około godziny 13.00.</i>
</div>




<div align=left><p class="hotinfo">
  Zapraszamy na 
  <a class="hotinfo" href="./warsztaty/index.php"> 
  WARSZTATY NURKOWANIA JASKINIOWEGO</a>,
  termin: 30.04-3.05 2009
</p></div>

<div align=left><p class="hotinfo">
  Zapraszamy na 
  <a class="hotinfo" href="./warsztaty/index.php"> 
  KURS NURKOWANIA JASKINIOWEGO</a>,
  termin: 2-4. Listopad 2007
</p></div>

<div align=left><p class="hotinfo">
  Kurs Fotografii Podwodnej dla nurków jaskiniowych, 23-24.02.2008.
  <a class="hotinfo" href="./rozne/publication.php?id=kurspf1">INFORMACJE</a>
</p></div>

<div align=left><p class="hotinfo">
  Warsztaty Opieki Nad Poszkodowanym, 8-9.03.2008.
  <a class="hotinfo" href="./ratownictwo/publication.php?id=wonp">INFORMACJE</a>
</p></div>

<div align=left><p class="hotinfo">
  4th International Cave Diving Congress 2008, 31 May - 1 Jun 2008.
  <a class="hotinfo" href="http://www.congresips.com">INFORMACJE</a>
</p></div>

<div align=left><p class="hotinfo">
  IV th European Speleological Congress
  <a class="hotinfo" href="http://vercors2008.ffspeleo.fr/events/animations/pallets.htm">INFORMACJE</a>
</p></div>
-->
<div align=center><p class="hotinfo">
  Informacje na temat bieżącej działalności speleonurkowej GNJ (Cave Diving Group) dostępne są na grupie:
  <i>PNJ-KTJ@googlegroups.com</i>. 
  <a class="hotinfo" href="http://groups.google.com/group/PNJ-KTJ/subscribe?hl=pl">ZAPRASZAMY DO SUBSKRYPCJI !!!</a>
</p></div>
<br>
<!--<div align=center>


  <table align=center>

 </table>
</div>
<br><br>
<div align=right>
[ <a class="navi" href="./aktualnosci/index2002.php">Rok 2002</a> ] 
[ <a class="navi" href="./aktualnosci/index2003.php">Rok 2003</a> ] 
[ <a class="navi" href="./aktualnosci/index2004.php">Rok 2004</a> ]
[ <a class="navi" href="./aktualnosci/index2005.php">Rok 2005</a> ]
[ <a class="navi" href="./aktualnosci/index2006.php">Rok 2006</a> ]

</div>-->
<br>

<?php

$sql="SELECT * FROM $ARTICLE_TABLE_NAME WHERE status='ready' ORDER BY date DESC LIMIT $AKTUALNOSCI_LIMIT";
$result=$mysqli->query($sql);

if($result) {

	NewSection('AKTUALNOŚCI','section');
	StartList();
	
	while ($row = $result->fetch_assoc()) {
		ExtendedListItemMYSQL($mysqli,$row,'.');
	}
	
	EndList ();
}
	

/*
  ExtendedListItem('',
                   '...',
		   $dots.'/article.php?id=2008&sec=','WIĘCEJ',
		   '. 2008','');
//-----------------------------------------------------
NewSection('','section');

StartList();

  ListItem('<b></b>');
  ExtendedListItem('','','','','');
  ExtendedListItem($title,$tekst,$link,$data,$autor);
EndList();
*/

/*
ExtendedListItem('<IMG src="./_gfx/new.gif" border=0>Komati Springs – Sodwana Bay – Monachium. Wyjazd nie tylko nurkowy',
                   'Relacja z wrześniowego wyjazdu do RPA.', 
				   $dots.'./article.php?id=2012rpa&sec=swiat','Więcej',
				   '2. Listopada 2012','D.Graczyk, T.Zapiór');

*/






//------------------------------------------------------

NewSection('Listopad 2013','section');

StartList();
ExtendedListItem('Speleonurkowe eksploracje GNJ',
                   'Kosowo i Serbia VIII-IX 2013', 
				   $dots.'./article.php?id=2013kosowoserbia&sec=swiat','Więcej',
				   '14. Listopada 2013','D.Graczyk');

ExtendedListItem('XVI Warsztaty Nurkowania Jaskiniowego',
                   'Relacja uczestnika jesiennej edycji XVI Warsztatów Nurkowania Jaskiniowego - Maćka Chomicza', 
				   $dots.'./article.php?id=2013_3wnj&sec=warsztaty','Więcej',
				   '12. Listopada 2013','M.Chomicz');
				   
EndList ();

NewSection('Czerwiec 2013','section');

StartList();
ExtendedListItem('XVI Warsztaty Nurkowania Jaskiniowego',
                   'XVI Warsztaty Nurkowania Jaskiniowego okiem Piotra Majchrzaka.', 
				   $dots.'./article.php?id=2013_2wnj&sec=warsztaty','Więcej',
				   '13. Czerwca 2013','P.Majchrzak');
				   
ExtendedListItem('XVI Warsztaty Nurkowania Jaskiniowego',
                   'XVI Warsztaty Nurkowania Jaskiniowego okiem Agnieszki Masiewicz.', 
				   $dots.'./article.php?id=2013_wnj&sec=warsztaty','Więcej',
				   '13. Czerwca 2013','A.Masiewicz');

EndList ();

NewSection('Maj 2013','section');
StartList();
ExtendedListItem('Speleonurkowa majówka 2013',
                   'Relacja z wyjazdu do Serbii', 
				   $dots.'./article.php?id=2013serbia&sec=swiat','Więcej',
				   '12. Maja 2013','Dominik Graczyk');

EndList ();


NewSection('Kwiecień 2013','section');

StartList();
ExtendedListItem('Wyprawa do San Agustin (Meksyk)',
                   '',
                   '','',
                   '22. Kwietnia 2013','Mirosław Kopertowski');
                   
  ?>
<BR>
<div align=center>
<object width="425" height="350">	<param name="movie" value="http://www.youtube.com/v/XRdFKLa1u7M"></param>	<embed src="http://www.youtube.com/v/XRdFKLa1u7M" type="application/x-shockwave-flash" wmode="transparent" width="425" height="350"></embed></object><br />
</div>
<br>
<?php

ExtendedListItem('Relacja z wyprawy do J2',
                   '', 
				   $dots.'./article.php?id=2013j2&sec=swiat','Więcej',
				   '15. Kwietnia 2013','Dominik Graczyk');

EndList ();

NewSection('Marzec 2013','section');

StartList();
ExtendedListItem('San Agustin - wieści z wyprawy do Meksyku',
                   '', 
				   $dots.'./article.php?id=2013sanagustin&sec=swiat','Więcej',
				   '30. Marca 2013','Mirosław Kopertowski (SGW/GNJ)');

EndList ();

NewSection('Luty 2013','section');

StartList();

  ExtendedListItem('Wyprawa do San Agustin (Meksyk)',
                   'Już 25 lutego ruszamy na wyprawę do San Agustin. Trzymajcie za nas kciuki!',
                   '','',
                   '10. Luty 2013','Mirosław Kopertowski');
                   
  ?>
<BR>
<div align=center>
<object width="425" height="350">	<param name="movie" value="http://www.youtube.com/v/2xMID7ydX28"></param>	<embed src="http://www.youtube.com/v/2xMID7ydX28" type="application/x-shockwave-flash" wmode="transparent" width="425" height="350"></embed></object><br />
</div>
<br>
<?php

EndList ();



NewSection('Listopad 2012','section');

StartList();
ExtendedListItem('Komati Springs – Sodwana Bay – Monachium. Wyjazd nie tylko nurkowy',
                   'Relacja z wrześniowego wyjazdu do RPA.', 
				   $dots.'./article.php?id=2012rpa&sec=swiat','Więcej',
				   '2. Listopada 2012','D.Graczyk, T.Zapiór');

EndList ();

NewSection('Październik 2012','section');

StartList();
ExtendedListItem('XV Warsztaty Nurkowania Jaskiniowego 2012 Edycja Jesienna',
                   'XV Warsztaty Nurkowania Jaskiniowego okiem Marcina Malinowskiego.', 
				   $dots.'./article.php?id=2012_4wnj&sec=warsztaty','Więcej',
				   '31. Października 2012','M.Malinowski');

ExtendedListItem('XV Warsztaty Nurkowania Jaskiniowego 2012 Edycja Jesienna',
                   'W dniach 19-22 października odbyła się kolejna edycja XV WNJ.', 
				   $dots.'./article.php?id=2012_3wnj&sec=warsztaty','Więcej',
				   '30. Października 2012','N.Szywała');

ExtendedListItem('Hranicka Propast - 373m',
                   '1 października 2012 r. Krzysztof Starnawski wraz z pomocą grupy czeskich nurków osiągnął w Hranickiej Propasti głębokość 217m, skąd opuścił sondę do głębokości 372m. Obecnie jaskinia z głębokością 372m jest drugą co do głębokości podwodną jaskinią na świecie. Pierwsza - Pozzo del Merro w środkowych Włoszech ma 470m głębokości, z czego 392m wypełnione jest wodą.',
                   '','',
                   '5. Października 2012','mp');

EndList ();

NewSection('Wrzesień 2012','section');

StartList();
ExtendedListItem('Jaskinia Wodna Pod Pisaną',
                   'Nurkowanie w Syfonie II...',
                   $dots.'./polska/publication.php?id=2012wpp&sec=polska','Więcej',
                   '29. Września 2012','A.Nowak');	


ExtendedListItem('Artykuł Dominika Graczyka',
                   'Specyfika pracy na podwodnym stanowisku archeologicznym',
                   $dots.'./article.php?id=2012ArcheologiaPodwodna&sec=artykuly','Więcej',
                   '20. Września 2012','D.Graczyk');	


ExtendedListItem('Zimnik',
                   'Nurkowania w różnych obiektach na Dolnym Śląsku, i nie tylko...',
                   $dots.'./article.php?id=2012Zimnik&sec=polska','Więcej',
                   '15. Września 2012','D.Graczyk');	

EndList ();

NewSection('Lipiec 2012','section');

StartList();
ExtendedListItem('Wyprawa do Kosowa',
                   'Relacja',
                   $dots.'./article.php?id=2012kosowo&sec=swiat','Więcej',
                   '12. Lipca 2012','D.Graczyk');	

EndList ();

NewSection('Czerwiec 2012','section');

StartList();
ExtendedListItem('Słoweńska czerwcówka',
                   'Relacja z wyjazdu do Słowenii',
                   $dots.'./article.php?id=2012slowenia2&sec=swiat','Więcej',
                   '10. Czerwca 2012','T.Zapiór, A.Budziarek');	

ExtendedListItem('Śląskie Manewry Ratownictwa Jaskiniowego 2012',
                   'Relacja z pozorowanej akcji ratunkowej',
                   $dots.'./article.php?id=2012SMRJ&sec=ratownictwo','Więcej',
                   '05. Czerwca 2012','mp');	

EndList ();

NewSection('Maj 2012','section');

StartList();

ExtendedListItem('Warsztaty Nurkowania Jaskiniowego 2012 - druga edycja',
                   'Początki zawsze są trudne',
                   $dots.'./article.php?id=2012_2wnj&sec=warsztaty','Więcej',
                   '05. Czerwca 2012','E.Sieńko');	

ExtendedListItem('Majówka 2012 - Słowenia',
                   'Relacja z Bałkanów',
                   $dots.'./article.php?id=2012slowenia&sec=swiat','Więcej',
                   '04. Czerwca 2012','Honzo');
			   
EndList();


NewSection('Kwiecień 2012','section');

StartList();

ExtendedListItem('Warsztaty Nurkowania Jaskiniowego 2012',
                   'Wspomnienia po kolejnej edycji WNJ.',
                   $dots.'./article.php?id=2012_1wnj&sec=warsztaty','Więcej',
                   '23. Kwietnia 2012','Honzo');
				   
ExtendedListItem('Podwodne ćwiczenia z zakresu nurkowego ratownictwa jaskiniowego',
                   'W sobotę 21. kwietnia przeprowadziliśmy kilkugodzinne ćwiczenia w zalewie Pogoria w Dąbrowie Górniczej. Polegały na przetransportowaniu poszkodowanego nurka-grotołaza w noszach ratunkowych z punktu A do B, pod wodą.
				   Udział wzięły ostatecznie trzy osoby Michał Plata (KKS), Dominik Graczyk (SW), Jacek Strejczyk (AVEN). Każdorazowo jeden z płetwonurków układany był w noszach, podczas gdy dwóch kolegów ćwiczyło pływalność doskonałą układu.',
                    './galeria/gallery.php?id=2012pogoria','Galeria',
                   '21. Kwietnia 2012','mp');				   
				   
EndList();

NewSection('Marzec 2012','section');

StartList();

ExtendedListItem('Śląskie Manewry Ratownictwa Jaskiniowego 2012',
                   '10. marca przeprowadzono rekonesans podziemnych sztolni w Bytomiu Suchej Górze związany z tegorocznymi Śląskimi Manewrami Ratownictwa Jaskiniowego organizowanymi tradycyjnie przez Tarnogórski Klub Taternictwa Jaskiniowego i PZA.
				   Nie zdradzając zbyt wiele, manewry mają zawierać wątek speleonurkowy; będzie przeprowadzona pozorowana akcja wydobycia poszkodowanego nurka zza syfonu.
				   Podczas tej akcji poszukiwaliśmy miejsca dogodnego do przeprowadzenia podwodnego transportu ze szczególnym uwzględnieniem aspektów bezpieczeństwa.
				   Nurkowali Michał Plata (Katowicki Klub Speleologiczny), Adam Zioło Pawlik (Centrum Nurkowe Anaconda), Jacek Strejczyk (Speloklub AVEN). Dziękujemy za pomoc członkom i sympatykom Klubu Nurkowego Anaconda, Strażakom OSP Zbrosławice, Speloklubu AVEN z Sosnowca.',
                   './galeria/gallery.php?id=2012SMRJ1','Więcej',
                   '14. Marca 2012','mp');
				   
EndList();

NewSection('Grudzień 2011','section');

StartList();

  ExtendedListItem('Rekord w Dahab',
                   'Podczas zanurzenia treningowego w grudniu 2011 Krzysztof Starnawski zanurkował na głębokość 283m w Dahab w Egipcie.
Wykorzystany został zdublowany rebreather marki HammerHead.
Zanurzenie poprzedza planowane nurkowanie do dna Hranickiej Propasti w Czechach.',
                   '','',
                   '26. Grudnia 2011','mp');
				   
ExtendedListItem('Wyprawa do Puerto Rico',
                   'Relacja Honza',
                   $dots.'./article.php?id=2011puertorico&sec=swiat','Więcej',
                   '03. Grudnia 2011','Dominik Honzo Graczyk');
EndList();

NewSection('Listopad 2011','section');

StartList();

  ExtendedListItem('XIV Warsztaty Nurkowania Jaskiniowego - edycja jesienna',
                   'Relacja Honza',
                   $dots.'./article.php?id=2011_2wnj&sec=warsztaty','Więcej',
                   '01. Grudnia 2011','Dominik Honzo Graczyk');
				   
ExtendedListItem('Wyprawa do Puerto Rico',
                   'Relacja Honza',
                   $dots.'./article.php?id=2011puertorico&sec=swiat','Więcej',
                   '03. Grudnia 2011','Dominik Honzo Graczyk');
EndList();

NewSection('Wrzesień 2011','section');

StartList();

  ExtendedListItem('Smutne wieści z Francji',
                   'Z głębokim żalem przyjęliśmy wiadomość o śmierci Roberta Kleina, doskonałego nurka jaskiniowego, popularyzatora naszego sportu i doświadczonego instruktora.
                    Składamy serdeczne wyrazy współczucia Rodzinie. Cześć Jego Pamięci.',
                   '','',
                   '-','');
  
  ExtendedListItem('Smutne wieści z Irlandii',
                   'Podczas nurkowania w jaskini Pollonora Co. Galway w Irlandii zginął Artur Kozłowski. Był jednym z najbardziej doświadczonych
                    polskich nurków jaskiniowych.',
                   'http://www.independent.ie/national-news/rescuers-continue-efforts-to-recover-body-of-cave-diver-2868577.html','Irish Independent',
                   '8. Września 2011','Mirek Kopertowski');

  ExtendedListItem('Kosowo, Czarnogóra',
                   'Relacja Honza',
                   $dots.'./article.php?id=2011kosowoczarnogora&sec=swiat','Więcej',
                   '03. Września 2011','Dominik Honzo Graczyk');
                   
  ExtendedListItem('Tatry',
                   'Artykuł Honza',
                   $dots.'./article.php?id=2011tatry&sec=polska','Więcej',
                   '03. Września 2011','Dominik Honzo Graczyk');
                   
EndList();



NewSection('Maj 2011','section');

StartList();

  ExtendedListItem('XIV Warsztaty Nurkowania Jaskiniowego',
                   'Relacja Honza',
                   $dots.'./article.php?id=2011wnj&sec=warsztaty','Więcej',
                   '14. Maja 2011','Dominik Honzo Graczyk');
                   
  ExtendedListItem('Serbia i Macedonia',
                   'Relacja Sebastiana Dobrowolskiego',
                   $dots.'./article.php?id=2011SerbiaMacedonia&sec=swiat','Więcej',
                   '30. Maja 2011','Sebastian Dobrowolski');
                   
EndList();




//-----------------------------------------------------

NewSection('Sierpień 2010','section');

StartList();

  ExtendedListItem('Wyprawa GNJ do Kosowa',
                   'Relacja Honza',
                   $dots.'./article.php?id=2010kosowo&sec=swiat','Więcej',
                   '14. Lutego 2011','Dominik Honzo Graczyk');
				   
				   ?>
<BR>
<div align=center>
<object width="425" height="350">	<param name="movie" value="http://www.youtube.com/v/PI3FTBlWvKE"></param>	<embed src="http://www.youtube.com/v/PI3FTBlWvKE" type="application/x-shockwave-flash" wmode="transparent" width="425" height="350"></embed></object><br />
</div>
<br>
<?php
                   
EndList();



NewSection('Czerwiec 2010','section');

StartList();

  ExtendedListItem('XIII Warsztaty Nurkowania Jaskiniowego',
                   'Relacja z warsztatów',
                   $dots.'./article.php?id=2010wnj&sec=warsztaty','Więcej',
                   '25. Czerwca 2010','Adam Więch');
                   
EndList();

NewSection('Maj 2010','section');

StartList();

  ExtendedListItem('Wyprawa GNJ do Albanii i Grecji',
                   'Relacja',
                   $dots.'./article.php?id=2010albania&sec=swiat','Więcej',
                   '25. Czerwca 2010','Dominik Honzo Graczyk');
                   
EndList();



NewSection('Kwiecień 2010','section');

StartList();

  
  ExtendedListItem('Sobótka Górka',
                   'Nurkowanie w szybie Elza kopalni magnezytu.',
                   $dots.'./article.php?id=2010Sobotka1&sec=polska','Więcej',
                   '30. Kwietnia 2010','Mirosław Kopertowski');
                   
  ?>
<BR>
<div align=center>
<object width="425" height="350">	<param name="movie" value="http://www.youtube.com/v/s99_ktc5KXQ&hl"></param>	<embed src="http://www.youtube.com/v/s99_ktc5KXQ&hl" type="application/x-shockwave-flash" wmode="transparent" width="425" height="350"></embed></object><br />
</div>
<br>
<?php
  
  ExtendedListItem('10 lat eksploracji masywu Bihor',
                   'Góry Bihor znajdują się w północno-zachodniej części Rumunii. Ze względu na swój unikatowy krajobraz i mikroklimat przyciągają turystów z całej Europy. Niewielu z nich zdaje sobie jednak sprawę, że góry te są prawdziwym rajem dla speleologów. Występują tu prawie wszystkie formy krasowe, takie jak: jaskinie, aweny, polja, kotły eworsyjne, ponory oraz najbardziej interesujące dla nurków jaskiniowych - wywierzyska.',
                   $dots.'./article.php?id=2010RumuniaBihor&sec=artykuly','Więcej',
                   '23. Kwietnia 2010','Mirosław Kopertowski');
                   
EndList();






NewSection('Marzec 2010','section');

StartList();

  ExtendedListItem('Marble Arch i Prods Pot-Cascades',
                   'Raport z grudniowego połączenia dwóch jaskiń w Irlandii Północnej',
                   $dots.'./article.php?id=2010Marble&sec=swiat','Więcej',
                   '16. Marca 2010','Artur Kozłowski');
                   
EndList();




NewSection('Luty 2010','section');

StartList();

  ExtendedListItem('Warsztaty opieki nad poszkodowanym',
                   'Relacja',
                   $dots.'./article.php?id=2010WONP&sec=ratownictwo','Więcej',
                   '08. Marca 2010','Dominik "Honzo" Graczyk');
                   
EndList();


NewSection('Grudzień 2009','section');

StartList();

  ExtendedListItem('Obiekt W',
                   'Podobno jeden obraz zastępuje tysiące słów. Więc nie będę wiele pisał, tylko pokaże kilka zdjęć z polskiej "jaskini". Mam nadzieję, że zdjęcia rozpalą waszą wyobraźnię. W planie mam/mamy sesje zdjęciowe w innych zalanych obiektach. Ze względów bezpieczeństwa nie podaję ani nazwy ani lokalizacji -- i tak wszyscy zainteresowani wiedzą o czym mowa. Zdjęcia powstały na jednym nurkowaniu w listopadzie 2009. Więcej zdjęć na stronie http://www.nurkomania.pl/nurkowanie_jaskiniowe_obiekt_w.htm ',
                   './galeria/gallery.php?id=2009ObiektW','Więcej',
                   '04 Grudnia 2009','Andrzej "Martin" Kasiński');
  
  ExtendedListItem('Nurkowanie w Rumunii',
                   'Relacja Honza z wyprawy speleonurkowej do Rumunii i Serbii',
                   $dots.'./article.php?id=2009Rumunia_Serbia&sec=swiat','Więcej',
                   '29. Listopada 2009','Dominik "Honzo" Graczyk');
                   
  
EndList();

NewSection('Listopad 2009','section');

StartList();

  ExtendedListItem('Tajemnica Homara - zwiastun',
                   'Relacja wkrótce. W projekcie uczestniczą: magazyn Odkrywca, GralMarine - Bartłomiej Grynda, ProjektFilm oraz Grupa Nurków Jaskiniowych.',
                   '','',
                   '3. Listopad 2009','Mirek Kopertowski');

?>
<BR>
<div align=center>
<object width="425" height="350">	<param name="movie" value="http://www.youtube.com/v/DswstyqYrhY"></param>	<embed src="http://www.youtube.com/v/DswstyqYrhY" type="application/x-shockwave-flash" wmode="transparent" width="425" height="350"></embed></object><br />
</div>
<br>
<?php

EndList();

NewSection('PAŹDZIERNIK 2009','section');

StartList();

 ExtendedListItem('Green Holes',
                   'Doolin to mała nadmorska wioska położona w północno-zachodniej części hrabstwa Clare, na krańcach Burren -  jednego z największych i najbardziej unikalnych krajobrazów wapiennych w Europie. Widok z nabrzeża zapiera oddech w piersi...',
                   './galeria/gallery.php?id=2009GreenHoles','WIĘCEJ',
                   '23. Październik 2009','Artur Kozłowski');

  ExtendedListItem('Kopalnia w Nawojowie Śląskim - odsłona druga',
                   'Prawie całą sobotę zajeło nam oczyszczenie szybu (prace podwodne). Udało się, osiągneliśmy pierwszy poziom kopalni: chodnik, sala, 3 rozgałęzienia. Następnego dnia puściło... WSZĘDZIE... ponad 200m korytarzy i mnóstwo problemów do 
sprawdzenia. Relacja wkrótce. W projekcie uczestniczą: magazyn Odkrywca, GralMarine - Bartłomiej Grynda, ProjektFilm oraz Grupa Nurków Jaskiniowych.',
                   '','',
                   '12. Pażdziernik 2009','Mirek Kopertowski');
EndList();

NewSection('WRZESIEŃ 2009','section');

StartList();
  ExtendedListItem('Po ciemnej stronie Gort',
                   'Progres osiągnięty tego lata przez zespół Jim Warny - Artur Kozłowski w jaskini Poulnacapple w Kiltartan, hrabstwo Galway, jest z pewnością jednym z najważniejszych wydarzeń w irlandzkim nurkowaniu jaskiniowym w 2009 r. Ponad 1.5-kilometrowa penetracja i głębokość -71m osiągnięta na końcu poręczówki czyni Poulnacapple najdłuższą podwodną jaskinią Irlandii...',
                   $dots.'./article.php?id=2009PoCiemnejStronie&sec=swiat','WIĘCEJ',
                   '12. Wrzesień 2009','Artur Kozłowski');

  ExtendedListItem('Macedonia. Matka vrelo ma -190m',
                   '10 sierpnia 2009 Luigi Casati zanurkował w Matka vrelo na głębokość -190m i 574m od otworu! Nurkowanie
                    odbyło się na oddycharce COPIS Megalodon (mCCR) i trwało 173min. Wiecej informacji',
                   'http://www.prometeoricerche.eu/GIGI/Report/macedonia_2009_ENG.htm','TUTAJ',
                   '2. Wrzesień 2009','Mirek Kopertowski');
EndList();

NewSection('SIERPIEŃ 2009','section');

StartList();
  ExtendedListItem('Riders on the storm - Ujeżdżając burzę',
                   'Pamiętam moje pierwsze nurkowanie na Nizinie Gort: jest koniec lutego 2008 r. i dojeżdżając do wsi Kiltartan w hrabstwie Galway nie mamy żadnych problemów ze zlokalizowaniem naszego punktu docelowego; z daleka widać wezbraną rzekę Coole i podążając w górę...',
                   $dots.'./article.php?id=2009UjezdzajacBurze&sec=swiat','WIĘCEJ',
                   '24. Sierpień 2009','Artur Kozłowski');
EndList();

NewSection('CZERWIEC 2009','section');

StartList();

  ExtendedListItem('Nurkowanie w forcie XIII w Błogosławiu',
                   'Lot zajechał do Warszawy. Kilkukrotnie miałem okazję gościć we Wrocławiu i mieć przyjemność odwiedzania urokliwych zakątków Dolnego Śląska i przyległosci. Lotek zawsze miał jakąś ciekawą miejscówkę do zaprezentowania...',
                   $dots.'./article.php?id=2009Fort13&sec=polska','WIĘCEJ',
                   '22. Czerwiec 2009','Maciek "Lama" Olinkiewicz');

  ExtendedListItem('Galeria: Warsztaty Nurkowania Jaskiniowego 2009',
                   'Scenki z życia warsztatowego 2009. Miłego oglądania:-)...',
                   './galeria/gallery.php?id=wnj2009','WIĘCEJ',
                   '22. Czerwiec 2009','Lucyna Cieślik');

EndList();

//-----------------------------------------------------
NewSection('MAJ 2009','section');

StartList();
  ExtendedListItem('XII Warsztaty Nurkowania Jaskiniowego 2009',
                   'W dniach 30 IV-3 V w kamieniołomach Zimnik i Kostrza odbyły się kolejne Warsztaty mające na celu wymianę doświadczeń związanych z nurkowaniem jaskiniowym...',
                   $dots.'./article.php?id=wnj2009&sec=warsztaty','WIĘCEJ',
                   '25. Maj 2009','Dominik "Hozno" Graczyk, Lucyna Cieślik');

  ExtendedListItem('Kopalnia w Nawojowie Śląskim - odsłona pierwsza',
                   'Szyb w Nawojowie został nam wskazany przez grupę „Odkrywców”. Informacje, które przekazał Łukasz Orlicki okazały się bardzo obiecujące...',
                   $dots.'./article.php?id=2009Nawojow1&sec=polska','WIĘCEJ',
                   '10. Maj 2009','Mirek Kopertowski');

EndList();

NewSection('KWIECIEŃ 2009','section');

StartList();
  ExtendedListItem('Jaskinie jez. Szkoderskiego',
                   'Zapraszamy do obejrzenia raportu z wypraw w 2007 i 2008 roku w rejon jez. Szkoderskiego, w Czarnogórze, których celem była eksploracja licznych w tym miejscu wywierzysk - podwodnych jaskiń. Raport opisuje ponad 35 zbadanych obiektów.',
                   $dots.'./swiat/skadar_2008_report.pdf','RAPORT',
                   '7. Kwiecień 2009','Andrzej Szerszeń');

EndList();

NewSection('STYCZEŃ 2009','section');

StartList();
  ExtendedListItem('Jaskinia Wodna pod Pisaną 2008',
                   'W dniach 26-27 XII 2008 zespół w składzie Dominik Graczyk (Honzo) i 
                    Darek Lermer (obaj SW) podjął próbę odnalezienia drugiego syfonu w jaskini 
                    Wodnej pod Pisaną. Relacje o możliwości jego istnienia pochodziły z 
                    działalności podejmowanej wcześniej..',
                   $dots.'./article.php?id=2008wpp&sec=polska','WIĘCEJ',
                   '14. Styczeń 2009','Dominik "Honzo" Graczyk');

  ExtendedListItem('Penetracja szybu w Braszowicach',
                   'Na poziomie 3 w kopalni w Braszowicach znajdują się 2 zalane szyby. Penetracja pierwszego
                    szybu zakończyła się już na głębokości -8 m, 
                    gdzie znajduje się kilka belek blokujących dalszą drogę. Są szanse na ich pokonanie.
                    Drugi szyb, ten gdzie lustro wody zaczyna się kilka metrów 
                    od spongu, po dokladniejszych oględzinach okazał sie komora wydobywcza, 
                    która najpewniej kończy się ślepo. Oczywiście trzeba to sprawdzić, nam 
                    zabrakło czasu.
                    [<a class="navi" href="http://picasaweb.google.com/pinkf3141592/XMineEXploAnnaDecydujCeStarcie#">ZDJĘCIA</a>]',
                   '','',
                   '12. Styczeń 2009','Łukasz Bieleń');

EndList();

NewSection('LISTOPAD 2008','section');

StartList();
  ExtendedListItem('Padis 2008',
                   'Jesienią 2008 w składzie Dominik Graczyk - Honzo, Mirek Kopertowski,
                    Oliwia Ryśnik i Andrzej Szerszeń kontynuowaliśmy działalność w Rumunii w
                    górach Bihor w rejonie Padis...',
                   $dots.'./article.php?id=2008Padis&sec=swiat','WIĘCEJ',
                   '13. Listopad 2008','Andrzej Szerszeń');


  ExtendedListItem('Savino Oko pogłębione',
                   'W dniach 26-30.10.2008 kol. Jarek Kur nurkował w jaskini Savino Oko w
                    Czarnogórze w górach Prokletie. Jaskinia wcześniej poznana była do
                    głębokości - 65 m, Jarek pogłębił ją do głębokości 90 m. Jaskinia
                    kontynuuje się dalej. Kierunek i nachylenie wyeksplorowanego korytarza
                    jest podobne jak we wcześniej poznanych partiach. Opis nurkowania:
                    [<a class="navi" href="http://scientificdiving.eu/files/Eksploracja%20Savino%20Oko.pdf">TUTAJ</a>]',
                   '','',
                   '13. Listopad 2008','');

  ExtendedListItem('Rekord Artura Kozłowskiego',
                   'W lipcu 2008 Artur Kozłowski, polski nurek mieszkający w Irlandii,
                    zanurkował na głębokość 103 m w jaskini Pollatoomary, w hrabstwie Mayo w
                    Irlandii. Obecnie jest to najgłębsza podwodna jaskinia wysp brytyjskich.
                    Wcześniej poznana była do - 33 m.
                    Relacja:
                    [<a class="navi" href="http://www.tecrec.com.pl/biblioteka/cz1.pdf">CZ. 1</a>]
                    [<a class="navi" href="http://www.tecrec.com.pl/biblioteka/cz2.pdf">CZ. 2</a>]',
                   '','',
                   '13. Listopad 2008','');
EndList();

//-----------------------------------------------------
NewSection('LIPIEC 2008','section');

StartList();

  ExtendedListItem('OKO - Czarnogóra, lipiec 2008',
                   'Jezioro Szkoderskie i położone nieopodal j. Malo Blato obfitują w znajdujące się w dnie wywierzyska, zwane lokalnie "Oko". Zbadaliśmy wstępnie ponad 30 takich wywierzysk. Zanurkowaliśmy w ponad 20 z nich, w tym w jaskiniach Volačka Jama (długość około 250 m, głębokość - 47 m) i  Baleškovica (kilkadziesiąt metrów długości) w zatoce Karuč. Brak jest informacji o wcześniejszych nurkowaniach w tych miejscach. Nurkowaliśmy również w gigantycznym wywierzysku Raduš do głebokości - 76 m.
<BR><BR>
Uczestnicy: Uroš Akšamović (Speleoloski odsek Beograda), Dominik Graczyk, Katarzyna Kędracka, Jacek Olinkiewicz, Paulina Olinkiewicz, Andrzej Szerszeń (Speleoklub Warszawski). Współpracujące instytucje:
Nacionalni Park Skadarsko Jezero, Polski Związek Alpinizmu.
<BR><BR>
Szersze informacje nt. rejonu i zbadanych obiektów zostaną przedstawione po opracowaniu dokumentacji, pod koniec sezonu.',
                   '','',
                   '28. Lipiec 2008','Andrzej Szerszeń');

  ExtendedListItem('Działalność GNJ',
                   'W kwartalniku Jaskinie (nr 50) ukazały sie artykuły o naszej
                    działalności w Abchazji i Czarnogórze',
                   '','',
                   '8. Lipiec 2008','Andrzej Szerszeń');

  ExtendedListItem('Nurkowania w MRU',
                   'Nurkowanie w MRU będącym jednym z większych i względnie łatwo
                    dostępnym obiektem w Polsce cieszy się popularnością. Relacja z akcji Jacka Trembowelskiego wraz zespołem:
                    [<a class="navi" href="http://www.trembowel.pl/index.php?option=com_content&task=view&id=24&Itemid=9">TUTAJ</a>]
                    Relacja z akcji Stowarzyszenia Posejdon:
                    [<a class="navi" href="http://posejdon.org.pl/aktualnosci.php?news_action=more&newsid=7">TUTAJ</a>]',
                   '','',
                   '8. Lipiec 2008','');

  ExtendedListItem('Nurkowanie w wywierzysku Jama',
                   'W dniach od 25 stycznia do 3 lutego 2008 odbyła się wyprawa AKG
                    Kraków wraz z serbskim klubem ASAK Beograd w masyw Maganik/Kanion
                    Mrtvicy. Jarosław Kur nurkował w wywierzysku Jama...',
                   'http://pza.org.pl/news.acs?id=144511','WIĘCEJ na stronie PZA',
                   '8. Lipiec 2008','');

  ExtendedListItem('Szkolenie z ratownictwa jaskiniowego',
                   'Na początku lipca dwóch nurków GNJ (Mirek Kopertowski SGW, Michał Plata KKS) uczestniczyło w szkoleniu z ratownictwa jaskiniowego
                    zorganizowanym przez Komisje Taternictwa Jaskiniowego PZA. Szkolenie dotyczyło technik linowych wykorzystywanych przy transporcie noszy.',
                   '','',
                   '19. Lipiec 2008','');

EndList();

//-----------------------------------------------------
NewSection('MARZEC 2008','section');

StartList();

  ExtendedListItem('Wielka Orkiestra Nawiedzonych Płetwonurków, czyli Warsztaty Opieki Nad Poszkodowanym',
                   'W życiu każdego szanującego się speleologa, a już szczególnie nurka jaskiniowego, przychodzi taki moment, że zaczyna się on zastanawiać nad kruchością życia...',
		   './article.php?id=2008WONP&sec=ratownictwo','WIĘCEJ',
		   '11. Maj 2008','Adam Więch');

  ExtendedListItem('Serbia 2008 (bałkańskie klimaty...)',
                   'Na początku roku "<i>Expeditions Diving Group</i>" zorganizowała kolejną wyprawę do  
                    Serbii i Czarnogóry. Nurkowano w wywierzyskach: Crne Vrelo, Krupanjsko Vrelo oraz Orahovackiej Ljucie. Eksplorowano jaskinie...',
                   'http://www.exdiving.com/index.php?option=com_content&task=view&id=57&Itemid=40','RELACJA na stronie exdiving',
                   '31. Marca 2008','Mirek Kopertowski');


  ExtendedListItem('Wyprawa GNJ do Czarnogóry',
                   'Zdjęcia z wyprawy do Czarnogóry...',
                   './galeria/gallery.php?id=2008Czarnogora','WIĘCEJ',
                   '27. Marca 2008','Andrzej Szerszeń');

  ExtendedListItem('Nurkowanie jaskiniowe na Kubie',
                   'Zdjęcia z nurkowań na Kubie...',
                   './galeria/gallery.php?id=2006Kuba','WIĘCEJ',
                   '27. Marca 2008','Andrzej Szerszeń');

  ExtendedListItem('Nurkowanie jaskiniowe w Meksyku',
                   'Zdjęcia z nurkowań jaskiniowych i wyprawy eksploracyjnej do suchych jaskiń w Meksyku...',
                   './galeria/gallery.php?id=2006Meksyk','WIĘCEJ',
                   '27. Marca 2008','Andrzej Szerszeń');

  ExtendedListItem('III Międzynarodowy Kongres Nurkowania Jaskiniowego',
                   'Zdjęcia z III Międzynarodowego Kongresu Nurkowania Jaskiniowego w St. Nazaire en Royans, Francja...',
                   './galeria/gallery.php?id=2007Kongres','WIĘCEJ',
                   '27. Marca 2008','Andrzej Szerszeń');

  ExtendedListItem('Kurs technicznego nurkowania jaskiniowego',
                   'Kurs technicznego nurkowania jaskiniowego, Francja, Lot...',
                   './galeria/gallery.php?id=2007KursTech','WIĘCEJ',
                   '27. Marca 2008','Andrzej Szerszeń');

  ExtendedListItem('Nurkowanie Jaskiniowe - Trening transportu nurkowego w noszach',
                   'Ratownictwo - Trening transportu nurkowego w noszach, Zakrzówek, Kraków...',
                   './galeria/gallery.php?id=2006Rnj','WIĘCEJ',
                   '27. Marca 2008','Andrzej Szerszeń');

  ExtendedListItem('Kurs fotografii podwodnej',
                   'W dniach 23–24 lutego 2008 roku, na krakowskim Zakrzówku, obył się kurs fotogragii podwodnej (PF1)...',
                   '../article.php?id=2008KursFoto&sec=artykuly','WIĘCEJ',
                   '13. Marca 2008','Maciek "Lama" Olinkiewicz');
  ExtendedListItem('Nawigacja w technicznym nurkowaniu jaskiniowym',
                   'Rozbudowane procedury nawigacyjne stanowią ważny element w <i>technicznym nurkowaniu jaskiniowym</i>. W systemie tym zakłada się, że...',
		   $dots.'/article.php?id=2008Nawigacja&sec=szkolenie','WIĘCEJ',
		   '9. Marzec 2008','Andrzej Szerszeń');

  ExtendedListItem('Nurkowanie w metrze - ćwiczenia GRW PZA i Straży Pożarnej',
                   'Wspólne ćwiczenia Grupy Ratownictwa Wysokościowego PZA i Państwowej Straży Pożarnej odbyły się  06.03.2008...',
		   $dots.'/article.php?id=2008Metro&sec=ratownictwo','WIĘCEJ',
		   '9. Marzec 2008','Andrzej Szerszeń');

  ExtendedListItem('Ratownictwo nurkowe w jaskiniach w TOPR',
                   'Przez dwa dni (24 i 25.01.2008) ratownicy - płetwonurkowie TOPR, trenowali w Morskim Oku....',
		   $dots.'/article.php?id=2008TOPR&sec=ratownictwo','WIĘCEJ',
		   '9. Marzec 2008','Andrzej Szerszeń');

EndList();

//-----------------------------------------------------
NewSection('STYCZEŃ 2008','section');

StartList();
  ExtendedListItem('Birnbachloch',
                   'Za namową Andrzeja Ciszewskiego postanowiłem zanurkować w wywierzysku Birnbachloch, położonym na południowym stoku Leoganger Steinberge w Austrii...',
		   $dots.'/article.php?id=2008Birnbachloch&sec=swiat','WIĘCEJ',
		   '21. Styczeń 2008','Andrzej Szerszeń');

  ExtendedListItem('Jak jest „jaskinia” po Serbsku?',
                   'W języku Serbskim istnieje bogate nazewnictwo zjawisk krasowych. Wynika to z faktu, że większość terenów zamieszkanych przez narody posługujące się tym językiem...',
		   $dots.'/rozne/publication.php?id=2008JaskiniaPoSerbsku','WIĘCEJ',
		   '17. Styczeń 2008','Andrzej Szerszeń');

  ExtendedListItem('Wyprawa GNJ do Czarnogóry',
                   'Wyprawa Grupy Nurków Jaskiniowych do Czarnogóry działająca w dniach 25.12.2007 - 07.01.2008 przyniosła rezultaty w postaci wyeksplorowania wywierzysk...',
		   $dots.'./article.php?id=2008Czarnogora&sec=swiat','WIĘCEJ',
		   '17. Styczeń 2008','Andrzej Szerszeń');

  ExtendedListItem('X Divers Team: Elefante Bianco i Grotta dei Fontanazzi',
                   'Dwa lata działalności zespołu X divers team w Regionie Veneto w północnej Italii zaowocowały nurkowaniami finałowymi, które odbyły się w dniach 27-28 stycznia 2007 roku',
		   $dots.'/swiat/publication.php?id=2008Wlochy','WIĘCEJ',
		   '17. Styczeń 2008','Michał Winek');


  ExtendedListItem('Grudniowy Wielki Błękit',
                   'W grudniowym numerze magazynu Wielki Błękit ukazał się artykuł Andrzeja
Szerszenia o technicznym i speleologicznym nurkowaniu jaskiniowym.',
		   '','',
		   '3. Styczeń 2008','Mirek Kopertowski');

EndList();

NewSection('LISOPAD 2007','section');

StartList();

  ExtendedListItem('Wyjazd na Bałkany',
                   'Podążając za...
Chcąc połączyć fascynację Bałkanami oraz chorobę zwaną nurkowaniem jaskiniowym udajemy się tym razem do Bośni i Czarnogóry...',
		   $dots.'/swiat/publication.php?id=2007Balkany','RELACJA',
		   '14. Listopad 2007','Jarek Kur');

  ExtendedListItem('KNJ - Kurs Nurkowania Jaskiniowego',
                   'W 2007 roku w miejsce tradycyjnych Warsztatów został zorganizowany Kurs Nurkowania Jaskiniowego prowadzący do uzyskania formalnych uprawnień nurka jaskiniowego',
		   $dots.'/warsztaty/kurs07.php','RELACJA',
		   '14. Listopad 2007','Andrzej Szerszeń');

  ExtendedListItem('Jean Jacques Bolanz zginął podczas nurkowania w Grecji',
                   'Poznaliśmy go w Albanii w ubiegłym roku. Eksplorował wywierzyska w "naszym" rejonie w Rumunii na poczatku lat 90-tych, jego przodek w Cotetsul Dobrechtilor wciąż jest nie ruszony.<BR><BR>
J. J. Bolanz miał 67 lat. Zginał 29 października podczas nurkowania w Mati tou Lili, greckiej jaskinii, którą pare dni wcześniej pogłębił do -140m.',
		   '','',
		   '5. Listopad 2007','Andrzej Szerszeń');

EndList();


NewSection('PAŹDZIERNIK 2007','section');

StartList();
  ExtendedListItem('Wywierzyska Włoch',
                   'W połowie sierpnia 2007 odbyła się kolejna wyprawa zespołu X divers team – tym razem we włoskie dolomity...',
		   $dots.'/article.php?id=2007Wlochy&sec=swiat','RELACJA Z WYJAZDU',
		   '9. Październik 2007','Michał Winek');

EndList();

NewSection('CZERWIEC 2007','section');

StartList();

  ExtendedListItem('Wywierzyska Slovenji',
                   'Zafascynowani klimatami Bałkańskimi (po wyjazdach na nurkowania jaskiniowe do Serbii), tym razem swoje trzecie okno zwróciliśmy na Słowenię...',
                   $dots.'/swiat/publication.php?id=2007Slowenia','RELACJA Z WYJAZDU',
	           '18. Czerwiec 2007','Jarosław Kur');

  ExtendedListItem('Kurs IANTD Cave Diver - Francja 2007',
                   'Na przełomie maja i czerwca 2007 Robert Klein zorganizował kurs nurkowania jaskiniowego IANTD Cave Diver...',
		   $dots.'/swiat/publication.php?id=2007KursIantd','RELACJA Z WYJAZDU',
		   '14. Czerwiec 2007','Maciek Czykierda');

  ExtendedListItem('Wielka Śnieżna - Jeziorko X. Najniżej położony problem nurkowy w Tatrach',
                   'Od wielu lat kusi grotołazów swą niedostępnością i zagadką, która kryje się za nim. Pojawiało się wiele hipotez o możliwości pogłębienia systemu jaskiniowego...',
		   $dots.'/polska/publication.php?id=2007JeziorkoX','WIĘCEJ',
		   '8. Czerwiec 2007','Michał Plata');

EndList();
//-----------------------------------------------------
NewSection('MAJ 2007','section');

StartList();
  ExtendedListItem('III Międzynarodowy Kongres Nurkowania Jaskiniowego',
                   'W dniach 18-19 maja, we Francji, odbył się III Międzynarodowy Kongres Nurkowania Jaskiniowego. To jedno z ważniejszych wydarzeń w roku w dziedzinie nurkowania jaskiniowego...',
                   $dots.'/artykuly/publication.php?id=IIIKongres','WIĘCEJ',
                   '27. Maj 2007','Mirek Kopertowski');

  ExtendedListItem('Wyprawa do Francji (Departament Lot)',
                   'Rozbudzone we włoskich wywierzyskach apetyty na nury w prawdziwych jaskiniach zaprowadziły nas podczas tegorocznej majówki do Francji...',
                   $dots.'/swiat/publication.php?id=07FrancjaMajX','RELACJA Z WYJAZDU',
                   '25. Maj','Michał \'Majki\' Winek, Ryszard Deneka');

  ExtendedListItem('X divers team - wyprawa do Francji 2007',
                   'Zdjęcia z nurkowań we francuskich wywierzyskach...',
                   $dots.'/galeria/gallery.php?id=07FrancjaX','GALERIA',
                   '17. Maj 2007','Michał \'Majki\' Winek');
EndList();

//-----------------------------------------------------
NewSection('KWIECIEŃ 2007','section');

StartList();

  ExtendedListItem('Zimowa działalność PNJ - podsumowanie',
                   'Podczas zimy 2006/2007 spelonurkowie działający przy Podkomisji Nurkowania 
                    Jaskiniowego zorganizowali 5 biwaków jaskiniowych spędzając na nich łącznie 
                    15 dni!...',
                   './polska/publication.php?id=2007PNJZima','WIĘCEJ',
                   '7. Kwiecień 2007','Mirek Kopertowski');
EndList();

//-----------------------------------------------------
NewSection('MARZEC 2007','section');
StartList();

  ExtendedListItem('Jaskinia Zimna',
                   '17. lutego 2007 roku odbyło się nurkowanie w syfonach jaskini Zimnej...',
                   './polska/publication.php?id=2007zimna','RELACJA Z WYJAZDU',
                   '25. Marzec 2007','Maciek \'Lama\' Olinkiewicz');

  ExtendedListItem('Wielka Śnieżna - nurkowanie na dnie',
                   'Jeziorko X to najgłębiej położony syfon w tatrach (-801m) i zarazem jeden z 
                    najtrudniej dostępnych.  
                    Sam nurek musi pokonać 2 syfony i 2 odcinki linowe pomiędzy syfonami, 
                    po pokonaniu, których znajduje się przed właściwym celem nurkowania - 
                    Jeziorkiem X. 
                    W miniony weekend (2- 4.03.2007) podczas 3 dniowego biwaku w jaskini udało nam 
                    się wykonać 3 nurkowania w tym miejscu.  
                    Głównym rezultatem tych nurkowań jest pokonanie zwężenia na dnie syfonu i 
                    przedłużenie go o kolejnych parę metrów.<BR><BR>
                    Wkrótce relacja.',
                   './galeria/gallery.php?id=07sniezna_x','GALERIA',
                   '11. Marzec 2007','Mirek Kopertowski');
                   
EndList();

//-----------------------------------------------------
NewSection('LUTY 2007','section');
StartList();

  ExtendedListItem('Wyprawa do Abhazji - Istocznik Mcziszta',
                   'Zdjęcia z wyprawy eksploracyjnej do wywierzyska Mcziszta w Abhazji (masyw Bzybski)...',
                   './galeria/gallery.php?id=Mcziszta07','GALERIA',
                   '20. Luty 2007','Mirek Kopertowski');
                   
EndList();

?>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);  
?>
