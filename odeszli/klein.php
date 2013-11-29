<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

	renderHead($bSubdir);
	renderMenu($bSubdir,7,true);
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->


<h1>
Robert Klein
</h1>

<p>
Z głębokim żalem przyjęliśmy wiadomość o śmierci Roberta Kleina, doskonałego nurka jaskiniowego, popularyzatora naszego sportu i doświadczonego instruktora.
<p>
Składamy serdeczne wyrazy współczucia Rodzinie. Cześć Jego Pamięci.


<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
