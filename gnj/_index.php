<?php

$bSubdir = true;
$sInclude = './_php/page.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

	renderHead($bSubdir);
	renderMenu($bSubdir,2,true);
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
	Grupa Nurków Jaskiniowych
</h1>

<p>Poni¿ej znajduja siê materia³y dotycz¹ce <b>Grupy Nurków Jaskiniowych</b>.</p>
<p>&nbsp;</p>


<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>Sprawy Organizacyjne</B>
		</td>
	</tr>
</table>
<br>
<ul class="normal">
	<li class="normal">
		<b>GNJ</b> W³odek Szymanowski zaprezentowa³ wzór karty cz³onkowsiej <b>Grupy Nurków Jaskiniowych</b>.
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="../gnj/wzor_karty.php">wiêcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		Powsta³a idea ogólnopolskiego klubu nurków jaskiniowych, zrzeszonego w PZA. Pozwoli³oby to na skonsolidowanie nurków jaskiniowych dzia³aj¹cych w kraju..
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="../gnj/stowarzyszenie_gnj.php">wiêcej...</a>]<br>&nbsp;
	</li>
</ul>

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
