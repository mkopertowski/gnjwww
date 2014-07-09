
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
 Plany Grupy Nurków Jaskiniowych PZA na rok 2014
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
	  	  
<h4>Lipiec/Sierpień</h4>
      <ul>
      <li>Kosowo - 12.07-3.08 - dalsze eksploracje tamtejszych jaskiń (Dominik Graczyk)</li>
      <li>Albania - 15.08-30.08 - dalsze eksploracje tamtejszych jaskiń (Darek Lermer)</li>
      </ul>
      
<h4>Wrzesień</h4>
      <ul>
      <li>Niemcy - Hessenhauhohle - proba pokonnia syfonu 7. (Mirek Kopertowski)</li>
      </ul>
      
<h4>Październik</h4>
      <ul>
      <li>Turystyka nurkowo-jaskiniowa i eksploracja jaskiń na Malcie (Dominik Graczyk)</li>
      </ul>
<h4>Listopad</h4>
      <ul>
      <li>23. Listopad - Speleokonfrontacje - spotkanie GNJ</li>
      </ul>

<h4>Zima 2014/2015</h4>
      <ul>
      <li>Tatry - j. Wielka Śnieżna - syfony Krakowskie (Maciek Czykierda)</li>
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
