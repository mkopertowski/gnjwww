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
	Hagengebirge 2004, Podwodna eksploracja w Jaskini Kasztanowej
</h1>

<p> Na przełomie lipca i sierpnia gościnnie wziąłem udział w wyprawie eksploracyjnej, która odbyła się pod kierownictwem Marka Wierzbowskiego w masywie <b>Hagengebirge</b>. Jednym z celów wyprawy było zbadanie zalanych partii w <b>Jaskini Kasztanowej</b> i sprawdzenie możliwości eksploracyjnych za strefą syfonów, na poziomie -270m.</p>

<p>W skład zespołu nurkowego wchodził <b>Michał Gignal</b> (Sekcja Grotołazów Wrocław) oraz niżej podpisany. Niestety, już podczas mojego nurkowania rekonesansowego, problem nurkowy został zamknięty. Udało mi się pokonać pierwszy z syfonów (-6m głębokości, 20m długości) i osiągnąć jeziorko, do którego w  zeszłym roku dotarto wspinając się w meandrach. W drugim z syfonów osiągnąłem prawdopodobnie przegięcie. Panujące ciasnoty i muł uniemożliwiły przedostanie się dalej. W wyniku wniosków z mojego rekonesansu, uznaliśmy, że podjęcie próby przedostania się przez zamulone przewężenie w drugim syfonie jest zbyt niebezpieczne. Ponadto fatalna pogoda utrudniająca transport sprzętu na powierzchni oraz braku czasu, spowodowały, iż uznaliśmy, że kolejne nurkowania byłyby trudne lub niemożliwe do przeprowadzenia i niecelowe.</p>
<p>Syfony wraz z jeziorkiem ułożone są na jednej szczelinie. Dno syfonów jest silnie zamulone. Niewielkie przepływy powodują, że pokłady mułu tworzą przewężenia uniemożliwiające przedostanie się dalej. Należy jednak spodziewać się, że strefa syfonów, leżących na tak niewielkiej głębokości, ma charakter lokalny, a za nią występują suche ciągi. Przedostanie się przez syfony, poza ową strefę, pozwoliłoby mieć w przyszłości niezbitą pewność o ciągłości systemu w przypadku dostania się do niej od drugiej strony, z innego otworu.</p>
<p>Serdeczne podziękowania dla członków wyprawy za transport i retransport sprzętu oraz pomoc w jaskini - bez Was, nasze nurkowanie nie byłoby możliwe.<p>
<p>Wyeksplorowany syfon nazwany został "<b>Syfonem naszych dzieci</b>" - zarówno Michał jak i ja zostaniemy niebawem ojcami.

<h3 align=right>Piotr Kępkiewicz (Kempek)</h3>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>