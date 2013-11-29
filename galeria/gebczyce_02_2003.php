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
	Nurkowanie treningowe Gębczyce, luty 2003
</h1>
<h3 align="center">W celu pobrania zdjęcia proszę kliknąć na miniaturce.</h3>

<table align=center border=0 cellspacing=0 cellpadding=0>
		
		<!-- WIERSZ ZDJĘĆ -->
		
			<tr height=10 background="../_gfx/perf.gif">
				<td colspan=9 background="../_gfx/perf.gif"></td>
			</tr>
			
			<tr>
				<td>
					<a href="javascript:open_click('./big/gebczyce_02_2003_1.jpg')">
					<img src="./small/gebczyce_02_2003_1.jpg" ALT="Nurkowanie w Gębczycach" hspace=1 width=50 height=75></a></td>
				<td>
					<a href="javascript:open_click('./big/gebczyce_02_2003_2.jpg')">
					<img src="./small/gebczyce_02_2003_2.jpg" ALT="Nurkowanie w Gębczycach" hspace=1 width=50 height=75></a></td>
				<td>
					<a href="javascript:open_click('./big/gebczyce_02_2003_3.jpg')">
					<img src="./small/gebczyce_02_2003_3.jpg" ALT="Nurkowanie w Gębczycach" hspace=1 width=50 height=75></a></td>
				<td>
					<a href="javascript:open_click('./big/gebczyce_02_2003_4.jpg')">
					<img src="./small/gebczyce_02_2003_4.jpg" ALT="Nurkowanie w Gębczycach" hspace=1 width=50 height=75></a></td>
				<td>
					<a href="javascript:open_click('./big/gebczyce_02_2003_5.jpg')">
					<img src="./small/gebczyce_02_2003_5.jpg" ALT="Nurkowanie w Gębczycach" hspace=1 width=50 height=75></a></td>
				<td>
					<a href="javascript:open_click('./big/gebczyce_02_2003_6.jpg')">
					<img src="./small/gebczyce_02_2003_6.jpg" ALT="Nurkowanie w Gębczycach" hspace=1 width=50 height=75></a></td>
				<td>
					<a href="javascript:open_click('./big/gebczyce_02_2003_7.jpg')">
					<img src="./small/gebczyce_02_2003_7.jpg" ALT="Nurkowanie w Gębczycach" hspace=1 width=50 height=75></a></td>			
			</tr>						
			<tr height=10>
				<td colspan=9 background="../_gfx/perf.gif"></td>
			</tr>	
			<tr height=3>
				<td colspan=9></td>
			</tr>
			
		<!-- / WIERSZ ZDJĘĆ -->
		
		</table>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>