<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

	renderHead($bSubdir);
	renderMenu($bSubdir,9,false,'LINKI');
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
	Linki - Polska
</h1>
[ <a class="navi" href="./index1.php">Zagranica</a> ]
[ <a class="navi" href="./index2.php">Kluby jaskiniowe i nurkowe w Polsce</a> ]

<br>&nbsp;<br>

<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>OFICJALNE STRONY ORGANIZACJI</B> 
		</td>
	</tr>
</table>
<br>

<ul class="normal">
	
<li class="normal">
		<b>Polski Związek Alpinizmu (PZA)</b>&nbsp;&nbsp;&nbsp;[<a href="http://www.pza.org.pl" target="_new" class="navi">wejście ...</a>]<br>&nbsp;<br>
			</li>
	
<li class="normal">
		<b>Komisja Taternictwa Jaskiniowego PZA &nbsp;&nbsp;</b>[<a href="http://www.pza.org.pl/jaskinie/index.acs" target="_new" class="navi">wejście ...</a>]<br>
	&nbsp;<br>
	</li>
	
<li class="normal">
		<b>Komisja Nurkowania Jaskiniowego PZA &nbsp;&nbsp;</b>[<a href="http://www.pza.org.pl/jaskinie/nurkowanie.acs" target="_new" class="navi">wejście ...</a>]<br>
	&nbsp;<br>
	</li>
	
<li class="normal">
		<b>SKTJ - Epimenides &nbsp;&nbsp;</b>[<a href="http://www.sktj.pl/epimenides/" target="_new" class="navi">wejście ...</a>]<br>
	&nbsp;<br>
	</li>

</ul>

<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>STRONY O NURKOWANIU JASKINIOWYM</B> 
		</td>
	</tr>
</table>
<br>

<ul class="normal">

<li class="normal">
		<b>Wikipedia</b>&nbsp;&nbsp;&nbsp;[<a href="http://pl.wikipedia.org/wiki/Nurkowanie_jaskiniowe" target="_new" class="navi">wejście ...</a>]<br>&nbsp;<br>
</li>	
<li class="normal">
		<b>Strona Deep&High</b>&nbsp;&nbsp;&nbsp;[<a href="http://www.deepnhigh.pl/" target="_new" class="navi">wejście ...</a>]<br>&nbsp;<br>
</li>
<li class="normal">
		<b>Hogarthian Divers</b>&nbsp;&nbsp;&nbsp;[<a href="http://www.hogarthian.pl/" target="_new" class="navi">wejście ...</a>]<br>&nbsp;<br>
</li>
<li class="normal">
		<b>Nurkomania</b></b>&nbsp;&nbsp;&nbsp;[<a href="http://www.nurkomania.pl/nurkowanie_jaskiniowe.htm" target="_new" class="navi">wejście ...</a>]<br>&nbsp;<br>
</li>
<li class="normal">
		<b>TOPR - Tarzańskie Ochotnicze Pogotowie Ratunkowe</b></b>&nbsp;&nbsp;&nbsp;[<a href="http://www.topr.pl" target="_new" class="navi">wejście ...</a>]<br>&nbsp;<br>
</li>
<li class="normal">
		<b>Strona Jarosława Kura</b></b>&nbsp;&nbsp;&nbsp;[<a href="http://scientificdiving.eu" target="_new" class="navi">wejście ...</a>]<br>&nbsp;<br>
</li>
<li class="normal">
		<b>Strona Jacka Trembowelskiego</b></b>&nbsp;&nbsp;&nbsp;[<a href="http://www.trembowel.pl" target="_new" class="navi">wejście ...</a>]<br>&nbsp;<br>
</li>
<li class="normal">
		<b>Stowarzyszenie Posejdon</b></b>&nbsp;&nbsp;&nbsp;[<a href="http://posejdon.org.pl" target="_new" class="navi">wejście ...</a>]<br>&nbsp;<br>
</li>

</ul>


<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>INNE</B> 
		</td>
	</tr>
</table>
<br>

<ul class="normal">
	
<li class="normal">
		<b>Ogólnopolski miesięcznik ODKRYWCA</b>&nbsp;&nbsp;&nbsp;[<a href="http://www.odkrywca.pl" target="_new" class="navi">wejście ...</a>]<br>&nbsp;<br>
</li>

<li class="normal">
		<b>Strona GRALmarine Bartka Gryndy</b>&nbsp;&nbsp;&nbsp;[<a href="http://www.gralmarine.com" target="_new" class="navi">wejście ...</a>]<br>&nbsp;<br>
</li>

<li class="normal">
		<b>ProjektFilm</b>&nbsp;&nbsp;&nbsp;[<a href="http://www.projektfilm.pl" target="_new" class="navi">wejście ...</a>]<br>&nbsp;<br>
</li>

<li class="normal">
		<b>Santi - skafandry suche</b>&nbsp;&nbsp;&nbsp;[<a href="http://santidiving.com/pl/" target="_new" class="navi">wejście ...</a>]<br>&nbsp;<br>
</li>

<li class="normal">
		<b>NO GRAVITY - skafandry suche</b>&nbsp;&nbsp;&nbsp;[<a href="http://www.nogravityworld.com" target="_new" class="navi">wejście ...</a>]<br>&nbsp;<br>
</li>

<li class="normal">
		<b>mlinke - sklep</b>&nbsp;&nbsp;&nbsp;[<a href="http://www.mlinke.com.pl" target="_new" class="navi">wejście ...</a>]<br>&nbsp;<br>
</li>


</ul>

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
