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

EndList();
	
?>

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
