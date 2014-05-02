
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
<h3 align=right>Ostatnia aktualizacja: 3. Kwietnia 2014</h3>
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
<h4>6-8 czerwca 2014</h4>
      <ul>
      <li><b>Śląskie Manewry Ratownictwa Jaskiniowego</b><br>Uczestnictwo w pozorowanej, podwodnej akcji ratunkowej</li>
      </ul>	  
	  	  
<h4>lipiec 2014</h4>
      <ul>
      <li><b>Kosowo i Serbia</b><br>Dalsze eksploracje tamtejszych jaskiń</li>
      </ul>
	  
<h4>sierpień 2014</h4>
      <ul>
      <li><b>Macedonia i Albania</b><br>Pierwsze nurkowania w syfonach Slovackiej Jamy oraz turystyka nurkowo-jaskiniowa w południowej Albanii</li>
      </ul>
	  	  
<h4>październik 2014</h4>
      <ul>
      <li>Turystyka nurkowo-jaskiniowa i eksploracja jaskiń na Malcie</li>
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
