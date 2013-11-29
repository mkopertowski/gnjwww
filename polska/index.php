<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

@include('../_php/publication_supp.php');

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

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
