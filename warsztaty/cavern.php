<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

	renderHead($bSubdir);
	renderMenu($bSubdir,4,true);
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
	Certyfikat NAUI Cavern Diver
</h1>
<h2></h2>
	
Kurs nurkowania w grotach NAUI Cavern Diver to kurs wstępnej eksploracji jaskiń. Ukończenie go zapewni nurkowi opanowanie umiejętności oraz zdobycie wiedzy niezbędnych do bezpiecznego nurkowania w grotach. W trakcie szkolenia uczestnicy uczą się korzystać ze specjalistycznego sprzętu stosowanego w nurkowaniach jaskiniowych oraz poznają procedury obowiązujące w tym typie nurkowań.
<br><br>
 
Podczas kursu dowiesz się m.in.: <br>
•	Jak umiejętnie posługiwać się kołowrotkiem i specjalistycznym sprzętem jaskiniowym<br>
•	Jak pływać efektywnie by nie wzbudzać osadu<br>
•	Jak komunikować się z partnerem w zerowej widoczności<br>
•	Jak działać w sytuacji awaryjnej typu zepsute światło, zgubiony nurek, zgubiona lina<br>
•	Jakie są zasady bezpieczeństwa w środowisku jaskiniowym<br>
•	Jak zaplanować i przeprowadzić bezpieczne nurkowanie w przestrzeni zamkniętej<br>
•	Jakie są niebezpieczeństwa związane z nurkowaniem jaskiniowym<br>
•	Jakie są rodzaje jaskiń i elementy ich budowy<br>
•	Jakie są warunki panujące w jaskiniach<br>
•	O analizie możliwych zagrożeń i wypadków<br>
•	O sposobach rozwiązywania problemów<br><br>
Wymagania:<br>
•	ukończone 18 lat<br>
•	certyfikat płetwonurka zaawansowanego (ASD, AOWD, P2 lub odpowiednik)<br>
•	aktualne zaświadczenie lekarskie o braku przeciwwskazań do nurkowania<br>

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
