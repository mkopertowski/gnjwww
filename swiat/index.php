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
	renderMenu($bSubdir,6,false,'SWIAT');
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
	WYPRAWY ZAGRANICZNE
</h1>
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


$sql="SELECT * FROM $ARTICLE_TABLE_NAME WHERE status='ready' and section='świat' ORDER BY date DESC";
$result=$mysqli->query($sql);

if($result) {

	$rok = '';
	
	while ($row = $result->fetch_assoc()) { // list start?

		if($rok == '') {
			$rok = GetYearFromDate($row['date']);
			
			NewSection('ROK '.$rok,'section');
			StartList();
		} else if($rok != GetYearFromDate($row['date'])) { // new year?
			$rok = GetYearFromDate($row['date']);

			EndList ();
			NewSection('ROK '.$rok,'section');
			StartList();
		}
		
		ExtendedListItemMYSQL($mysqli,$row,'..');
		
	}

	EndList ();
}

NewSection('ROK 2012','section');

StartList();
ExtendedListItem('Komati Springs – Sodwana Bay – Monachium. Wyjazd nie tylko nurkowy',
                   'Relacja z wrześniowego wyjazdu do RPA',
                   '../article.php?id=2012rpa&sec=swiat','WIĘCEJ',
                   '2. Listopada 2012','D.Graczyk');


ExtendedListItem('Wyprawa do Kosowa',
                   'Relacja',
                   '../article.php?id=2012kosowo&sec=swiat','WIĘCEJ',
                   '12. Lipca 2012','D.Graczyk');



ExtendedListItem('Słoweńska czerwcówka',
                   'Relacja z wyjazdu do Słowenii',
                   '../article.php?id=2012slowenia2&sec=swiat','Więcej',
                   '10. Czerwca 2012','T.Zapiór, A.Budziarek');



ExtendedListItem('Wyprawa do Słowenii',
                   'Relacja',
                   '../article.php?id=2012slowenia&sec=swiat','WIĘCEJ',
                   '04. Maja 2012','Dominik Graczyk');

EndList();


NewSection('ROK 2011','section');

StartList();

ExtendedListItem('Wyprawa do Puerto Rico',
                   'Relacja',
                   '../article.php?id=2011puertorico&sec=swiat','WIĘCEJ',
                   '03. Grudnia 2011','Dominik Graczyk');

  ExtendedListItem('Wyprawa do Kosowa i Czarnogóry',
                   'Relacja',
                   '../article.php?id=2011kosowoczarnogora&sec=swiat','WIĘCEJ',
                   '03. Września 2011','Dominik Graczyk');
  
  ExtendedListItem('Wyprawa GNJ do Serbii i Macedonii',
                   'Relacja',
                   '../article.php?id=2011SerbiaMacedonia&sec=swiat','WIĘCEJ',
                   '03. Maja 2011','Sebastian Dobrowolski');
  
  EndList();

//-----------------------------------------------------

NewSection('ROK 2010','section');

StartList();
  
  ExtendedListItem('Wyprawa GNJ do Albanii i Grecji',
                   'Relacja',
                   '../article.php?id=2010albania&sec=swiat','WIĘCEJ',
                   '25. Czerwiec 2010','Dominik Honzo Graczyk');
  
  ExtendedListItem('Marble Arch i Prods Pot-Cascades',
                   'Pierwsza cześć raportu z grudniowego połączenia dwóch jaskiń w Irlandii Północnej',
                   './2010Marble/pdf/Marble.pdf','RAPORT',
                   '16. Marzec 2010','Artur Kozłowski');
EndList();

//----------------------------------------------------------------------------------------------------------------------

NewSection('ROK 2009','section');

