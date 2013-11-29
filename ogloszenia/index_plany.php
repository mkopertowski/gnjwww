
<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

@include('../_php/publication_supp.php');

	renderHead($bSubdir,'','');
	renderMenu($bSubdir,12,false,'OGŁOSZENIA');
	renderGallery(true,false);
	renderUpdates($bSubdir);
	renderCentral(true);
	
?>
		
<!--============================= CONTENTS START ==========================================-->



<h1>
	OGŁOSZENIA
</h1>

<h2>
<font color="red"> Plany Grupy Nurków Jaskiniowych PZA na rok 2013
</h2>
<!--<h2>Harmonogram imprez GNJ 2009/2010</h2>-->

<h3 align=right>Ostatnia aktualizacja: 06. Stycznia 2013</h3>

<!--============================================================================-->

<?php



/*
//-----------------------------------------------------
NewSection('',"subsection");

StartList();

  ListItem('<b></b>');

EndList();
*/

//-----------------------------------------------------
?>

<h3>Kalendarz</h3>

<font color=white>	  
<h4>25 luty-14 kwiecień 2013</h4>
      <ul>
      <li><b>San Agustin</b><br>Wyprawa eksploracyjna. <a href="http://www.cdg-exped.org">Szczegóły tutaj</a> <br>
Głównym celem wyprawy jest nurkowanie w syfonie 9. Wyprawa organizowana przez brytyjskie CDG. <br> Kontakt: Mirek Kopertowski m.kopertowski / at / post.pl
      </li>
      </ul>

<h4>luty-kwiecień-maj 2013</h4>
      <ul>
      <li><b>Meksyk</b><br>Wyprawa do J2 pod kierownictwem Billa Stone'a. Głównym celem jest eksploracja za syfonem 4.
      </li>
      </ul>

<h4>majówka 2013</h4>
      <ul>
      <li><b>Bałkany</b><br>Wyjazd szkoleniowy</li>
      </ul>

<h4>30 maja - 2 czerwca </h4>
      <ul>
      <li><b>Warsztaty Nurkowania Jaskiniowego w Zimniku</b><br>Podczas tych WNJ zapoznamy uczestników nie tylko z technikami nurkowania jaskiniowego, ale także z technikami linowymi wykorzystywanymi podczas działań w suchych partiach jaskiń.</br></li>
      </ul>
	  
<h4>czerwiec 2013</h4>
      <ul>
      <li><b>Śląskie Manewry Ratownictwa Jaskiniowego</b><br>Uczestnictwo w pozorowanej, podwodnej akcji ratunkowej</li>
      </ul>	  
	  
<h4>czerwiec-lipiec 2013</h4>
      <ul>
      <li><b>Serbia</b><br></li>
      </ul>
	  
<h4>sierpień-wrzesień 2013</h4>
      <ul>
      <li><b>Macedonia i Kosowo</b><br>wyprawa eksploracyjna GNJ i SSS, pierwsze nurkowania w syfonach Slovackiej Jamy oraz dalsza eksploracja syfonów w głębi jaskiń Kosowa</li>
      </ul>

</font>
<br>
<br>
Zapraszamy na wspólne akcje. Czekamy na Wasze inicjatywy!
<br>
<br>
<b>GNJ<b>

<!-- Zapraszamy na wspólne akcje! Czekamy też na Wasze inicjatywy. -->
<br>
<br>


<p>&nbsp;</p>
<p>Aby dodać nowe ogłoszenie prosimy wysłać e-maila <a class="navi" href="mailto:relic/at/poczta.onet.pl">TUTAJ</a>
</p> 

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
