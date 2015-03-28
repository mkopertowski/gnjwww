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

	renderHead($bSubdir);
	renderMenu($bSubdir,4,false,'WARSZTATY');
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
	WARSZTATY NURKOWANIA JASKINIOWEGO
</h1>

<table>
	<tr>
		<td valign=top align=middle>
			&nbsp;<br>
			&nbsp;<br>
<script language="JavaScript1.2" src="../_img/random/script1.js"></script>
						
					</td>
				</tr>
</table>

<div align=center>
<font color=#d76a01>
<font size="4">
<b>Zapraszamy na Warsztaty Nurkowania Jaskiniowego</b><br><br>
<br><br>
</font>
</font>
</div>


<!--
<font color="red">
<font size="4">
<b>!! Uwaga !!</b><br><br>Aktualny termin to 17-20 czerwca 2010 r.<br><br> <b>!! Uwaga !! </b><br><br>
</font>
</font>


<b>Pierwotny termin:</b><br><br>10-11 kwietnia oraz 17-18 kwietnia 2010<br><br>

<b>Miejsce:</b><br><br>Dolny Śląsk - kamieniołomy Zimnik, Kostrza<br><br>

-->


<b>Informacje ogólne:</b>

<ul class="normal">
	<li class="normal">
Warsztaty są okazją do ogólnopolskiego spotkania nurków jaskiniowych, niezależnie od federacji i konfiguracji.
	</li>
	<li class="normal">
GNJ PZA organizuje Warsztaty raz do roku.
	</li>
	<li class="normal">
Podczas Warsztatów uczestnicy wymieniają się wiadomościami na temat nurkowania jaskiniowego.
	</li>
	<li class="normal">
Uczestnicy mają możliwość poznania i przetestowania nowych technik i sprzętu.
	</li>
	<li class="normal">
Omawiane są wyniki wypraw, a także planuje się nowe wyprawy eksploracyjne lub poznawcze do syfonów w Polsce, Europie i reszcie świata.
	</li>
</ul>

<b>Program/tematyka:</b>
<ul class="normal">
	<li class="normal">Sprzęt, konfiguracja speleologiczna,</li>
	<li class="normal">Konfiguracja boczna,</li>
	<li class="normal">Poruszanie się wzdłuż poręczówki, poręczowanie, deporęczowanie,</li>
	<li class="normal">Kartowanie,</li>
	<li class="normal">Zarządzanie gazami,</li>
	<li class="normal">Depozyty,</li>
	<li class="normal">Planowanie akcji jaskiniowej,</li>
	<li class="normal">Autoratownictwo-odnajdowanie poręczówki i wycinanie z poręczówki z zachowaniem jej ciągłości,</li>
	<li class="normal">Stres i niebezpieczeństwa jaskiń,</li>
	<li class="normal">Analiza wypadków i elementy ratownictwa,</li>
	<li class="normal">Speleogeneza,</li>
	<li class="normal">Rebreathery w jaskini.</li>
</ul>

<b>Zajęcia odbywają się w 3 blokach tematycznych: teoria, ćwiczenia powierzchniowe, nurkowanie.</b><br><br>

<b>Informacje dodatkowe:</b><br><br>

Wszystkie nurkowania mogą odbyć się jedynie w zgodzie z uprawnieniami posiadanymi przez uczestników. 
Lista niezbędnego sprzętu jest do pobrania <a class="navi" href="./doc/lista_sprzetu.pdf">tutaj</a>.
Warunkiem uczestnictwa w warsztatach jest posiadanie ubezpieczenia KL i NNW obejmującego nurkowanie.<br><br>

<!--<b>Zakwaterowanie:</b><br><br>
Ponieważ zamysłem warsztatów jest m.in. znalezienie i przygotowanie nowych uczestników wypraw eksploracyjnych GNJ (Grupy Nurków Jaskiniowych) w różnych zakątkach świata, śpimy w namiotach. Każdy z uczestników powinien być do tego odpowiednio przygotowany (namiot, śpiwór, karimata a także inny sprzęt biwakowy jak menażki, niezbędniki itp.). Tuż przy obozowisku znajduje się sklep spożywczy, w którym można się zaopatrzyć.<br><br>


<b>Dojazd:</b><br><br>
Z Wrocławia autostradą A4 w kierunku Legnicy. Po przejechaniu około 30 km zjazd z autostrady na Kostomłoty w kierunku Strzegomia trasą nr 5. W Strzegomiu należy kierować się na Jawor trasą nr 374. W Niedaszowie po przejechaniu 7 km ze Strzegomia należy skręcić w lewo koło stacji benzynowej na Zimnik. W Zimniku na pierwszym skrzyżowaniu „Y” należy skręcić w prawo. Po lewej stronie po przejechaniu około 200 m jest sklep, obok którego znajduje się wjazd na miejsce biwakowe. Link do mapy z trasą dojazdu z Wrocławia znajduje się [<a class="navi" href="http://maps.google.com/maps?daddr=Zimnik,+Polska&geocode=&dirflg=&saddr=Wroc%C582aw&f=d&sll=51.013809,16.258907&sspn=0.026027,0.076904&ie=UTF8&ll=51.080234,16.605835&spn=0.415843,1.230469&z=10">tutaj</a>].
Z Legnicy trasą nr 3 do Jawora (około 12 km). Z Jawora trasą nr 374 w kierunku Strzegomia.  W Niedaszowie  po przejechaniu 5 km z Jawora należy skręcić w prawo koło stacji benzynowej na Zimnik. W Zimniku na pierwszym skrzyżowaniu „Y” należy skręcić w prawo. Po lewej stronie po przejechaniu około 200 m jest sklep, obok którego znajduje się wjazd na miejsce biwakowe. Link do mapy z trasą dojazdu z Legnicy znajduje się [<a class="navi" href="http://maps.google.com/maps?f=d&source=s_d&saddr=Legnica&daddr=Zimnik&hl=pl&geocode=&mra=ls&sll=51.184508,16.213074&sspn=0.414905,1.230469&ie=UTF8&z=11">tutaj</a>]. 
<br><br>
-->

