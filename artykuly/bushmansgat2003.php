<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

	renderHead($bSubdir);
	renderMenu($bSubdir,7,true);
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
	Rekordowe nurkowanie w Bushmansgat
</h1>
<p>W dniu 11 września 2003 Leszek Czarnecki
ustanowił nowy rekord Polski w nurkowaniu jaskiniowym, zanurzając się na
głębokość 194 m w jaskini Boesmansgat (Bushmansgat) w RPA (1560 m n.p.m.).
</p>
<p>Dekompresja Leszka Czarneckiego trwała 4 h 48 min przy temperaturze wody 16
st. C. 
</p>
<p>Jaskinia Boesmansgat (Bushmansgat) została wybrana nieprzypadkowo, jest to
ta sama jaskinia, w której Nuno Gomes ustanowił rekord świata zanurzając się
na głębokość 283 m. Drugi na liście rekordzistów świata plasuje się Jim
Bowden, który zanurzył się na 282 m w Zacatonie.
</p>
<br><br>
<h3 align=right>Na podstawie : www.nurkowanie.v.pl</h3>

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>