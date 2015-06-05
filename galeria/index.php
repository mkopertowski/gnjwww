<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);
@include('../_php/publication_supp.php');
	renderHead($bSubdir);
	renderMenu($bSubdir,0,false,'GALERIA');
	renderGallery($bSubdir,false);
        renderPZA($bSubdir);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
	GALERIA ZDJĘĆ
</h1>
<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>ZDJĘCIA Z POLSKI</B> 
		</td>
	</tr>
</table>
<br>
<?php
  StartList();  
			    
  ExtendedListItem('Sztolnie Tarnogórskie',
                   'Nurkowanie w Tarnogórskich Sztolniach',
                   './gallery.php?id=2012SMRJ1','Więcej',
                   '24. Marca 2012','Anaconda');
  
  ExtendedListItem('Tatry',
                   'Nurkowanie w Dudnicy i Wodnej pod Pisaną ',
                   './gallery.php?id=2011tatry','Więcej',
                   '03 Września 2011','Dominik Graczyk');
  
  ExtendedListItem('Obiekt W',
                   'Podobno jeden obraz zastępuje tysiące słów. Więc nie będę wiele pisał, tylko pokaże kilka zdjęć z polskiej "jaskini". Mam nadzieję, że zdjęcia rozpalą waszą wyobraźnię. W planie mam/mamy sesje zdjęciowe w innych zalanych obiektach. Ze względów bezpieczeństwa nie podaję ani nazwy ani lokalizacji -- i tak wszyscy zainteresowani wiedzą o czym mowa. Zdjęcia powstały na jednym nurkowaniu w listopadzie 2009. Więcej zdjęć na stronie http://www.nurkomania.pl/nurkowanie_jaskiniowe_obiekt_w.htm ',
                   './gallery.php?id=2009ObiektW','Więcej',
                   '04 Grudnia 2009','Andrzej "Martin" Kasiński');
    	
  ExtendedListItem('Nurkowanie Jaskiniowe - Trening transportu nurkowego w noszach',
                   'Ratownictwo - Trening transportu nurkowego w noszach, Zakrzówek, Kraków...',
                   './gallery.php?id=2006Rnj','WIĘCEJ',
                   '27. Marca 2008','Andrzej Szerszeń');
?>
	<li class="normal">
		<b>Jaskinia Wielka Śnieżna, grudzień 2002 - luty 2003</b><br>
		Zdjęcia z kilku akcji eksploracyjnych za Syfonami Krakowskimi...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./syfony_krakowskie_01_2003.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Jaskinia Kasprowa Niżna, 2001</b><br>
		Pierwsze zdjęcia podwodne z Jaskini Kasprowej Niżnej. Zdjęcia zrobione przez Włodka Szymanowskiego, podczas akcji Andrzeja Szerszenia...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./kasprowa01.php">więcej...</a>]<br>&nbsp;
	</li>
</ul>
<!--world -->
<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>ZDJĘCIA ZE ŚWIATA</B> 
		</td>
	</tr>
</table>
<br>
<?php

StartList();
    				                                
  ExtendedListItem('Green Holes',
                   'Doolin to mała nadmorska wioska położona w północno-zachodniej części hrabstwa Clare, na krańcach Burren -  jednego z największych i najbardziej unikalnych krajobrazów wapiennych w Europie. Widok z nabrzeża zapiera oddech w piersi...',
                   './gallery.php?id=2009GreenHoles','WIĘCEJ',
                   '23. Październik 2009','Artur Kozłowski');                 
                   
  ExtendedListItem('Wyprawa GNJ do Czarnogóry',
                   'Zdjęcia z wyprawy do Czarnogóry...',
                   './gallery.php?id=2008Czarnogora','WIĘCEJ',
                   '27. Marca 2008','Andrzej Szerszeń');

  ExtendedListItem('Nurkowanie jaskiniowe na Kubie',
                   'Zdjęcia z nurkowań na Kubie...',
                   './gallery.php?id=2006Kuba','WIĘCEJ',
                   '27. Marca 2008','Andrzej Szerszeń');

  ExtendedListItem('Nurkowanie jaskiniowe w Meksyku',
                   'Zdjęcia z nurkowań jaskiniowych i wyprawy eksploracyjnej do suchych jaskiń w Meksyku...',
                   './gallery.php?id=2006Meksyk','WIĘCEJ',
                   '27. Marca 2008','Andrzej Szerszeń');

  ExtendedListItem('III Międzynarodowy Kongres Nurkowania Jaskiniowego',
                   'Zdjęcia z III Międzynarodowego Kongresu Nurkowania Jaskiniowego w St. Nazaire en Royans, Francja...',
                   './gallery.php?id=2007Kongres','WIĘCEJ',
                   '27. Marca 2008','Andrzej Szerszeń');

  ExtendedListItem('Kurs technicznego nurkowania jaskiniowego',
                   'Kurs technicznego nurkowania jaskiniowego, Francja, Lot...',
                   './gallery.php?id=2007KursTech','WIĘCEJ',
                   '27. Marca 2008','Andrzej Szerszeń');

?>
	<li class="normal">
		<b>Wyprawa do Abhazji - Istocznik Mcziszta, styczeń/luty 2007</b><br>
		Zdjęcia z wyprawy eksploracyjnej do wywierzyska Mcziszta w Abhazji (masyw Bzybski)...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./gallery.php?id=Mcziszta07">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Wyprawa na Krym, wrzesień 2006</b><br>
		Zdjęcia z wyprawy na Krym...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./gallery.php?id=2006krym">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Jakinia Panya, Aj-Petri, Krym, wrzesień 2006</b><br>
		Zdjęcia z akcji nurkowej w jaskinii...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./gallery.php?id=panya2006">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Francja, lato 2005</b><br>
		Zdjęcia ze stażu nurkowania jaskiniowego...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./francuskie2005.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Rumunia, lato 2003</b><br>
		Zdjęcia z kolejnej wyprawy do Rumunii...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./rumunia2003lato.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Słowenia i Chorwacja, maj 2003</b><br>
		Seria zdjęć z wyjazdu Andrzeja Szerszenia i Włodzimierza Szymanowskiego do Słowenii i Chorwacji...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./balkany_05_2003.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Rumunia, październik 2002</b><br>
		Seria zdjęć z wyprawy głównej i wyprawy ratowniczej po śmiertelnym wypadku Rafała Garskiego...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./rumunia10_2002.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Chorwacja, Vrulja, 2002</b><br>
		Zdjęcia z nurkowania Wiktora Bolka i Grzegorza "Banana" Dominika w chorwackim wywierzysku Vrulja...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./chorwacjavrulja2002.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Rumunia, lato 2001</b><br>
		Wiele zdjęć z wyjazdu do doliny Garda Seaca - pierwsze polskie nurkowanie rebreatherowe w jaskini...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./rumunia2001lato.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Rumunia, zima 2001</b><br>
		Pierwsze polskie nurkowania w Izbucul de la Tauz...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./rumunia2001zima.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Rumunia, zima 2000</b><br>
		Z powodu wielkiego śniegu nurkowaliśmy tylko w Cotecul Dobrestilor...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./rumunia2000zima.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Rumunia, lato 1999</b><br>
		Nurkowania w Górach Banackich...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./rumunia1999lato.php">więcej...</a>]<br>&nbsp;
	</li>
</ul>

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
