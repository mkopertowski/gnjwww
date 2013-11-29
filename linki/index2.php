<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

	renderHead($bSubdir);
	renderMenu($bSubdir,9,true);
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
	Linki - strony związane z działanością nurkową lub jaskiniową w Polsce
</h1>
[ <a class="navi" href="./index.php">Polska</a> ]
[ <a class="navi" href="./index1.php">Zagranica</a> ]<br>&nbsp;<br>

<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>KLUBY JASKINIOWE</B> 
		</td>
	</tr>
</table>
<br>

<ul class="normal">
	
<li class="normal">
		<b>Sekcja Grotołazów Wrocław</b>&nbsp;&nbsp;&nbsp;[<a href="http://www.sgw.wroc.pl" target="_new" class="navi">wejście ...</a>]<br>&nbsp;<br>
			</li>
	
<li class="normal">
		<b>Speleoklub Warszawski &nbsp;&nbsp;</b>[<a href="http://speleo.waw.pl" target="_new" class="navi">wejście ...</a>]<br>
	&nbsp;<br>
	</li>
	
<li class="normal">
		<b>Katowicki Klub Speleologiczny &nbsp;&nbsp;</b>[<a href="http://kks.dy.pl" target="_new" class="navi">wejście ...</a>]<br>
	&nbsp;<br>
	</li>	
	

</ul>

<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>KLUBY NURKOWE</B> 
		</td>
	</tr>
</table>
<br>

<ul class="normal">
	

	
<li class="normal">
		Aquamatic, strona firmy Rafała Góreckiego &nbsp;&nbsp;[<a href="http://www.nurkowanie.wroc.pl" target="_new" class="navi">wejście ...</a>]<br>&nbsp;<br>
			</li>
	

	
</ul>

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>