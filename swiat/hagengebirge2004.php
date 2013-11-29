<?php

$bSubdir = true;
$sInclude = './_php/page.php';
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
	Hagengebirge 2004, Podwodna eksploracja w Jaskini Kasztanowej
</h1>

<p> Na prze³omie lipca i sierpnia goœcinnie wzi¹³em udzia³ w wyprawie eksploracyjnej, która odby³a siê pod kierownictwem Marka Wierzbowskiego w masywie <b>Hagengebirge</b>. Jednym z celów wyprawy by³o zbadanie zalanych partii w <b>Jaskini Kasztanowej</b> i sprawdzenie mo¿liwoœci eksploracyjnych za stref¹ syfonów, na poziomie -270m.</p>

<p>W sk³ad zespo³u nurkowego wchodzi³ <b>Micha³ Gignal</b> (Sekcja Groto³azów Wroc³aw) oraz ni¿ej podpisany. Niestety, ju¿ podczas mojego nurkowania rekonesansowego, problem nurkowy zosta³ zamkniêty. Uda³o mi siê pokonaæ pierwszy z syfonów (-6m g³êbokoœci, 20m d³ugoœci) i osi¹gn¹æ jeziorko, do którego w  zesz³ym roku dotarto wspinaj¹c siê w meandrach. W drugim z syfonów osi¹gn¹³em prawdopodobnie przegiêcie. Panuj¹ce ciasnoty i mu³ uniemo¿liwi³y przedostanie siê dalej. W wyniku wniosków z mojego rekonesansu, uznaliœmy, ¿e podjêcie próby przedostania siê przez zamulone przewê¿enie w drugim syfonie jest zbyt niebezpieczne. Ponadto fatalna pogoda utrudniaj¹ca transport sprzêtu na powierzchni oraz braku czasu, spowodowa³y, i¿ uznaliœmy, ¿e kolejne nurkowania by³yby trudne lub niemo¿liwe do przeprowadzenia i niecelowe.</p>
<p>Syfony wraz z jeziorkiem u³o¿one s¹ na jednej szczelinie. Dno syfonów jest silnie zamulone. Niewielkie przep³ywy powoduj¹, ¿e pok³ady mu³u tworz¹ przewê¿enia uniemo¿liwiaj¹ce przedostanie siê dalej. Nale¿y jednak spodziewaæ siê, ¿e strefa syfonów, le¿¹cych na tak niewielkiej g³êbokoœci, ma charakter lokalny, a za ni¹ wystêpuj¹ suche ci¹gi. Przedostanie siê przez syfony, poza ow¹ strefê, pozwoli³oby mieæ w przysz³oœci niezbit¹ pewnoœæ o ci¹g³oœci systemu w przypadku dostania siê do niej od drugiej strony, z innego otworu.</p>
<p>Serdeczne podziêkowania dla cz³onków wyprawy za transport i retransport sprzêtu oraz pomoc w jaskini - bez Was, nasze nurkowanie nie by³oby mo¿liwe.<p>
<p>Wyeksplorowany syfon nazwany zosta³ "<b>Syfonem naszych dzieci</b>" - zarówno Micha³ jak i ja zostaniemy niebawem ojcami.

<h3 align=right>Piotr Kêpkiewicz (Kempek)</h3>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>