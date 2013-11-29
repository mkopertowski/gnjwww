<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
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
	Zdjęcia do programu "Podwodna Polska"
</h1>
 <br>&nbsp;<br>

<br>


<ul class="normal"> 
	<li class="normal">
		 W dniu 05.09.2003 Podkomisja Nurkowania Jaskiniowego zorganizowała nurkowania treningowe w kamieniołomach w Gębczycach. Został przy tym nakręcony materiał filmowy (zarówno nad wodą jak i pod wodą) dla programu Podwodna Polska TVP3 prowadzonego przez Ewę Żerdzińską. W nurkowaniach ze strony PNJ wzięli udział Wiktor Bolek, Mirosław Kopertowski i Włodzimierz Szymanowski oraz grupa wspomagająca z powierzchni: Andrzej Dąbrowski i Rafał Górecki. Mirek zanurkował w kamieniołomie z klatką, gdzie demonstrował techniki pokonywania cianych miejsc, przepływając między kątownikami konstrukcji. W drugim zbiorniku zanurkowali Wiktor i Włodek. Wiktor zademonstrował sposoby stabilizowania poręczówki, a Włodek zaporęczował drogę do dwu wagoników. 
		&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<br>&nbsp;
		<br><br>
	</li>
</ul>
</p>
<table align=center>
	<tr>
		<td align=center valign=top>
			<a class="navi" href="./img/tvp3_klatka_big.jpg" target="_new">
				<img src="./img/tvp3_klatka.jpg" alt="Kamieniołom z klatką" height=320 width=240></a><br>
			<i>Operator filmowy na podeście</i>
		</td>&nbsp;&nbsp;&nbsp;
		<td align=center valign=middle>
			<a class="navi" href="./img/tvp3_oddycharka_big.jpg" target="_new">
				<img src="./img/tvp3_oddycharka.jpg" alt="Włodek - gwiazdor" height=240 width=320></a><br>
			<i>Włodek ze swoją oddycharką</i>
		</td>

	</tr>
</table>



<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>