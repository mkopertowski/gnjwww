<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

	renderHead($bSubdir);
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
<h1>
	Jaskinia Kasprowa Niżna, 2001
</h1>
<h3 align="center">W celu pobrania zdjęcia proszę kliknąć na miniaturce.</h3>

<table align=center border=0 cellspacing=0 cellpadding=0>
		
		<!-- WIERSZ ZDJĘĆ -->
		
			<tr height=10 background="../_gfx/perf.gif">
				<td colspan=7 background="../_gfx/perf.gif"></td>
			</tr>
			
			<tr>
				<td>
					<a href="javascript:open_click('./big/kasprowa01_01.jpg')">
					<img src="./small/kasprowa01_01.jpg" ALT="Andrzej Szerszeń w Jaskini Kasprowa Niżna" hspace=1 width=50 height=75></a></td>
				<td>
					<a href="javascript:open_click('./big/kasprowa01_02.jpg')">
					<img src="./small/kasprowa01_02.jpg" ALT="Andrzej Szerszeń w Jaskini Kasprowa Niżna" hspace=1 width=50 height=75></a></td>
				<td>
					<a href="javascript:open_click('./big/kasprowa01_03.jpg')">
					<img src="./small/kasprowa01_03.jpg" ALT="Andrzej Szerszeń w Jaskini Kasprowa Niżna" hspace=1 width=50 height=75></a></td>
				<td>
					<a href="javascript:open_click('./big/kasprowa01_04.jpg')">
					<img src="./small/kasprowa01_04.jpg" ALT="Andrzej Szerszeń w Jaskini Kasprowa Niżna" hspace=1 width=50 height=75></a></td>
				<td>
					<a href="javascript:open_click('./big/kasprowa01_05.jpg')">
					<img src="./small/kasprowa01_05.jpg" ALT="Andrzej Szerszeń w Jaskini Kasprowa Niżna" hspace=1 width=50 height=75></a></td>
				<td>
					<a href="javascript:open_click('./big/kasprowa01_06.jpg')">
					<img src="./small/kasprowa01_06.jpg" ALT="Andrzej Szerszeń w Jaskini Kasprowa Niżna" hspace=1 width=50 height=75></a></td>
				<td>
					<a href="javascript:open_click('./big/kasprowa01_07.jpg')">
					<img src="./small/kasprowa01_07.jpg" ALT="Andrzej Szerszeń w Jaskini Kasprowa Niżna" hspace=1 width=50 height=75></a></td>			
			</tr>						
			<tr height=10>
				<td colspan=7 background="../_gfx/perf.gif"></td>
			</tr>	
			<tr height=3>
				<td colspan=4></td>
			</tr>
			
		<!-- / WIERSZ ZDJĘĆ -->
		
		</table>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>