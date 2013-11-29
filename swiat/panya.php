<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);
@include('../_php/publication_supp.php');

	renderHead($bSubdir,'','');
	renderMenu($bSubdir,6,true);
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
<h1>
Jaskinia Panya - Krym</h1>

<a class="navi" href="javascript:open_click('./img/PANYA_plan.gif')">PLAN</a> <br>
<a class="navi" href="javascript:open_click('./img/PANYA_profile.gif')">PRZEKRÓJ ZRZUTOWANY (widziany w kierunku 30 stopni)</a><BR><BR>

Pomiary 05.09.2006:
<ol>
	<li>Podwodne: Andrzej Szerszeń<BR>
       0 - 147 m na podstawie poręczówki rozwiniętej przez M. Kopertowskiego<BR>
       147 m - 197 m na podstawie poręczówki pozostawionej przez nurków rosyjskich:  Samokhin G., Gritsenko V. , całkowita długość 50 m, odległość stacji pomiarowych szacowana,<BR>
       197 m - 200 m na podstawie poręczówki rozwiniętej przez A. Szerszenia<BR>
	</li>
	<li>Partie suche: Dominik Graczyk, Andrzej Szerszeń</li>
</ol>
<h3 align=right>opracowanie: Andrzej Szerszeń</h3>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
