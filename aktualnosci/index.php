<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

@include('../_php/publication_supp.php');


	renderHead($bSubdir,'','');
	renderMenu($bSubdir,2,false);
	renderGallery(true,false);
	renderCentral(true);
?>
		
<!--============================= CONTENTS START ==========================================-->
<h1>
	AKTUALNOŚCI
</h1>

[ <a class="navi" href="./index2002.php">Rok 2002</a> ] 
[ <a class="navi" href="./index2003.php">Rok 2003</a> ] 
[ <a class="navi" href="./index2004.php">Rok 2004</a> ]
[ <a class="navi" href="./index2005.php">Rok 2005</a> ]
<br><br><br>

<?php

/*
//-----------------------------------------------------
NewSection('','section');

StartList();

  ListItem('<b></b>');
  ExtendedListItem('','','','','');
  ExtendedListItem($title,$tekst,$link,$data,$autor);
EndList();
*/
//-----------------------------------------------------
NewSection('LISTOPAD 2006','section');
StartList();
                   
  ExtendedListItem('Trening RNJ w kamieniołomie Zakrzówek',
                   'W celu odpowiedniego przygotowania zespołu nurków jaskiniowych do manewrów ratownictwa zaplanowanych na przełom września i października, przeprowadzono ćwiczenia w kamieniołomie Zakrzówek...',
                   '../ratownictwo/publication.php?id=2006zakrzowek2','RELACJA',
                   '25. Listopad','Lucyna Cieślik');

  ExtendedListItem('Trening RNJ w kamieniołomie Zakrzówek',
                   'W sobotę 21.10.2006 przeprowadzono kolejny trening zespołu nurków jaskiniowych w transportowaniu poszkodowanego w noszach. W ćwiczeniach wzięli udział nurkowie jaskiniowi...',
                   '../ratownictwo/publication.php?id=2006zakrzowek','RELACJA',
                   '7. Listopad','Lucyna Cieślik');

  ExtendedListItem('Nurkowanie w „Winnicy”',
                   'Wzgórze Winnica położone jest się w Krakowie. Znajduje się na nim fort 53a wybudowany w latach 1898-1899 jako pancerny fort obrony bliskiej...',
                   '../polska/publication.php?id=winnica','RELACJA',
                   '6. Listopad','Lucyna Cieślik');

EndList();


NewSection('PAŹDZIERNIK 2006','section');
StartList();

  ExtendedListItem('Albania',
                   'W dniach  5-15.07.2006 odbył sie wyjazd do Albanii. Mimo, że nie 
                    przyniósł wyników nurkowych, był niezwykle udany pod względem 
                    turystyczno-krajoznawczym. Szersza relacja w magazynie 
                    Jaskinie nr 44 (3/2006).<BR><BR>
                    Zdjęcia z wyjazdu można znaleźć na stronach:<BR>
                    <a class="navi" href="http://lama.waw.pl/gallery3/main.php">http://lama.waw.pl/gallery3/main.php (Bałkany, sierpien 2006)</a><BR>
                    <a class="navi" href="http://speleo.waw.pl">http://speleo.waw.pl (wkrótce)</a>',
                    '','',
                   '3. Październik','Andrzej Szerszeń');

EndList();

//-----------------------------------------------------
NewSection('WRZESIEŃ 2006','section');
StartList();

  ExtendedListItem('Krym po raz 2-gi czyli wyprawa 2006',
                   'Po doturlaniu się z Wrocławia na miejsce spotkania w stolicy - co nie było ani miłe ani szybkie - sprawnie przepakowaliśmy dobytek i zrobiliśmy szybkie zakupy niezbędnych w podróży artykułów spożywczych. Start w taką podróż nastroił wszystkich nader optymistycznie i nawet korki na wylocie z Warszawy nie psuły nam znakomitego nastroju...
                   <a class="navi" href="../swiat/panya.php">[JASKINIA PANYA]</a>',
                   '../swiat/publication.php?id=2006krym','RELACJA Z WYJAZDU',
                   '23. Wrzesień','Paweł "Loti" Mordkowicz');
