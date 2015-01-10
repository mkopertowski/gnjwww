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
	renderMenu($bSubdir,5,false,'POLSKA');
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
	POLSKA
</h1>

W Dziale zamieszczone są <b>relacje z nurkowań w Polsce</b>:

<ul class="normal">
	
	<li class="normal">w jaskiniach tatrzańskich</li>
	<li class="normal">w jaskiniach jurajskich</li>
	<li class="normal">w obiektach sztucznych: sztolniach, studniach i kopalniach.</li>

</ul>

<?php 

NewSection('POZOSTAŁE POLSKIE NURKOWANIA','section');

StartList();

$sqlfiltr="section='polska' and tags=''";

ArticleListFiltredMYSQL($mysqli,'..',$sqlfiltr);

EndList();

?>

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
