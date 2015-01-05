
<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

@include('../_php/publication_supp.php');
include('../_php/misc.php');
include('../_php/mysql.php');

	renderHead($bSubdir,'','');
	renderMenu($bSubdir,12,false,'OGŁOSZENIA');
	renderGallery(true,false);
	renderUpdates($bSubdir,getLastUpdateMYSQL($mysqli));
	renderCentral(true);
	
?>
		
<!--============================= CONTENTS START ==========================================-->



<h1>
	OGŁOSZENIA
</h1>
<h3 align=right>Ostatnia aktualizacja: 7. Lipiec 2014</h3>
<h2>
 Plany Grupy Nurków Jaskiniowych PZA na rok 2015
</h2>
<!--<h2>Harmonogram imprez GNJ 2009/2010</h2>-->



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
	  	  
<h4>Styczeń/Luty</h4>
      <ul>
      <li>Kasprowa Niżnia - Kasia Turzańska, Paweł Poręba</li>
      <li>Hessenhauhohle - Mirek Kopertowski</li>
      <li>Bułgaria - Sebastian Dobrowolski</li>
      <li>Unifikacja GNJ - 21-22.02</li>
      </ul>

<h4>Kwiecień</h4>
      <ul>
      <li>Warsztaty Nurkowania Jaskiniowego - 11-12.04</li>
      </ul>

<h4>Lipiec</h4>
      <ul>
      <li>Albania - centralna wyprawa GNJ</li>
      </ul>
            
<h4>Jesień</h4>
      <ul>
      <li>Manewry Ratownictwa KTJ połączone z nurkowaniem</li>
      </ul>
      
           
</font>
<br>
<br>
Zapraszamy na wspólne akcje. Czekamy na Wasze inicjatywy!
<br>
<br>
<b>Podkomisja Nurkowania Jaskiniowego KTJ<b>

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
