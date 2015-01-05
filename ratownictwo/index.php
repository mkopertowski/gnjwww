<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

$GL_DIR = '..';

@include('../_php/publication_supp.php');
include('../_php/mysql.php');
include('../_php/misc.php');

	renderHead($bSubdir);
	renderMenu($bSubdir,13,false,'RATOWNICTWO');
	renderGallery(true,false);
	renderCentral(true);
?>
		
<!--============================= CONTENTS START ==========================================-->
<h1>
   RATOWNICTWO NURKOWE W JASKINIACH (RNJ)
</h1>

<?php

NewSection('SZKOLENIA','section');

StartList();

$sqlfiltr="section='ratownictwo'";

ArticleListFiltredMYSQL($mysqli,'..',$sqlfiltr);

EndList();
?>


<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
