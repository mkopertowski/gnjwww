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
	Definicja nurkowania w zalanych podziemiach.
</h1>

<p>Nurkowanie w jaskiniach (a także w zalanych podziemiach powstałych w sposób sztuczny, np. w sztolniach) polega na pokonywaniu korytarzy jaskiniowych, które są wypełnione wodą po strop. Ogólniej - można określić jako nurkowanie w zalanych podziemiach, które obejmuje również nurkowanie w obiektach zamkniętych powstałych w wyniku działalności człowieka.</p>
<ol>
	<li>dzieli się ze względu na umiejscowienie zalanego korytarza.
		<ul>
			<li>Nurkowanie w źródłach - do zalanego korytarza można dostać się bezpośrednio z powierzchni ziemi.</li>
			<li>Nurkowanie w głębi jaskini - dotarcie do zalanego korytarza wymaga pokonania suchego fragmentu jaskini.</li>
		</ul>
	</li>
	<li>dzieli się także ze względu na cel.
		<ul>
			<li>Pokonywanie syfonów, jako przeszkód wodnych, w celu eksploracji suchych partii za syfonem.</li>
			<li>Pokonywanie (eksploracja) zalanych przestrzeni jako takich.</li>
		</ul>
	</li>
	<p>Powyższy podział określa stopień trudności logistycznych przy przeprowadzaniu danego nurkowania. Nurkowanie w głębi jaskini wymaga przetransportowania sprzętu nurkowego przez suche partie jaskini. Eksploracja suchych ciągów za syfonem wymaga przetransportowania sprzętu jaskiniowego przez zalany odcinek, w stanie pozwalającym na jego dalsze użycie.</p>
	<li>dzieli się także ze względu na używany sprzęt.
		<ul>
			<li>Nurkowanie z zatrzymanym oddechem. Dotyczy pokonywania krótkich i płytkich syfonów.</li>
			<li>Nurkowanie z automatem o obiegu otwartym. W chwili obecnej stanowi podstawowy sposób pokonywania zalanych korytarzy.</li>
			<li>Nurkowanie z aparatem o obiegu zamkniętym. Ma zastosowanie przy bardzo długich lub głębokich nurkowaniach, które trwają kilkanaście godzin.</li>
			<li>Nurkowanie w skafandrze klasycznym. Dotyczyło krótkich penetracji i ma tylko znaczenie historyczne.</li>
		</ul>
	</li>
</ol>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>