<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

	renderHead($bSubdir);
	renderMenu($bSubdir,3,true);
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
	Przygotowanie automatu
</h1>
<p>W nurkowaniu jaskiniowym zawsze używa się dwu niezależnych butli. Dobrze jest jeżeli jeden z drugich stopni automatów jest prawy a drugi lewy.  Każdy z automatów należy przygotować w podobny sposób. </p>

<p>Każdy z automatów powinien być oznaczony za pomocą innego koloru (taśma izolacyjna lub osłonki na węże). Na węży przy drugim stopniu mocuje się mały karabinek żeglarski za pomocą gumki. Za pomocą tego karabinka przypina się drugi stopnień do linki gumowej założonej na szyję. Każdy automat musi być wyposażony w manometr. Przy manometrze zakłada się gumkę do spięcia z drugim manometrem lub do założenia na zawór butli w przypadku konfiguracji bocznej.  </p>

<p align=center>
<table border=0>
	<tr>
		<td align=center valign=center>
			<a href="./img/automat_1.jpg" target="_new">
				<img src="./img/automat_1_small.jpg" alt="Pętla z linki gumowej" height=226 width=300></a>
			<br>
			<i>Pętla z linki gumowej, zakładana na szyję, do wpięcia drugich stopni automatów.</i>
		</td>
		
	</tr>
</table>
</p>

<p>Na zamieszczonych zdjęciach pokazano przykładowy sposób przygotowania automatu do nurkowania jaskiniowego.</p>

<div align=center>
<table>
	<tr>
		<td align=center valign=center>
			<a href="./img/automat_2.jpg" target="_new">
				<img src="./img/automat_2_small.jpg" alt="Automat przygotowany do nurkowania jaskiniowego" height=226 width=300></a>
			<br>
			<i>Mocowanie karabinka do wpięcia drugiego stopnia w gumkę na szyi.</i><br>
		</td>
		<td align=center valign=center>
			<a href="./img/automat_3.jpg" target="_new">
				<img src="./img/automat_3_small.jpg" alt="Automat przygotowany do nurkowania jaskiniowego" height=226 width=300></a>
			<br>
			<i>Oznaczenie węży wychodzących z pierwszego stopnia.</i><br>
		</td>
	</tr>
	<tr>
		<td colspan=2 height=10>
	</tr>
	<tr>
		<td align=center valign=center>
			<a href="./img/automat_4.jpg" target="_new">
				<img src="./img/automat_4_small.jpg" alt="Automat przygotowany do nurkowania jaskiniowego" height=226 width=300></a>
			<br>
			<i>Gumka założona na manometr służąca do spięcia z drugim manometrem.</i>
		<br>&nbsp;</td>
		<td align=center valign=center>
			<a href="./img/automat_5.jpg" target="_new">
				<img src="./img/automat_5_small.jpg" alt="Automat przygotowany do nurkowania jaskiniowego" height=226 width=300></a>
			<br>
			<i>Wpięcie automatów do gumki na szyi.<br> Wpinające karabinki są rozdzielone węzłem na lince.</i>
		</td>
	</tr>
</table>
</div>

<!--============================= CONTENTS END ==========================================-->
<?php
	renderBottom($bSubdir);
?>