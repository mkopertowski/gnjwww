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
	Nurkowanie w Kasprowej Niżniej
</h1>

<p>Pod koniec sezonu zimowego 96 odbyła się akcja nurkowa w jaskini Kasprowa Niżnia, zorganizowana przez Sekcję Grotołazów Wrocław. Wzięli w niej udział : Wiktor Bolek- kierownik, płetwonurek oraz koledzy, którzy pomogli w transporcie : Krzysztof Jabłoński, Marcin Fetter, Arkadiusz Maciuk, Jacek Buraczewski.
<p>Podczas akcji trwającej 1 godz. 45 min. pokonano wszystkie odkryte dotąd syfony. W Syfonie Warszawiaków przeprowadzono eksplorację górnego piętra, które jest określane w literaturze jako syfony VI, VII, VIII. Cały ten ciąg był zaporęczowany czerwoną, podwójną liną dynamiczną fi 10. Na początku tego syfonu przywiązałem jednak swoją poręczówkę, aby uniknąć niespodzianek, których mogłaby przysporzyć lina zostawiona tam prawie dwadzieścia lat wcześniej. Po około 20 metrach dopłynąłem na przodek. Syfon kontynuował się na południowy wschód. Miał dosyć skomplikowany charakter, z dużą ilością szczegółów topograficznych, których nie sposób zapamiętać. Składał się z komór połączonych prożkami i pochylniami. Maksymalna głębokość wyniosła -8m. Przez cały czas skała była lita, bez żadnych osadów, co gwarantowało doskonałą widoczność. Eksplorację zakończyłem na skalnej platformie na głębokości 1,5 m w odległości 55 metrów od początkowego jeziorka. Z tego 30 m należy uznać za teren dziewiczy. Dzięki dużej przejrzystości wody można było dostrzec z tej platformy dalszy ciąg syfonu, opadający lekko w dół w kierunku SE. 
<p>Największą trudność podczas całej akcji nurkowej sprawiało zakładanie i zdejmowanie płetw przy przechodzeniu suchych odcinków: w Sali Kaskad i w Kominie Kaskaderów. Przejście tego ostatniego w sprzęcie nurkowym, który w suchej jaskini był transportowany przez czterech silnych grotołazów, też było swoistym przeżyciem. 
<p>Cała akcja jaskiniowa trwała około 10 godzin.

<h3 align=right>Wiktor Bolek</h3>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>