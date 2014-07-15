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
	renderMenu($bSubdir,7,false,'ODESZLI OD NAS');
	renderGallery(true,false);
	renderCentral(true);
?>
		<!--============================= CONTENTS START ==========================================-->
<h1>
	ODESZLI OD NAS
</h1>

<!--
  ExtendedListItem('',
                   '...',
                   '../article.php?id=&?sec=','WIĘCEJ',
                   '.  2008','');
-->

<?php

NewSection('KU PAMIĘCI','section');

StartList();

	$sql="SELECT * FROM $ARTICLE_TABLE_NAME WHERE status='ready' and section='odeszli' ORDER BY date DESC";
	$result=$mysqli->query($sql);

	if($result) {

		while ($row = $result->fetch_assoc()) { // list start?

			ExtendedListItemMYSQL($mysqli,$row,'..');
		}
	}
?>

<li class="normal">
		<b>Artur Kozłowski</b><br>
	      W jaskini Pollonora Co. Galway 5 września 2011 nie wynurzył się <b>Artur Kozłowski</b>.
         		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./kozlowski.php">więcej...</a>]
         <br>&nbsp;
	</li>


<li class="normal">
		<b>Włodzimierz Szymanowski</b><br>
	      6 kwietnia 2005 podczas nurkowania we francuskim wywierzysku Goul du Pont 
	      zginął tragicznie <b>Włodzimierz Szymanowski</b>.
         Był wybitną osobowością w świecie nurkowania, grotołazem mającym 
         na swoim koncie liczne osiągnięcia w dziedzinie eksploracji jaskiń 
         oraz przyjacielem i towarzyszem wypraw, a przede wszystkim wspaniałym, 
         otwartym i życzliwym wszystkim człowiekiem...
   		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./spryciula.php">więcej...</a>]
         <br>&nbsp;
	</li>

	<li class="normal">
		<b>Dave Shaw</b><br>

		 8 stycznia 2005 roku w Bushman’s Gat (RPA) nie wynurzył się Dave Shaw, próbujacy wydobyć zwłoki nurka zaginionego 10 lat temu znalezione podczas rekordowego nurkowania 2 miesiące wcześniej...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./daveshaw.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Wiktor Bolek</b><br>
		W sobotę, 1 maja 2004 r. tragiczny wypadek zakończył życie Wiktora Bolka. Tego dnia, w kamieniołomie w Wildschutz (Niemcy), podczas nurkowania, zmarł jeden z najlepszych polskich nurków jaskiniowych...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./wiktor.php">więcej...</a>]<br>&nbsp;

	</li>
	<li class="normal">
		<b>Sheck Exley - odszedł najlepszy...</b><br>
		Sheck Exley był uważany za przodującego płetwonurka, nie tylko w Stanach, ale i na całym świecie. Jego osiągnięcia i rola, jaką odegrał w rozwoju techniki podziemnego nurkowania...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./exley.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Wladimir Kiseljow - pożegnanie</b><br>
		8 marca 1995 roku podczas nurkowania w jaskini ŻW-52 zginął znakomity rosyjski grotołaz i płetwonurek Wladimir Kiseljow...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./kiseljow.php">więcej...</a>]<br>&nbsp;
	</li>
</ul>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
