
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
<font color="red"> Prezentacje związane z nurkowaniem i nurkowaniem jaskiniowym w budynku Archeologii Podwodnej UW</font>
</h2>


<h3 align=right>Ostatnia aktualizacja: 15. stycznia 2012</h3>

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

<h3>Ogłoszenie nr 1</h3>
  22 stycznia w godzinach 16:00 – 21:00 zapraszamy na spotkanie i jednocześnie dziękujemy za użyczenie sali przez Archeologię Podwodną z Warszawy.
  </br>
Miejsce spotkania:
Uniwersytet Warszawski, Budynek Archeologii, Pierwsze piętro sala 209, Na planie budynek nr. 17 (ten z podpisem Szkoła Główna)
http://www.icgz.uw.edu.pl/KATASTROFY/pics/MAPA_UW.jpeg

</br></br>
 
Archeologia Podwodna UW
Prezentacja nurkowania na Krymie
Prezentacja programu rocznych (zaocznych) studiów podyplomowych z Archeologii Podwodnej.

</br></br>
 
Dariusz „Miodzio”  Wilamowski
 „Planowanie rezerw gazów podczas samotnych nurkowań na głębokości 80-150 metrów”
 
</br></br>
 
Marcin „Chochor” Chochorowski
" Sidemount moda czy wygoda".

</br></br>
 
Maciek „Szczęściarz” Curzydło
Planowanie nurkowań wykonywanych w oparciu o komputery wielogazowe
Wraki wyspy VIS Chorwacja

</br></br>
 
Dominik „Honzo” Graczyk
„Jaskinie Kosowa”


<br>
<br>


<p>&nbsp;</p>
<p>Aby dodać nowe ogłoszenie prosimy wysłać e-maila <a class="navi" href="mailto:relic/at/poczta.onet.pl">TUTAJ</a>
</p> 

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