<b>Zapisy:</b><br><br>

Zgłoszenia należy wysyłać na adres mailowy: "wnj / at / gnj.org.pl" na 
<a class="navi" href="./doc/zgloszenie_wnj.doc">formularzu zgłoszeniowym</a>.<br><br>

O uczestnictwie w Warsztatach decyduje kolejność zgłoszeń.<br><br>

<b>Szczegoly i zapytania:</b>

<ul class="normal">
	<li class="normal">e-mail: wnj / at / gnj.org.pl</li>
</ul>

Uczestników warsztatów posiadających Kartę Taternika Jaskiniowego zapraszamy na nurkowania w Tatrach.<br><br><br><br>


<!--RELACJE----------------------------------------------------------------------------------->
<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>RELACJE</B>
		</td>
	</tr>
</table>
<br>
<ul class="normal">

<?php

$sql="SELECT * FROM $ARTICLE_TABLE_NAME WHERE status='ready' and section='warsztaty' ORDER BY date DESC";
$result=$mysqli->query($sql);

if($result) {
	
	while ($row = $result->fetch_assoc()) {
		ExtendedListItemMYSQL($mysqli,$row,'..');
	}

}

?>

<li class="normal">
		<b>XV Warsztaty Nurkowania Jaskiniowego 2012 - edycja jesienna</b>.<br>
       XV Warsztaty Nurkowania Jaskiniowego okiem Marcina Malinowskiego.<br>[<a class="navismall" href="../article.php?id=2012_4wnj&sec=warsztaty"> więcej ...</a>]<br>&nbsp;
	</li>

<li class="normal">
		<b>XV Warsztaty Nurkowania Jaskiniowego 2012 - edycja jesienna</b>.<br>
       Relacja z XV WNJ Norberta Szywały<br>[<a class="navismall" href="../article.php?id=2012_3wnj&sec=warsztaty"> więcej ...</a>]<br>&nbsp;
	</li>

<li class="normal">
		<b>XV Warsztaty Nurkowania Jaskiniowego 2012 - edycja druga</b>.<br>
       W maju 2012 odbyła się kolejna edycja XV Warsztatów Nurkowania Jaskiniowego<br>[<a class="navismall" href="../article.php?id=2012_2wnj&sec=warsztaty"> więcej ...</a>]<br>&nbsp;
	</li>

<li class="normal">
		<b>XV Warsztaty Nurkowania Jaskiniowego 2012</b>.<br>
       W kwietniu 2012 odbyły się XV Warsztaty Nurkowania Jaskiniowego<br>[<a class="navismall" href="../article.php?id=2012_1wnj&sec=warsztaty"> więcej ...</a>]<br>&nbsp;
	</li>

	<li class="normal">
		<b>XIV Warsztaty Nurkowania Jaskiniowego 2011-edycja jesienna</b>.<br>
       W dniach 11 XI – 13 XI odbyły się XIV Warsztaty Nurkowania Jaskiniowego - edycja jesienna<br>[<a class="navismall" href="../article.php?id=2011_2wnj&sec=warsztaty"> więcej ...</a>]<br>&nbsp;
	</li>
  <li class="normal">
		<b>XIV Warsztaty Nurkowania Jaskiniowego 2011</b>.<br>
       W dniach 30 IV – 3 V odbyły się XIV Warsztaty Nurkowania Jaskiniowego<br>[<a class="navismall" href="../article.php?id=2011wnj&sec=warsztaty"> więcej ...</a>]<br>&nbsp;
	</li>
  <li class="normal">
		<b>XIII Warsztaty Nurkowania Jaskiniowego 2010</b>.<br>
       W dniach 17-20 VI odbyły się XIII Warsztaty Nurkowania Jaskiniowego<br>[<a class="navismall" href="../article.php?id=2010wnj&sec=warsztaty"> więcej ...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>XII Warsztaty Nurkowania Jaskiniowego 2009</b>.<br>
       W dniach 30 IV-3 V w kamieniołomach Zimnik i Kostrza odbyły się kolejne Warsztaty mające na celu wymianę doświadczeń związanych z nurkowaniem jaskiniowym<br>[<a class="navismall" href="../article.php?id=wnj2009&sec=warsztaty"> więcej ...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>KURS '07 - relacja</b>.<br>
                W 2007 roku w miejsce tradycyjnych Warsztatów został zorganizowany Kurs Nurkowania Jaskiniowego<br>[<a class="navismall" href="./kurs07.php"> więcej ...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>WARSZTATY '06 - sprawozdanie</b>.<br>
              XI Warsztaty Nurkowań Jaskiniowych odbyły się według nowej, innej niż dotychczas formuły
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./opis06.php"> więcej ...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>WARSZTATY '05 - okiem Lycyny Cieślik</b>.<br>
                To prawda… to już dziesiąty raz!
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./opis05_luca.php"> więcej ...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>WARSZTATY '05 - sprawozdanie</b>.<br> Dziesiąte Warsztaty Nurkowań Jaskiniowych odbyły się tradycyjnie w długi weekend, który w tym roku wypadł w dniach 26-29 maja. Jak zwykle spotkaliśmy się na Dolnym Śląsku ...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./opis05.php"> więcej ...</a>]<br>&nbsp;
	</li>
</ul>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
