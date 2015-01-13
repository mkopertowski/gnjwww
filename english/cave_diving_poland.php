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
	<li class="normal">
		<b>Overview of cave diving in Poland</b><br>
		Polish cave divers are not pampered by their homeland. Poland offers to them no great resurgences and only a limited number of sumps hidden deep in the caves. In fact, sump diving is the only form of cave diving available in Poland. Caves suitable for diving are to be found practically only in the Tatra mountains in the south of the country...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./overview_pszczolek.php">see more...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Polish version of side-mount</b><br>
		This type of bottle mounting is dedicated to narrow and short sumps. The main point in this configuration is to provide an easy way of attaching and detaching the bottle. The standard jacket with harness will not be used, because the area to be penetrated is constricted. A special belts are to be used...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./sidemount_en.php">see more...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Cave diving in Poland at the end of XXth century</b><br>
		Cave diving in Poland is not an easy job. There is no big resurgence in our country. Most diveable sumps are placed in Tatra Mountains on the southern border. There is an alpine type karst; the temperature is about 3 deg. C. The sumps are deep in the caves...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./overview.php">see more...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Description of the rescue action in Izbucul de la Tauz, October 2002</b><br>
		On 04.10.2002, Rafał Garski did not resurfaced following a dive in Tauz resurgence. As a result, first a research and then the rescue actions were taken, in order to bring up the corpse...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./rumunia10_2002_rescue.php">see more...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Expedition Bihor, winter 2001</b><br>
		In February 2001 Caver's Club SG Wrocław organized a cave diving expedition to Valea Gîrda Seaca in Bihor Mountains (Romania). Five cave divers took part in this event: Wiktor Bolek - leader, Maciej Czykierda, Rafał Garski, Rafał Górecki and Norbert Ziober...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./bihor01.php">see more...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>The sumps in Mietusia Cave</b><br>
		In Mietusia Cave in Tatra Mountains, there are the deepest sumps in Poland. Approximately 200m from the entrance, there are two almost parallel sequences of pits, called Great and Narrow Chimneys (Wielkie Kominy, Ciasne Kominy). At their bottoms are clear, spacious lakes - a challenge for cave divers...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./mietusia9899.php">see more...</a>]<br>&nbsp;
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