StartList();
  ExtendedListItem('Rumunia i Serbia 2009',
                   'Wyprawa speleonurkowa do Rumunii i Serbii',
                   '../article.php?id=2009Rumunia_Serbia&sec=swiat','WIĘCEJ',
                   '29. Października 2009','Dominik "Honzo" Graczyk');
  
  ExtendedListItem('Po ciemnej stronie Gort',
                   'Progres osiągnięty tego lata przez zespół Jim Warny - Artur Kozłowski w jaskini Poulnacapple w Kiltartan, hrabstwo Galway, jest z pewnością jednym z najważniejszych wydarzeń w irlandzkim nurkowaniu jaskiniowym w 2009 r. Ponad 1.5-kilometrowa penetracja i głębokość -71m osiągnięta na końcu poręczówki czyni Poulnacapple najdłuższą podwodną jaskinią Irlandii...',
                   '../article.php?id=2009PoCiemnejStronie&sec=swiat','WIĘCEJ',
                   '12. Wrzesień 2009','Artur Kozłowski');

  ExtendedListItem('Riders on the storm - Ujeżdżając burzę',
                   'Pamiętam moje pierwsze nurkowanie na Nizinie Gort: jest koniec lutego 2008 r. i dojeżdżając do wsi Kiltartan w hrabstwie Galway nie mamy żadnych problemów ze zlokalizowaniem naszego punktu docelowego; z daleka widać wezbraną rzekę Coole i podążając w górę...',
                   '../article.php?id=2009UjezdzajacBurze&sec=swiat','WIĘCEJ',
                   '24. Sierpień 2009','Artur Kozłowski');

  ExtendedListItem('Jaskinie jez. Szkoderskiego',
                   'Zapraszamy do obejrzenia raportu z wypraw w 2007 i 2008 roku w rejon jez. Szkoderskiego, w Czarnogórze, których celem była eksploracja licznych w tym miejscu wywierzysk - podwodnych jaskiń. Raport opisuje ponad 35 zbadanych obiektów.',
                   './skadar_2008_report.pdf','RAPORT',
                   '7. Kwiecień 2009','Andrzej Szerszeń');

EndList();

//------------------------------------------------------------------------------------------------------

NewSection('ROK 2008','section');

StartList();
  ExtendedListItem('Birnbachloch',
                   'Za namową Andrzeja Ciszewskiego postanowiłem zanurkować w wywierzysku Birnbachloch, położonym na południowym stoku Leoganger Steinberge w Austrii...',
		   '../article.php?id=2008Birnbachloch&sec=swiat','WIĘCEJ',
		   '21. Styczeń 2008','Andrzej Szerszeń');

  ExtendedListItem('Wyprawa GNJ do Czarnogóry',
                   'Wyprawa Grupy Nurków Jaskiniowych do Czarnogóry działająca w dniach 25.12.2007 - 07.01.2008 przyniosła rezultaty w postaci wyeksplorowania wywierzysk...',
		   '../article.php?id=2008Czarnogora&sec=swiat','WIĘCEJ',
		   '17. Styczeń 2008','Andrzej Szerszeń');

  ExtendedListItem('X Divers Team: Elefante Bianco i Grotta dei Fontanazzi',
                   'Dwa lata działalności zespołu X divers team w Regionie Veneto w północnej Italii zaowocowały nurkowaniami finałowymi, które odbyły się w dniach 27-28 stycznia 2007 roku',
		   '../swiat/publication.php?id=2008Wlochy','WIĘCEJ',
		   '17. Styczeń 2008','Michał Winek');

EndList();

//----------------------------------------------------------------------------------------------------------------

NewSection('ROK 2007','section');

StartList();

  ExtendedListItem('Wyjazd na Bałkany',
                   'Podążając za...
Chcąc połączyć fascynację Bałkanami oraz chorobę zwaną nurkowaniem jaskiniowym udajemy się tym razem do Bośni i Czarnogóry...',
		   '../swiat/publication.php?id=2007Balkany','RELACJA',
		   '14. Listopad 2007','Jarek Kur');

 ExtendedListItem('Wywierzyska Włoch',
                  'W połowie sierpnia 2007 odbyła się kolejna wyprawa zespołu X divers team – tym razem we włoskie dolomity...',
		  '../article.php?id=2007Wlochy&sec=swiat','RELACJA Z WYJAZDU',
		  '9. Październik 2007','Michał Winek');

 ExtendedListItem('Wywierzyska Slovenji',
                  'Zafascynowani klimatami Bałkańskimi (po wyjazdach na nurkowania jaskiniowe do Serbii), tym razem swoje trzecie okno zwróciliśmy na Słowenię...',
		  '../swiat/publication.php?id=2007Slowenia','RELACJA Z WYJAZDU',
		  '18. Czerwiec 2007','Jarosław Kur');

  ExtendedListItem('Kurs IANTD Cave Diver - Francja 2007',
                   'Na przełomie maja i czerwca 2007 Robert Klein zorganizował kurs nurkowania jaskiniowego IANTD Cave Diver...',
		   '../swiat/publication.php?id=2007KursIantd','RELACJA Z WYJAZDU',
		   '14. Czerwiec 2007','Maciek Czykierda');

  ExtendedListItem('Wyprawa do Francji (Departament Lot)',
                   'Rozbudzone we włoskich wywierzyskach apetyty na nury w prawdziwych jaskiniach zaprowadziły nas podczas tegorocznej majówki do Francji...',
                   '../swiat/publication.php?id=07FrancjaMajX','RELACJA Z WYJAZDU',
                   '25. Maj 2007','Michał \'Majki\' Winek, Ryszard Deneka');
                   
