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

// include the pagination class
require './_php/Zebra_Pagination.php';


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

<!--
<font size="5">W dniach 30.04-03.05 odbyły się Warsztaty Nurkowania Jaskiniowego edycja 2011</font> <br>
<font size="3">Więcej informacji niebawem </font></i>
<br><br>
-->

<!--
<font size="4">Spotkanie Grupy Nurków Jaskiniowych PZA</font>
<br>

<div align=center><p class="hotinfo">
Najbliższe spotkanie GNJ odędzie się 22. listopada 2014 w Podlesicach (podczas Speleokonfrontacji). Zapraszamy członków GNJ oraz osoby zrzeszone w klubach jaskiniowych PZA. Osoby zainteresowane udziałem w spotkaniu prosimy o wcześniejszy kontakt: gnj/at/gnj.org.pl.
</p></div>
-->

<!--
<font size="4"><font color=#d76a01>Najbliższe Warsztaty Nurkowania Jaskiniowego odbędą się podczas wyjazdu turystyczno-eksploracyjnego na Bałkanach, termin majówkowy to jest 26 kwietnia - 4 maja 2014.</font></font> <br>
<font size="3"><font color=#d76a01>Więcej informacji w sekcji <a class="hotinfo" href="./warsztaty/index.php">Warsztaty.</a> Zapraszamy</font></font></i>
<br><br>
-->
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
  4th International Cave Diving Congress 2008, 31 May - 1 Jun 2008.
  <a class="hotinfo" href="http://www.congresips.com">INFORMACJE</a>
</p></div>

<div align=left><p class="hotinfo">
  IV th European Speleological Congress
  <a class="hotinfo" href="http://vercors2008.ffspeleo.fr/events/animations/pallets.htm">INFORMACJE</a>
</p></div>
-->

<br>
<br>

<?php

// how many records should be displayed on a page?
$records_per_page = $AKTUALNOSCI_LIMIT;

// instantiate the pagination object
$pagination = new Zebra_Pagination();


$sql="SELECT SQL_CALC_FOUND_ROWS * FROM $ARTICLE_TABLE_NAME WHERE status='ready' and date >= '2013-01-01' ORDER BY date DESC LIMIT " . (($pagination->get_page() - 1) * $records_per_page) . ', ' . $records_per_page;
$result=$mysqli->query($sql);

$sql= "SELECT FOUND_ROWS() AS `found_rows`";
$rows=$mysqli->query($sql);
$rows=$rows->fetch_assoc();

// pass the total number of records to the pagination class
$pagination->records($rows['found_rows']);

// records per page
$pagination->records_per_page($records_per_page);


if($result) {

	NewSection('AKTUALNOŚCI','section');
	StartList();
	
	while ($row = $result->fetch_assoc()) {
		ExtendedListItemMYSQL($mysqli,$row,'.');
	}

	// render the pagination links
	$pagination->render();
	
	EndList ();
}
?>

<script type="text/javascript" src="./_js/zebra_pagination.js"></script>

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);  
?>
