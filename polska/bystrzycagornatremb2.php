<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

	renderHead($bSubdir);
	renderMenu($bSubdir,5,true);
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
	Sztolnia w Bystrzycy Górnej - kolejne nurkowanie
</h1>

<p>


27 grudnia zanurkowaliśmy znów w sztolni w Bystrzycy Górnej. Tym razem w składzie Agata Kuśnierek i Jacek "Trembi" Trembowelski. Naszym celem była praktyka w zakresie podwodnej fotografi oraz zdobywanie doświadczeń nurkowych w zalanych korytarzach, niestety awaria jednej z latarek uniemożliwiła nam wykonanie zdjęć takich jak byśmy chcieli, pozostała częśc planu przebiegła bez zarzutu. Kolejne dni poświęciliśmy na zaporęczowanie sporego fragmentu Koparek podczas nurkowania podlodowego oraz na nawodny rekonesans kopalni w Miedziance, w której zamierzamy nurkować w najbliższym czasie.   
</p>


<p align=center>
	<table>
		<tr>
			<td align=center>
				<img src="./img/Bystrz_JT1.jpg" alt="W jeziorku" height=270 width=375></a><br>
				
			</td>
			<td align=center>
				<img src="./img/Bystrz_JT2.jpg" alt="Powierzchnia jeziorka" height=270 width=375></a><br>
				
			</td>
		</tr>
<tr>
			<td align=center>
				<img src="./img/Bystrz_JT3.jpg" alt="Pod wodą" height=270 width=375></a><br>
				
			</td>
			<td align=center>
				<img src="./img/Bystrz_JT4.jpg" alt="Korytarz w sztolni" height=300 width=275></a><br>
				
			</td>
		</tr>

	</table>
</p>


<p>[<a class="navismall" href="../polska/bystrzycagornamg.php">Nurkowanie Michała Gignala</a>]&nbsp<br>
[<a class="navismall" href="../polska/bystrzycagornamadziarz.php">Rys historyczny</a>]&nbsp &nbsp &nbsp[<a class="navismall" href="../polska/bystrzycagornawb.php">Opis sztolni</a>]<br>&nbsp;
</p>

<h3 align=right>Jacek Trembowelski</h3>


<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>