EndList();

//-----------------------------------------------------
NewSection('ROK 2006','section');

StartList();
  ExtendedListItem('X divers team w Miltitz',
                   'Kilka miesięcy temu znalazłem w necie film z nurkowania w zalanej kopalni w Miltitz, no i oczywiście zaczęliśmy się z Michałem zastanawiać co zrobić aby tam zanurkować...',
                   '../swiat/publication.php?id=2006miltitz','RELACJA Z WYJAZDU',
                   '4. Styczeń 2006','Michał Winek');
  ExtendedListItem('Krym po raz 2-gi czyli wyprawa 2006',
                   'Gdy ubiegłoroczna wyprawa na Krym dobiegła końca, wiadome było, że powrót tam jest tylko kwestią czasu...',
                   '../swiat/publication.php?id=2006krym','RELACJA Z WYJAZDU',
                   '23. Wrzesień','Paweł "Loti" Mordkowicz');
  ExtendedListItem('Rumunia. Eksploracja wywierszyska Izbucul Galbenei',
                   'Kierując się ciekawością, dokąd prowadzi trzeci syfon w       wywierzysku Izbucul Galbenei, udaliśmy się do Rumuni kontynuować jego eksplorację rozpoczętą w ubiegłym roku',
                   '../eksploracja/rumunia2006.php','RELACJA Z WYJAZDU',
                   '31. Lipiec','Andrzej Szerszeń');
  ExtendedListItem('X divers team we Włoszech',
                   'W czasie tzw. długiego czerwcowego weekendu znów byliśmy w
                    słonecznej Italii. Cały czas planowaliśmy wyjazd do Rumunii ale warunki
                    pogodowe (deszcze) uniemożliwiały nurkowanie w jaskiniach. Tuż przed
                    wyjazdem padł pomysł aby pojechać na Bałkany ale tam prognozy również nie
                    były najlepsze. No i wylądowaliśmy przy otworach Elefante, Fontanazzi i
                    Oliero',
                   '../swiat/wlochy_czerwiec06.php','RELACJA Z WYJAZDU',
                   '03. Lipiec','Michał Winek');

EndList();

?>

<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>ROK 2005</B> 
		</td>
	</tr>
</table>
<ul class="normal">
<?php
  ExtendedListItem('Rumunia. Eksploracja wywierszyska Izbucul Galbenei',
                   'Czy to już ostatni wyjazd w to miejsce? NIE',
                   '../eksploracja/rumunia2005.php','RELACJA Z WYJAZDU',
                   '31. Lipiec','Andrzej Szerszeń');

