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
	renderMenu($bSubdir,3,false,'TECHNIKA');
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>SZKOLENIE I TECHNIKA</h1>

<?php 

NewSection('SZKOLENIA','section');

StartList();

$sqlfiltr="section='technika' AND language='pl'";

ArticleListFiltredMYSQL($mysqli,'..',$sqlfiltr);

?>

</ul>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
