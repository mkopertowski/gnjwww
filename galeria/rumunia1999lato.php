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
	Rumunia, lato 1999
</h1>
<h3 align="center">W celu pobrania zdjęcia proszę kliknąć na miniaturce.</h3>

<table align=center border=0 cellspacing=0 cellpadding=0>
		
		<!-- WIERSZ ZDJĘĆ -->
		
			<tr height=10 background="../_gfx/perf.gif">
				<td colspan=8 background="../_gfx/perf.gif"></td>
			</tr>
			
			<tr>
				<td>
					<a href="javascript:open_click('./big/1999_1.jpg')">
					<img src="./small/1999_1.jpg" ALT="Wiktor Bolek" hspace=1 width=50 height=75></a></td>
				<td>
					<a href="javascript:open_click('./big/1999_2.jpg')">
					<img src="./small/1999_2.jpg" ALT="Wiktor Bolek" hspace=1 width=50 height=75></a></td>
				<td>
					<a href="javascript:open_click('./big/1999_3.jpg')">
					<img src="./small/1999_3.jpg" ALT="Wiktor Bolek już w mętnej wodzie" hspace=1 width=50 height=75></a></td>
				<td>
					<a href="javascript:open_click('./big/1999_4.jpg')">
					<img src="./small/1999_4.jpg" ALT="Nie udało się wbić głębiej... (Wiktor Bolek)" hspace=1 width=50 height=75></a></td>
				<td>
					<a href="javascript:open_click('./big/1999_5.jpg')">
					<img src="./small/1999_5.jpg" ALT="Sadzawka z wodą" hspace=1 width=50 height=75></a></td>
				<td>
					<a href="javascript:open_click('./big/1999_6.jpg')">
					<img src="./small/1999_6.jpg" ALT="Rafał Garski" hspace=1 width=50 height=75></a></td>
				<td>
					<a href="javascript:open_click('./big/1999_7.jpg')">
					<img src="./small/1999_7.jpg" ALT="Rafał Garski po zanurzeniu" hspace=1 width=50 height=75></a></td>
				<td>
					<a href="javascript:open_click('./big/1999_8.jpg')">
					<img src="./small/1999_8.jpg" ALT="Rurociąg" hspace=1 width=50 height=75></a></td>
			</tr>						
			<tr height=10>
				<td colspan=8 background="../_gfx/perf.gif"></td>
			</tr>	
			<tr height=3>
				<td colspan=8></td>
			</tr>
			
		<!-- / WIERSZ ZDJĘĆ -->
		
		</table>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>