?><br>
	<li class="normal">
		<b>Włochy</b> Jacek Pożeg, Maciek Czykierda, Paweł Poręba, Przemek Stasiak i Rafał Górecki w dniach 3 - 6 lutego nurkowali w <b>Elephante Bianco</b> i w <b>Grotta dei Fontanazzi</b>. W tej drugiej jaskini Polacy nurkowali po raz pierwszy...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./wlochy.02.2005.przemek.stasiak.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Włochy - Elephante Bianco</b> ...Osiemnastego stycznia wyruszyliśmy do Włoch w trzyosobowym składzie, ponieważ dołączył do nas jeszcze Marek Giergiczny(SW). Podróż przebiegła bez problemu, trafiliśmy na miejsce w stylu "on sight". Na miejscu poznaliśmy w knajpie przesympatyczną kelnerkę z Polski i ruszyliśmy obejrzeć wywierzysko, które się okazało leżec w srodku miasteczka Valstagna.
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./elephante_bianco.01.2005.adam.leslie.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Rumunia - Tauz</b>. W dniach 12 - 16 stycznia sześcioosobowa grupa nurków kierowana przez Włodka Szymanowskiego nurkowała w <b>Izbucul de la Tauz</b>. Włodek na oddycharce przesunął przodek na odległość 424 metrów od otworu, nie zdołał jednak przenurkować drugiego syfonu - wynurzył się po drugiej stronie na głębokość 30 metrów. Eksploracja będzie jeszcze kontynuowana.
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="http://dnh.e-wro.net/php/content.php?content.117" target="_new">więcej...</a>]<br>&nbsp;
	</li>
</ul>



<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>ROK 2004</B> 
		</td>
	</tr>
</table>
<br>
<ul class="normal">
<li class="normal">
	<b>Włochy</b>. W dniach 16 - 19 grudnia w sześcioosobowym zesople odbył się wyjazd do <b>Elefante Bianco</b>. Wykonano dużo głębokich nurkowań...
	&nbsp;&nbsp;&nbsp;[<a class="navismall" href="http://dnh.e-wro.net/php/content.php?content.111" target="_new">więcej...</a>]<br>&nbsp;
</li>
<li class="normal">
	<b>Szwajcaria</b>. Włodek Szymanowski zlokalizował kilka wywierzysk w Szwajcarii. W <b>Source de la Chaudanne</b> (najgłębsze szwajcarskie wywierzysko) udało mu się zanurkować. Wywierzyska są albo kilkadziesiąt metrów nad ziemią i dotarcie do nich jest skomplikowane logistycznie, albo nurkowanie jest zakazane. Tylko niewiele pozwala na bezproblemową akcję nurkową...
	&nbsp;&nbsp;&nbsp;[<a class="navismall" href="http://dnh.e-wro.net/php/content.php?content.110" target="_new">więcej...</a>]<br>&nbsp;
</li>
<li class="normal">
	<b>Austria, Hagengebirge</b>. Piotrek Kępkiewicz (SW) i Michał Gignal (SGW) brali udział w wyprawie Marka Wierzbowskiego w Hagengebigge. Nurkowali w krótkich i bardzo mocno zamulonych syfonach <b>Jaskini Kasztanowej</b>.
	&nbsp;&nbsp;&nbsp;[<a class="navismall" href="../swiat/hagengebirge2004.php">więcej...</a>]<br>&nbsp;
</li>
<li class="normal">
	<b>Rumunia</b>. Szybki wyjazd pod kierownictwem Włodka Szymanowskiego zaowocował kolejnymi metrami wyeksplorowanego drugiego syfonu w wywierzysku <b>Tauz</b>. Syfon zaczyna się przeginać. Obecnie przodek znajduje się już za przegieciem syfonu na głębokości 69 metrów, 300 m od otworu.
	&nbsp;&nbsp;&nbsp;[<a class="navismall" href="http://dnh.e-wro.net/php/content.php?content.87" target="_new">więcej...</a>]<br>&nbsp;
</li>
<li class="normal">
	<b>Rumunia / Dalmacja</b>. ...Miała to być tradycyjna wyprawa do Rumunii. Jednak po przyjeździe na miejsce okazało się że pada już od dwóch tygodni i brązowy kolor wody w rzekach uświadomił nam że nici z nurkowania w Rumunii przynajmniej przez kilka najbliższych tygodni... Wyprawa przeniosła się do Bośni i Chorwacji, gdzie uczestnicy zwiedzili i nurkowani w kilku nowych wywierzyskach, wcześniej nie odwiedzanych przez polskich nurków jaskiniowych.
	&nbsp;&nbsp;&nbsp;[<a class="navismall" href="http://dnh.e-wro.net/php/content.php?content.86" target="_new">więcej...</a>]<br>&nbsp;
