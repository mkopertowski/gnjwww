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
<!--============================= CONTENTS START ==========================================--><h1>
	Międzyrzecki Rejon Umocniony
</h1>

<p>MRU stanowi bardzo ciekawy obiekt architektury militarnej. Na rozległy pas umocnień składały się potężne bunkry z podziemnymi magazynami i koszarami połączone korytarzami z osią systemu, podziemną Główna Drogą Ruchu. Korytarze wyposażone były w szyny umożliwiające przewóz zaopatrzenia kolejką. MRU do dziś zadziwia i intryguje swoją historią, rozmiarami, i stanem zachowania, z resztą jak każdy nieużywany obiekt militarny. Dodatkowo wrażenia te potęguje to, że w czasie i po wojnie MRU przechodził we władanie różnych armii, a wiele informacji nie znajduje wyjaśnienia.
</p>

<p>Zgromadzone informacje pozwalają sądzić, że partie, położone za stacją kolejki Nordpol znajdują się pod wodą. Korytarz powoli schodzi w dół, aż lustro wody sięga stropu. Przebieg ich jest znany, zgodny z zachowanymi planami MRU. Łączna ich długość wynosi ponad 500 m, a głębokości są bardzo małe. Dokładny czas ani okoliczności zalania nie są znane.
</p>

<p>Zalane korytarze byłyby atrakcyjne do nurkowania jaskiniowego, jednak kompleks MRU jest obecnie rezerwatem nietoperzy, swobodny dostęp do niego nie jest możliwy.
</p>

<br><br>
<h3 align=right>Andrzej Szerszeń</h3>

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>