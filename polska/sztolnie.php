<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

@include('../_php/publication_supp.php');
include('../_php/mysql.php');
include('../_php/misc.php');

	renderHead($bSubdir,'','');
	renderMenu($bSubdir,5,false,'POLSKA','SZTOLNIE, STUDNIE, KOPALNIE');
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
	POLSKA - SZTOLNIE, STUDNIE, KOPALNIE
</h1>

<ul class="normal">

<?php

$sqlfiltr="section='polska' AND tags LIKE '%kopalnie%'";

ArticleListFiltredMYSQL($mysqli,'..',$sqlfiltr);

?>

</ul>

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
