<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);
@include('../_php/publication_supp.php');

	renderHead($bSubdir);
	renderMenu($bSubdir,2,true);
	renderGallery(true,false);
	renderCentral(true);
?>

<script language=JavaScript1.2>
	<!--
	function open_click(what)
	{
		sStyle = "channelmode=0,directories=0,fullscreen=0,height=650,";
		sStyle += "left=0,location=0,menubar=0,resizable=1,scrollbars=1,";
		sStyle += "status=0,titlebar=1,toolbar=0,top=0,width=850"; 
		window.open(what,"_blank",sStyle);
	}
	//-->
	</script>

<!--============================= CONTENTS START ==========================================-->
<h1>Włochy Kwiecień 2006 - wyjazd kondycyjno-treningowy
</h1>

<?php

Paste2ExpandPhotos('wlochy01.jpg','przygotowania','v',
             'wlochy02.jpg','Elefante Bianco','h');
Paste2ExpandPhotos('wlochy03.jpg','Honzo "PO"','h',
             'wlochy04.jpg','Mirek pozuje','h');
Paste2ExpandPhotos('wlochy05.jpg','Fontanazzi 1.','h',
             'wlochy06.jpg','Fontanazzi 2.','h');
Paste2ExpandPhotos('wlochy07.jpg','Fontanazzi 3.','h',
             'wlochy08.jpg','Fontanazzi 4.','h');
Paste2ExpandPhotos('wlochy09.jpg','Fontanazzi 5.','h',
             'wlochy10.jpg','Fontanazzi 6.','h');

?>


<h3 align=right>zdjęcia: Dominik Graczyk "Honzo"</h3>


<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
