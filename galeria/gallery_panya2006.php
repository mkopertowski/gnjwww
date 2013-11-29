<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);
@include('../_php/page_gallery.php');

	renderHead($bSubdir,'','');
	renderMenu($bSubdir,0,false);
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
<h1>Jaskinia Panya, Aj-Petri, Krym</h1>
<h3 align=right>Wrzesień 2006</h3>
<h3 align=center>Zdjęcia z akcji nurkowej w jaskinii Panya</h3>

<?php renderPhotoGallery('panya2006'); ?>

<h3 align=right>zdjęcia: Paweł "Loti" Mordkowicz</h3>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