</li>
<li class="normal">
	<b>Rafał Górecki</b>, <b>Paweł Mordkowicz</b>, <b>Michał Stajszczyk</b> i <b>Włodek Szymanowski</b> wyjechali w piątek 9 lipca do Włoch. Nurkowali w <b>Elefante Bianco</b> i w <b>Sorgente della Pollaccia</b>. Niestety nie udało się im zanurkować w <b>Sorgente Tuffera</b> (brak danych o dokładnej lokalizacji), ale Michał i Paweł zanurkowali w drodze powrotnej w <b>Silser See</b> w Austrii. 
	&nbsp;&nbsp;&nbsp;[<a class="navismall" href="http://dnh.e-wro.net/html/elefante/elefante.html" target="_new"> więcej ...</a>]<br>&nbsp;
</li>
<li class="normal">
	W wywierzyskach Chorwacji i Czarnogóry przebywał w długi weekend majowy <b>Paweł Woźniak</b>. Nurkował w chorwackich wywierzyskach: <b>Majerovo Vrelo</b> i <b>Cetina</b>. W Czarnogórze nurkował w wywierzysku <b>Orahovacka Ljuta</b>.
	&nbsp;&nbsp;&nbsp;[<a class="navismall" href="http://dnh.e-wro.net/html/orehovacka/oreh.html" target="_new"> więcej ...</a>]<br>&nbsp;
</li>
<li class="normal">
	Kolejna eskapada Andrzeja Szerszenia i Włodka Szymanowskiego do włoskich wywierzysk. Od 10.04 do 17.04 br odwiedzili ze sprzętem nurkowym <b>Elefante Bianco</b>, <b>Pozo del Merro</b> i <b>Sorgente della Pollaccia</b>. Wracając przez Słowenię zahaczyli o kilka innych wywierzysk, lecz ze względu na niepsrzyjające warunki (duże ilości wody lub strażnicy :) ) zrezygnowali z nurkowań...
	&nbsp;&nbsp;&nbsp;[<a class="navismall" href="http://dnh.e-wro.net/html/merro/merro.html" target="_new"> więcej ...</a>]<br>&nbsp;
</li>
<li class="normal">
	<b>Węgry - Słowacja</b> W dniach 26 - 27 stycznia 2004 odbyły się kolejne nurkowania jaskiniowe, w których wzięła udział Stajnia Kleina (Robert Klein, Jacek Trembowelski). Tym razem nurkowaliśmy w towarzystwie ...
	&nbsp;&nbsp;&nbsp;[<a class="navismall" href="../swiat/wegry_stajnia.php"> więcej ...</a>]<br>&nbsp;
</li>
<li class="normal">
	<b>Austria</b> W dniu 01 stycznia 2004 Krzysztof Recielski nurkował w jaskini Lamprechtsofen ...
	&nbsp;&nbsp;&nbsp;[<a class="navismall" href="../swiat/lampo_recielski.php"> więcej ...</a>]<br>&nbsp;
</li>
<li class="normal">
	<b>Włochy</b> Wyjazd do właskich wywierzysk rozpoczął się 26.12.2004 od wypożyczenia przyczepy we Wrocławiu. Wzięli w nim udział Włodzimierz Szymanowski (Spryciula), Andrzej Szerszeń (Pszczółek), Bela Marut, Marcin Bielecki i Joanna Biegacz...
	&nbsp;&nbsp;&nbsp;[<a class="navismall" href="../swiat/wlochy_spryciula.php"> więcej ...</a>]<br>&nbsp;
</li>
</ul>

<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>ROK 2003</B> 
		</td>
	</tr>
</table>
<br>

<ul class="normal">
<li class="normal">
	<b>Słowenia</b> Wyjazd odbył się w składzie: Andrzej Czubalski, Iza i Darek Lermer oraz Arek Nowak. Nasze plany to dwa wywierzyska oraz rozpoznanie terenu ...
	&nbsp;&nbsp;&nbsp;<br>[<a class="navismall" href="./slowenia_lermer.php"> więcej ...</a>]<br>&nbsp;
