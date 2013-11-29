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
	Grupa Nurk�w Jaskiniowych
</h1>

<p>Poni�ej znajduja si� materia�y dotycz�ce <b>Grupy Nurk�w Jaskiniowych</b>.</p>
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
		<b>GNJ</b> W�odek Szymanowski zaprezentowa� wz�r karty cz�onkowsiej <b>Grupy Nurk�w Jaskiniowych</b>.
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="../gnj/wzor_karty.php">wi�cej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		Powsta�a idea og�lnopolskiego klubu nurk�w jaskiniowych, zrzeszonego w PZA. Pozwoli�oby to na skonsolidowanie nurk�w jaskiniowych dzia�aj�cych w kraju..
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="../gnj/stowarzyszenie_gnj.php">wi�cej...</a>]<br>&nbsp;
	</li>
</ul>

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
