<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

	renderHead($bSubdir);
	renderMenu($bSubdir,1,true);
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
	Rekordowe osiągnięcia.
</h1>

<p>Najdłuższe nurkowanie w pojedynczym syfonie przeprowadzili Michael Waldbrenner i Reinhard
Buchaly  w La Doux de Coly na odległość ponad 5000m oraz Jarrod Jablonski i Todd Kincaid w Manatee Springs 3700 m. Najgłębsze nurkowania odbyły się w Bushmansgat, gdzie Nuno Gomes zanurzył się na głębokość -283m, oraz w Zacatonie, gdzie Jim Bowden osiągnął -282m. 
<p>W Polsce najdłuższym syfonem jest Syfon Warszawiaków w Jaskini Kasprowej Niżniej (Piąty Syfon) - ma 330m (Krzysztof Starnawski). Najgłębszy zalany korytarz zaczyna się w południowym jeziorku na dnie Ciasnych Kominów w Jaskini Miętusiej i jego głębokość wynosi 70m (Wiktor Bolek).

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>