EndList();

//-----------------------------------------------------
NewSection('LIPIEC 2006','section');
StartList();
  ExtendedListItem('Rumunia. Eksploracja wywierszyska Izbucul Galbenei',
                   'Kierując się ciekawością, dokąd prowadzi trzeci syfon w wywierzysku Izbucul Galbenei, udaliśmy się do Rumuni kontynuować jego eksplorację rozpoczętą w ubiegłym roku',
                   '../eksploracja/rumunia2006.php','RELACJA Z WYJAZDU',
                   '31. Lipiec','Andrzej Szerszeń');
EndList();
//-----------------------------------------------------
NewSection('CZERWIEC 2006','section');
StartList();
  ExtendedListItem('X divers team we Włoszech',
                   'W czasie tzw. długiego czerwcowego weekendu znów byliśmy w
                    słonecznej Italii. Cały czas planowaliśmy wyjazd do Rumunii ale warunki
                    pogodowe (deszcze) uniemożliwiały nurkowanie w jaskiniach. Tuż przed
                    wyjazdem padł pomysł aby pojechać na Bałkany ale tam prognozy również nie
                    były najlepsze. No i wylądowaliśmy przy otworach Elefante, Fontanazzi i
                    Oliero',
                   '../swiat/wlochy_czerwiec06.php','RELACJA Z WYJAZDU',
                   '03. Lipiec','Michał Winek');

  ExtendedListItem('Warsztaty Nurkowania Jaskiniowego - Etap 2 - SŁOWENIA',
                   'Nurkowaliśmy w wierzyskach: Suchadolca, Bilpa oraz Steberk. 
                   Uczestnicy: 
                   Rafał Górecki, Rafał Koryś, Mirek Kopertowski, 
                   Andrzej Szerszeń oraz Mirek Wróż.',
                   '../warsztaty/opis06.php','PODSUMOWANIE WARSZTATÓW',
                   '18. Czerwiec 2006',
                   'Mirek Kopertowski');

  ExtendedListItem('Warsztaty Nurkowania Jaskiniowego - Etap 1',
                   'Podczas pierwszego weekendu czerwca (3-4.06) odbył się
                   pierwszy etap Warsztatów Nurkowania Jaskiniowego. 
                   Uczestniczyli w nim: Łukasz Ogiński, Michał Plata,
                   Arkadiusz Nowak, Sebastian Dobrowolski, Krzysztof Dobrowolski,
                   Rafał Koryś, Paweł Mordkowicz, Mirek Kopertowski, Michał Stajszczyk,
                   Rafał Górecki, Lucyna Cieślik oraz Andrzej Szerszeń. 
                   Za dwa tygodnie kolejny etap - tym razem w Słoweni !!!',
                   '','',
                   '11. Czerwiec 2006',
                   'Mirek Kopertowski');
EndList();

//-----------------------------------------------------
NewSection('MAJ 2006','section');

StartList();

  ExtendedListItem('Krym - jaskinia Sołdacka',
                   'W dniach 28.04 - 12.05 odbyła się międzynarodowa wyprawa do
                    jaskini Sołdackiej (najgłebsza jaskinia Ukrainy, -515m). Oprócz
                    Rosjan, Ukraińców i Białorusinów uczestniczyli w niej grotołazi z
                    Sekcji Grotołazów Wrocław: Łukasz Drozd, Krzysztof Furgał, 
                    Mirek Kopertowski, Marek Markowski oraz 
                    Maciek Mieszkowski. Podczas wyprawy podjęta została eksploracja
                    syfonów na dnie (zaniesiono 18 butli 7 litrowych). 
                    W ciagu 3 dniowego biwaku w którym uczestniczyło 
                    3 nurków, odkryto 5 nowych syfonów.',
                   '','',
                   '11. Czerwiec 2006',
                   'Mirek Kopertowski');

