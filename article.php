<?php

$bSubdir = false;
@include('./_php/page_utf8.php');
renderHead($bSubdir,'','');
renderMenu($bSubdir,2,false,ConvertSec2SectionName($_REQUEST['sec']));
renderGallery($bSubdir,false);
renderUpdates($bSubdir);
	
renderCentral(true);

//============================= CONTENT BEGIN   ==========================================
@include('./_php/article.php');
//============================= CONTENT END   ============================================

renderBottom($bSubdir);

?>  

