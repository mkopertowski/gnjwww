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
	Sztolnia w Bystrzycy Górnej - Stajnia Kleina
</h1>

<p>


W dniu 22 listopada odbyło się nurkowanie w sztolni w Bystrzycy Górnej, nurkowali Łukasz "Łuki" Lechowicz oraz Jacek "Trembi" Trembowelski ze Stajni Kleina (uczestnicy warsztatów jaskiniowych 2003) a z powierzchni wspierał nas Marcin "Głosiu" Głos. Celem nurkowania oprócz doskonalenia technik nurkowań jaskiniowych było także wykonanie podwodnych fotografi sztolni oraz kilku krótkich filmów video.    
</p>


<p align=center>
	<table>
		<tr>
			<td align=center>
				<img src="./img/Bystrzyca_tremb1.jpg" alt="Krata" height=300 width=375></a><br>
				
			</td>
			<td align=center>
				<img src="./img/Bystrzyca_tremb3.jpg" alt="Powierzchnia jeziorka" height=300 width=375></a><br>
				
			</td>
		</tr>
<tr>
			<td align=center>
				<img src="./img/Bystrzyca_tremb4.jpg" alt="Powierzchnia jeziorka" height=300 width=375></a><br>
				
			</td>
			<td align=center>
				<img src="./img/Bystrzyca_tremb2.jpg" alt="Pod wodą" height=300 width=375></a><br>
				
			</td>
		</tr>

<tr>
			<td align=center>
				<img src="./img/Bystrzyca_tremb6.jpg" alt="Pod wodą" height=300 width=375></a><br>
				
			</td>
			<td align=center>
				<img src="./img/Bystrzyca_tremb7.jpg" alt="Pod wodą" height=300 width=375></a><br>
				
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