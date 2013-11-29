<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

	renderHead($bSubdir);
	renderMenu($bSubdir,6,true);
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
	Sztolnia na Słowacji
</h1>

<p>Sławek Paćko i Robert Klein nurkowali w starej kopalni opali na Słowacji koło Koszyc.</p>
<p>Kopalnia opali zanjduje się 35 km od Koszyc koło Dubnika, pomiędzy miejscowościami Cervenica i Zlote Hory. Można sie tam dostać drogą: Koszyce, Rozhanovce, Cizatice, Kecerovce, Opina, Cervenica (kierunek Zlate Hory).</p>
<p>Dubnickie kopalnie opali są najstarszymi i największymi na świecie kopaniami opali. Początki robót górniczych datuje się na XI i XII wiek. Niektóre źródła utrzymują jednak, że początki wydobycia sięgają nawet czasów rzymskich. Wydobycie oficjalnie zakończyło sie w 1922 roku. Podczas eksploatacji tego złoża wydrążono 30 sztolni o całokowitej długości korytarzy około 22 km. Obecnie zatopiona jest część kopalni Viliam.</p>
<p>Warunki nurkowania są tu bardzo dobre. Widoczność pod wodą wynosi 50m. Osady są ciężkie, co powoduje, że trudno jest zmącić wodę. Po zmąceniu widoczność spada do 1 m. Przy płynięciu z powrotem widocznośćjest taka sama jak przy penetracji. Woda w tej sztolni ma odczyn kwaśny (pH 2,8 - 3,0). Temperatura wody 5 C. Kopalnia znajduje się na wysokości 594 m.n.p.m. Są w niej rozwinięte horyzontalne piętra na głębokościach odpowiednio 15m, 30m, 50m. Maksymalna głębokość wynosi -67m.<p>
<p> Nurkowania w tej kopalni organizuje AQUA Kosice - <a class="navi" href="mailto:aqua.ke@nextra.sk">Vlado Konrad</a></p>
<p> Poniżej zamieszczono zdjęcia z tej sztolni wykonane przez czeskiego płetwonurka - <a class="navi" href="mailto:petr@vaverka.cz">Petr Vaverka</a>. <a class="navi" href="http://www.iwdcentre.com/dubnik/" target="_new">Jego strona internetowa</a>  </p>
<p align=center>
	<table>
		<tr>
			<td align=center>
				<img src="./img/slowacja_klein1.jpg" alt="Pod wodą, copyright Petr Vaverka" height=300 width=375></a><br>
				
			</td>
			<td align=center>
				<img src="./img/slowacja_klein2.jpg" alt="Pod wodą, copyright Petr Vaverka" height=300 width=375></a><br>
				
			</td>
		</tr>
<tr>
			<td align=center>
				<img src="./img/slowacja_klein5.jpg" alt="Pod wodą, copyright Petr Vaverka" height=300 width=375></a><br>
				
			</td>
			<td align=center>
				<img src="./img/slowacja_klein3.jpg" alt="Pod wodą, copyright Petr Vaverka" height=300 width=375></a><br>
				
			</td>
		</tr>

<tr>
			<td align=center>
				<img src="./img/slowacja_klein4.jpg" alt="Pod wodą, copyright Petr Vaverka" height=300 width=375></a><br>
				
			</td>
				</tr>


	</table>
</p>


<h3 align=right>informacja własna</h3>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>