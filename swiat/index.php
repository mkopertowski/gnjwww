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
	renderMenu($bSubdir,6,false,'SWIAT');
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
	WYPRAWY ZAGRANICZNE
</h1>
<?php

/*
//-----------------------------------------------------
NewSection('','section');

StartList();

  ListItem('<b></b>');
  ExtendedListItem('','','','','');
  ExtendedListItem($title,$tekst,$link,$data,$autor);
EndList();
*/
//-----------------------------------------------------


$sql="SELECT * FROM $ARTICLE_TABLE_NAME WHERE status='ready' and section='świat' ORDER BY date DESC";
$result=$mysqli->query($sql);

if($result) {

	$rok = '';
	
	while ($row = $result->fetch_assoc()) { // list start?

		if($rok == '') {
			$rok = GetYearFromDate($row['date']);
			
			NewSection('ROK '.$rok,'section');
			StartList();
		} else if($rok != GetYearFromDate($row['date'])) { // new year?
			$rok = GetYearFromDate($row['date']);

			EndList ();
			NewSection('ROK '.$rok,'section');
			StartList();
		}
		
		ExtendedListItemMYSQL($mysqli,$row,'..');
		
	}

	EndList ();
}

?>

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