</li>
<li class="normal">
	<b>Jukatan</b> W październiku 2003 Krzysiek Recielski i Sławek Makaruk nurkowali w kilku jukatańskich Cenotes. 
	&nbsp;&nbsp;&nbsp;<br>[<a class="navismall" href="../swiat/jukatan2003.php"> więcej ...</a>]<br>&nbsp;
</li>
<li class="normal">
	<b>Słowacja </b> Sławek Paćko i Robert Klein nurkowali w kopalni opali na Słowacji. 
	&nbsp;&nbsp;&nbsp;<br>[<a class="navismall" href="../swiat/slowacja_sztolnia.php">Informacje o kopalni oraz zdjęcia...</a>]<br>&nbsp; 
</li>
<li class="normal">
	<b>Rumunia, sierpień 2003 </b> Bihor 2003 W terminie 01-16.08.2003 odbyła się wyprawa eksploracyjna do syfonów w górach Bihor (Rumunia). Wzięli w niej udział nurkowie: Wiktor Bolek - kierownik, Lucyna Cieślik, Michał Gignal, Mirosław Kopertowski, Jarosław Niekludow (Garbek), Arnold Paliński, Andrzej Szerszeń oraz nienurkowie: Krzysztof Jabłoński, Katarzyna Jabłońska, Magdalena Bugajska, Ewelina Fila. W <b> Jaskini Galbenei </b> odkryto 3 syfony przy łącznej długości nowych korytarzy ponad 300m. W wywierzysku <b>Tauz</b> prowadzono eksplorację na głębokości -85m w II Syfonie. Przepłynięto kilkadziesiąt metrów osiągając prawdopodobnie przegięcie syfonu.
	&nbsp;&nbsp;[<a class="navismall" href="../swiat/Tauz2003WB.php">Tauz część 1 </a>]
	&nbsp;&nbsp;&nbsp;[<a class="navismall" href="../swiat/Tauz2003MG.php">Tauz część 2 </a>]<br>&nbsp;
</li>
<li class="normal">
	<b>Chorwacja, lipiec 2003 B</b> W dniach 25-27 lipca Włodzimierz Szymanowski wraz z Michałem Stajszczykiem zorganizowali kolejny wyjazd do wywierzysk Chorwacji. W <b>Izvir Cetina</b> Włodek osiągnął głebokość <b>-102m</b> nurkując na rebreatherze a Michał -86m. Kolejnego dnia zanurkowali w <b>Izvir Vukovic</b>. To wywierzysko ma 300m długości i 30m głębokości. Poźniej sprawdzili jeszcze drogę dojścia do wywierzyska <b>Rumin</b>.
	&nbsp;&nbsp;&nbsp;[<a class="navismall"  href="http://www.deepnhigh.nu.pl/article.php?83.255"> więcej ...</a>]<br>&nbsp; 
</li>
<li class="normal">
	<b>Chorwacja, lipiec 2003 A, </b> W dniach 11-13 lipca Włodzimierz Szymanowski, Michał Gignal oraz Jacek Dziura w wywierzyskach Chorwacji i Słowenii. W Chorwacji w Izvir Cetina osiągnięto głebokość -86m przy okazji znajdując nowe wywierzysko - Izvir Vukovic. W Słowenii zanurkowano w Divjim Jezerze do głębokości 63m. 
	&nbsp;&nbsp;&nbsp;[<a class="navismall"  href="http://www.deepnhigh.nu.pl/article.php?82.255" target="_new"> Artykuł Włodka Szymanowskiego ...</a>]<br>&nbsp;
</li>
	<li class="normal">
		<b>Chorwacja, Słowenia, czerwiec 2003 - Sinjac</b><br>
		W dniach 26 - 29 czerwca 2003 Włodek Szymanowski (Spryciula) zorganizował kolejny wyjazd do wywierzysk Chorwacji i Słowenii. W wyjeździe wzięli udział: Michał Gignal, Piotr Kępkiewicz, Mirosław Kopertowski, Arnold Paliński oraz wspomniany Spryciula jako kierownik. Przeprowadzono nurkowania w następujących wywierzyskach: Izvor Sinjac, Jama Suchodolca, Divje Jeziero.      [<a class="navismall"  href="../swiat/sinjac_kempek_06_2003.php">  Relacja Piotra Kępkiewicza ...</a>]&nbsp; &nbsp; 
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="http://www.deepnhigh.nu.pl/article.php?81.255" target="_new">więcej...</a>]<br>&nbsp;
	</ul>
