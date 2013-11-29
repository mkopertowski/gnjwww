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
	Chorwacja, Vrulja, 2002
</h1>
<h3 align="center">W celu pobrania zdjęcia proszę kliknąć na miniaturce.</h3>

<table align=center border=0 cellspacing=0 cellpadding=0>
		
		<!-- WIERSZ ZDJĘĆ -->
		
			<tr height=10 background="../_gfx/perf.gif">
				<td colspan=10 background="../_gfx/perf.gif"></td>
			</tr>
			
			<tr>
				<td>
					<a href="javascript:open_click('./big/chorwacjavruljaGD2002_1.jpg')">
					<img src="./small/chorwacjavruljaGD2002_11.jpg" ALT="Przeróbki rebreathera" hspace=1 width=50 height=75></a></td>
				<td>
					<a href="javascript:open_click('./big/chorwacjavruljaWB2002_1.jpg')">
					<img src="./small/chorwacjavruljaWB2002_11.jpg" ALT="Za chwilę zacznie się nurkowanie" hspace=1 width=50 height=75></a></td>
				<td>
					<a href="javascript:open_click('./big/chorwacjavruljaWB2002_2.jpg')">
					<img src="./small/chorwacjavruljaWB2002_21.jpg" ALT="Po nurkowaniu" hspace=1 width=50 height=75></a></td>
				<td>
					<a href="javascript:open_click('./big/chorwacjavruljaWB2002_3.jpg')">
					<img src="./small/chorwacjavruljaWB2002_31.jpg" ALT="Dużo gazów to to nie zostało..." hspace=1 width=50 height=75></a></td>
				<td>
					<a href="javascript:open_click('./big/chorwacjavruljaGD2002_2.jpg')">
					<img src="./small/chorwacjavruljaGD2002_2.jpg" ALT="Załadunek sprzętu" hspace=1 width=50 height=75></a></td>
				<td>
					<a href="javascript:open_click('./big/chorwacjavruljaGD2002_3.jpg')">
					<img src="./small/chorwacjavruljaGD2002_3.jpg" ALT="Już na lądzie" hspace=1 width=50 height=75></a></td>
				<td>
					<a href="javascript:open_click('./big/chorwacjavruljaGD2002_4.jpg')">
					<img src="./small/chorwacjavruljaGD2002_4.jpg" ALT="Zanurzenie" hspace=1 width=50 height=75></a></td>
				<td>
					<a href="javascript:open_click('./big/chorwacjavruljaGD2002_5.jpg')">
					<img src="./small/chorwacjavruljaGD2002_5.jpg" ALT="Tuż po wynurzeniu" hspace=1 width=50 height=75></a></td>
				<td>
					<a href="javascript:open_click('./big/chorwacjavruljaGD2002_6.jpg')">
					<img src="./small/chorwacjavruljaGD2002_6.jpg" ALT="Załadunek rebreather na łódź po nurkowaniu" hspace=1 width=50 height=75></a></td>
				<td>
					<a href="javascript:open_click('./big/chorwacjavruljaGD2002_7.jpg')">
					<img src="./small/chorwacjavruljaGD2002_7.jpg" ALT="Po nurkowaniu" hspace=1 width=50 height=75></a></td>
			</tr>						
			<tr height=10>
				<td colspan=10 background="../_gfx/perf.gif"></td>
			</tr>	
			<tr height=3>
				<td colspan=10></td>
			</tr>
			
		<!-- / WIERSZ ZDJĘĆ -->
		<!-- WIERSZ ZDJĘĆ -->
		
			<tr height=10 background="../_gfx/perf.gif">
				<td colspan=2 background="../_gfx/perf.gif"></td>
			</tr>
			
			<tr>
				<td>
					<a href="javascript:open_click('./big/chorwacjavruljaGD2002_8.jpg')">
					<img src="./small/chorwacjavruljaGD2002_8.jpg" ALT="Wyjście na ląd" hspace=1 width=50 height=75></a></td>
				<td>
					<a href="javascript:open_click('./big/chorwacjavruljaGD2002_9.jpg')">
					<img src="./small/chorwacjavruljaGD2002_9.jpg" ALT="W drodze na nurkowanie" hspace=1 width=50 height=75></a></td>
			</tr>						
			<tr height=10>
				<td colspan=2 background="../_gfx/perf.gif"></td>
			</tr>	
			<tr height=3>
				<td colspan=2></td>
			</tr>
			
		<!-- / WIERSZ ZDJĘĆ -->
		
		</table>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>