EndList();

//-----------------------------------------------------
NewSection('KWIECIEŃ 2006','section');

StartList();

  ExtendedListItem('Włochy',
                   'W dniach 1-4.IV odbył się trenigowy wyjazd do północnych 
                   Włoch. Nurkowaliśmy w Elefante Bianco oraz Fontanazzi. 
                   W obu wywierzyskach występował wyraźny prąd. W Fontanazzi
                   ze względu na wąskie przekroje studni wejściowej mocno utrudnial
                   nurkowanie. Mimo tego udało nam się przepłynąć w tej jaskini
                   prawie 200m.                       
                   W wyjeździe uczestniczyli: Dominik Graczyk (Honzo),
                   Zuza oraz Mirek Kopertowski.',
                   '../rozne/ZdjeciaWlochy06.php','Zdjęcia z wyjazdu',
                   '16. Kwiecień','Mirek Kopertowski');
EndList();


//-----------------------------------------------------
NewSection('MARZEC 2006','section');

StartList();

  ExtendedListItem('Góry Izerskie',
                   '19. Marca odbył się rozpoznawczo-treningowy wyjazd w 
                    góry Izerskie. Odwiedziliśmy sztolnie w Przecznicy 
                    oraz zanurkowaliśmy w sztolni 
                    <a class="navi" href="../polska/dreibruder01.php">Drei Bruder</a>.
                    W wyjeździe uczestniczyli: Dominik Graczyk "Honzo", 
                    Mirek Kopertowski oraz Paweł Mordkowicz "Loti".',
                   '','','16. Kwiecień','Mirek Kopertowski');
                   
EndList();


?>

<!-- MIESIĄC: LUTY -->
<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>LUTY 2006</B>
		</td>
	</tr>
</table>
<br>
<ul class="normal">
	<li class="normal">
      <b>Trening basenowy</b><br>
      9. Lutego 2006. odbyły się basenowe ćwiczenia ratownictwa
      podczas których przećwiczono transport nurka w noszach. 
      W zajęciach uczestniczyli: Lucyna Cieślik (SKTJ, pozostali SGW), 
      Rafał Górecki, Mirek Kopertowski, Paweł Mordkowicz oraz Michał Stajszczyk oraz
      w roli poszkodowanego: Ola Potulska (NZ)...
      [<a class="navismall" href="../ratownictwo/basenLuty2006.php">wiecej...</a>]
      <br><br><div align="right"><i>zamieszczono: 12. Luty 2006</i></div>
              <div align="right"><i>autor: Lucyna Cieślik</i></div>
	</li>
	<li class="normal">
		<b>Tatry 4-5.02.2006</b><br> 
      Podczas weekendu odbył się krótki ale za to bardzo intensywny wyjazd 
      kondycyjno-towarzyski GNJ...           
      [<a class="navismall" href="../artykuly/TatryLuty2006.php">więcej...</a>]
      <br><br><div align="right"><i>zamieszczono: 12. Luty 2006</i></div>
              <div align="right"><i>autor: Lucyna Cieślik</i></div>      
      
	</li>
</ul>


<!-- MIESIĄC: STYCZEN -->
<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>STYCZEŃ 2006</B>
		</td>
	</tr>
</table>
<br>
<ul class="normal">
	<li class="normal">
	    Zapraszamy na <b>XI Warsztaty Nurkowania Jaskiniowego</b>! 
	    W 2006 roku w nowym kształcie, w dwóch etapach w Polsce i w Słowenii... 
       [<a class="navismall" href="../warsztaty/index.php">więcej ...</a>]
       <br><br><div align="right"><i>zamieszczono: 30. Styczeń 2006</i></div>
               <div align="right"><i>autor: Andrzej Szerszeń</i></div>
		 <br>&nbsp;
	</li>

</ul>

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
