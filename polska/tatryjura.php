<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

$GL_DIR = '..';

@include('../_php/publication_supp.php');
include('../_php/mysql.php');
include('../_php/misc.php');

	renderHead($bSubdir,'','');
	renderMenu($bSubdir,5,false,'POLSKA','TATRY, JURA');
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
	POLSKA - TATRY, JURA
</h1>

<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>WODNA POD PISANĄ</B> 
		</td>
	</tr>
</table>
<br>
<ul class="normal">

<?php 

$sqlfiltr="section='polska' AND tags LIKE '%WodnaPodPisana%'";

ArticleListFiltredMYSQL($mysqli,'..',$sqlfiltr);

?>

</ul>

<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>DUDNICA</B> 
		</td>
	</tr>
</table>
<br>
<ul class="normal">
<?php 
$sqlfiltr="section='polska' AND tags LIKE '%Dudnica%'";
ArticleListFiltredMYSQL($mysqli,'..',$sqlfiltr);
?>
</ul>

<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>KASPROWA NIŻNIA</B> 
		</td>
	</tr>
</table>
<br>
<ul class="normal">

<?php 

$sqlfiltr="section='polska' AND tags LIKE '%Kasprowa%'";

ArticleListFiltredMYSQL($mysqli,'..',$sqlfiltr);

?>
</ul>
<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>MIĘTUSIA</B> 
		</td>
	</tr>
</table>
<br>
<ul class="normal">

<?php 

$sqlfiltr="section='polska' AND tags LIKE '%Mietusia%'";

ArticleListFiltredMYSQL($mysqli,'..',$sqlfiltr);

?>
</ul>
<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>NIECKA NIDZIAŃSKA</B> 
		</td>
	</tr>
</table>
<br>
<ul class="normal">
<?php 

$sqlfiltr="section='polska' AND tags LIKE '%Niecka%'";

ArticleListFiltredMYSQL($mysqli,'..',$sqlfiltr);

?>
</ul>

<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>SZMARAGDOWA</B> 
		</td>
	</tr>
</table>
<br>
<ul class="normal">
<?php 

$sqlfiltr="section='polska' AND tags LIKE '%Szmaragdowa%'";

ArticleListFiltredMYSQL($mysqli,'..',$sqlfiltr);

?>
</ul>
<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>ŚNIEŻNA STUDNIA</B> 
		</td>
	</tr>
</table>
<br>
<ul class="normal">
<?php 
$sqlfiltr="section='polska' AND tags LIKE '%SnieznaStudnia%'";
ArticleListFiltredMYSQL($mysqli,'..',$sqlfiltr);
?>
</ul>

<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>WIELKA ŚNIEŻNA</B> 
		</td>
	</tr>
</table>
<br>
<ul class="normal">

<?php

  $sqlfiltr="section='polska' AND tags LIKE '%WielkaSniezna%'";

  ArticleListFiltredMYSQL($mysqli,'..',$sqlfiltr);
?>
</ul>
<table cellspacing=0 cellpadding=3 width=100%>
	<tr>
		<td class="aktualnosci" align=left width=100%>
			<B>ZIMNA</B> 
		</td>
	</tr>
</table>
<br>
<ul class="normal">
<?php 
$sqlfiltr="section='polska' AND tags LIKE '%Zimna%'";
ArticleListFiltredMYSQL($mysqli,'..',$sqlfiltr);
?>
</ul>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
