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
	renderMenu($bSubdir,7,false,'ARTYKUŁY');
	renderGallery(true,false);
	renderCentral(true);
?>
		<!--============================= CONTENTS START ==========================================-->
<h1>
	ARTYKUŁY
</h1>

<!--
  ExtendedListItem('',
                   '...',
                   '../article.php?id=&?sec=','WIĘCEJ',
                   '.  2008','');
-->

<?php

NewSection('WYDARZENIA','section');

StartList();

	$sql="SELECT * FROM $ARTICLE_TABLE_NAME WHERE status='ready' and section='artykuły' ORDER BY date DESC";
	$result=$mysqli->query($sql);

	if($result) {

		while ($row = $result->fetch_assoc()) { // list start?

			ExtendedListItemMYSQL($mysqli,$row,'..');
		}
	}
                     
?>

</ul>

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