<ul class="normal">
	<li class="normal">
		<b>Słowenia, maj 2003 - Divje Jezero - nocne nurkowanie w Słowenii</b><br>
		Wykorzystując kilka wolnych dni na przełomie kwietnia i maja potocznie znanych "długim weekendem" postanowiliśmy z Pszczółkiem (Andrzejem Szerszeniem) zanurkować w wywierzyskach Słowenii i Chorwacji. Wyposażeni w sprzęt biwakowy, małą sprężarkę, zestaw dwubutlowy i rebreather...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./balkany_05_2003.php">więcej...</a>]<br>&nbsp;
	</ul>
	<li class="normal">
		<b>Słowenia, kwiecień 2003 - Divje Jezero - nocne nurkowanie w Słowenii</b><br>
		...Wywierzysko jest imponujące, ma wymiary 60m na 40m i znaczną głębokość co najmniej 160m co stawia je w rzędzie najgłębszych na świecie. Odwadnia obszar ponad 125km kwadratowych, a wydajność dochodzi do 100m3 na sekundę. Jest położone ok. 2km na południe od miasta Idrija...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./slowenia_04_2003.php">więcej...</a>]<br>&nbsp;
	</li>
</ul>
<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>ROK 2002</B> 
		</td>
	</tr>
</table>
<br>
<ul class="normal">
	<li class="normal">
		<b>Rumunia, październik 2002 - wyprawa ratunkowa</b><br>
		W piątek, w dniu 04.10.2002, <b>Rafał Garski</b> nie wynurzył się po nurkowaniu w wywierzysku Tauz. Spowodowało to konieczność przeprowadzenia akcji poszukiwawczej a następnie ratunkowej, mającej na celu wydobycie zwłok...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./rumunia10_2002rescue.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Rumunia, październik 2002</b><br>
		We wrześniu 2002 odbyła się kolejna wyprawa nurkowa w rumuńskie góry Bihor. Głównym celem była eksploracja wywierzyska Izbucul de la Tauz. Przedsięwzięcie to podobnie jak poprzednie organizowane było przez Wiktora Bolka...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./rumunia10_2002.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Nurkowanie we Vrulji</b><br>
		Na majowe nurkowania w chorwackich jaskiniach zostałem zaproszony przez znanego "jaskiniowca" Wiktora Bolka, który w rozmowie telefonicznej powiedział mi, że jego znajomi Mirek Jarek oraz Michał Stajszczyk nurkowali w wywierzysku Vrulja...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./vruljaGD2002.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Vrulja - powtórka z mechaniki płynów</b><br>
		Korzystając z długiego weekendu majowego 2002 postanowiliśmy pojechać do Chorwacji. Z opowieści kolegów (Mirek Jarek, Michał Stajszczyk) wynikało, że na dnie zatoki Vrulja ma znajdować się głęboka jaskinia. Zanurkowali w tym miejscu na -100m w październiku 2001...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./vruljaWB2002.php">więcej...</a>]<br>&nbsp;
	</li>
</ul>
<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>ROK 2001</B> 
		</td>
	</tr>
</table>
<br>
<ul class="normal">
	<li class="normal">
		<b>Eksploracja w wywierzysku Tauz - pierwsze polskie nurkowanie rebreatherowe w jaskini</b><br>
		W zabitych dechami górach Transylwanii (Rumunia) są ukryte potężne wywierzyska, których głębia od wielu lat przyciąga płetwonurków. Pod koniec lat 80-tych czescy nurkowie wyeksplorowali wywierzysko Coteţul Doreştilor do -40m...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./rumunia2001lato.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Bihor - zima 2001</b><br>
		W lutym 2001 udało się w końcu zorganizować kolejną wyprawę do Rumunii w Góry Bihor. Wzięli w niej udział nurkowie Wiktor Bolek, Maciej Czykierda, Rafał Garski (Sopocki KTJ), Rafał Górecki, Norbert Ziober oraz grotołazi poruszający się po jaskiniach wypełnionych powietrzem...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./rumunia2001zima.php">więcej...</a>]<br>&nbsp;
	</li>
