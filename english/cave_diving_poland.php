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
	renderMenu($bSubdir,10,false);
	renderGallery(true,true);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
	ARTICLES AND REPORTS
</h1>
<ul class="normal">

<?php

$sqlfiltr="language='en'";

ArticleListFiltredMYSQL($mysqli,'..',$sqlfiltr);

?>

	<li class="normal">
		<b>List of sumps in Polish Tatra Mountains</b><br>
		
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./syfony_tatry_en.php">see more...</a>]<br>&nbsp;
	</li>
</ul>

<h1>
         Cave Divers Group	
</h1>

<p>
<b>Cave Divers Group</b> (Grupa Nurków Jaskiniowych) is an association of experiencend cave divers. The goal of GNJ is popularisation of cave diving, underwater exploration and cave diving safety. GNJ has been issued on 21.07.2005 in Wroclaw, Poland. Contact: gnj.pnj / at / gnj.org.pl
</p>

<br>

<p><b>Useful resources:</b><br>
	<a href="http://www.sktj.pl/epimenides/jaskinie/" target="_new" class="navi" name="res">
		THE CAVES
	</a> - see the Internet issues of "The Caves", official publication of <b>Caving Committee of Polish Alpinism Association</b><br>
	<a href="http://www.sktj.pl/epimenides/" target="_new" class="navi">
		EPIMENIDES
	</a> - the Official Polish Speleo Web Page
</p>


<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