</ul>
<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>ROK 2000</B> 
		</td>
	</tr>
</table>
<br>
<ul class="normal">
	<li class="normal">
		<b>Eksploracja w Mokrej Dziurze - listopad 2000</b><br>
		W dniach 11-12 listopada 2000 odbyły się akcje nurkowe w jaskini Mokra Dziura w Tatrach Wysokich na Słowacji. Podczas poprzedniej akcji przepłynąłem w syfonie ok. 210m i stwierdziłem możliwość dalszej eksploracji. Wymagało to jednak rozwiązania kilku problemów...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./slowacja2000jesien.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Nurkowanie w Mokrej Dziurze wrzesień 2000</b><br>
		W dniach 23-24 września 2000 została zorganizowana akcja nurkowa w jaskini Mokra Dziura w Dolinie Jaworzyńskiej w Tatrach Wysokich. Wzięło w niej udział dwu nurków: Wiktor Bolek i Norbert Ziober (SG Wrocław)...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./slowacja2000lato.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Mokra Dziura</b><br>
		W marcu 2000 zorganizowaliśmy nurkowanie w Mokrej Dziurze na zaproszenie słowackich grotołazów pod kierownictwem Jano Tencera. Ta jaskinia jest położona w Dolinie Jaworzyńskiej w Tatrach Bielskich...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./slowacja2000zima.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Bihor - luty 2000</b><br>
		W lutym 2000 odbyła się wyprawa w masyw Bihor w Rumunii. Wzięło w niej udział czterech nurków z SG Wrocław: Wiktor Bolek, Rafał Górecki, Michał Stajszczyk i Norbert Ziober oraz trzech grotołazów z KKTJ: Stanisław Kotarba, Jerzy Kierod i Wojciech Sieprawski...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./rumunia2000zima.php">więcej...</a>]<br>&nbsp;
	</li>
</ul>
<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>ROK 1997</B> 
		</td>
	</tr>
</table>
<br>
<ul class="normal">
	<li class="normal">
		<b>Podwodne jaskinie w Cassis (1)</b><br>
		Nurkowanie jaskiniowe to dziwna dziedzina sportu. Wymaga opanowanych do perfekcji zarówno umiejętności pokonywania jaskiń jak i technik nurkowania. Uprawianie tej dyscypliny w Polsce kojarzy się z wyczerpującym transportem ciężkiego i drogocennego sprzętu przez wypełnione błotem i ciasne korytarze...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./francja97_1.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Podwodne jaskinie Cassis (2) <i>Port Miou</i></b><br>
		Już na samym początku stanęliśmy przed problemem zorganizowania najprostszego nawet nurkowania. Bus, którym przyjechaliśmy, musiał wrócić do kraju na kilka dni. Ponieważ nasz kemping znajdował się w górnej części Cassis, musielibyśmy wykonywać ciężkie transporty...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./francja97_2.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Podwodne jaskinie Cassis (3) <i>Le Bestouan</i></b><br>
		Nurkowania w Port Miou wykonywaliśmy jeszcze na powietrzu przywiezionym z kraju. Teraz musieliśmy uruchomić sprężarkę. Ze względu na hałas nie mogliśmy tego zrobić na kempingu. Najpierw przetoczyliśmy sprężarkę na placyk...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./francja97_3.php">więcej...</a>]<br>&nbsp;
	</li>
</ul>
<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>ROK 1995</B> 
		</td>
	</tr>
</table>
<br>
<ul class="normal">
	<li class="normal">
		<b>Do Francji po naukę</b><br>
		W ramach wymiany polsko-francuskiej trzy osoby z naszego kraju uczestniczyły w stażu nurkowania jaskiniowego w Espinieres - Orniac (Dordogne, Francja). W tym roku byli to Wiktor Bolek, Michał Stajszczyk (obaj SG KW Wrocław) oraz Krzysztof Starnawski (Speleoklub Warszawski)...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./francja95.php">więcej...</a>]<br>&nbsp;
	</li>
</ul>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
