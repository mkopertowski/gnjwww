<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

	renderHead($bSubdir);
	renderMenu($bSubdir,3,true);
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
	Przygotowanie sprzętu do nurkowania w jaskini
</h1>
<p>Ze względu na fakt, że nurkując w podziemiach nie można natychmiast wynurzyć się, każdy element aparatu umożliwiający oddychanie musi być zdublowany. Podstawowym wyposażeniem każdego płetwonurka jaskiniowego są: dwie oddzielne butle o jednakowych pojemnościach, dwa automaty o stopniach rozdzielonych z manometrami. W przypadku awarii jednego elementu w aparacie (np. zaworu w butli) drugi niezależny zestaw powinien wystarczyć na powrót. To wymaganie zostało sformułowane przez Komisje Nurkowania Jaskiniowego Międzynarodowej Unii Speleologii i wynika z analizy setek wypadków nurkowych. Zastosowanie pojedynczej butli z tzw. złączką "speleo" i dwoma automatami jest niedopuszczalne, gdyż nie jest spełnione wymaganie co do zdublowania całego układu.</p>
<p>Zawory butli powinny posiadać osłony, które najlepiej jest wykonać z grubej nierdzewnej blachy. Pozwala to uniknąć przypadkowego uszkodzenia bądź odkręcenia zaworu w czasie transportu i samego nurkowania.</p>
<p>Butle mogą być zamocowane albo standardowo na plecach bądź po bokach w zależności od charakteru przewidywanego nurkowania. Ten drugi rodzaj mocowania ułatwia przechodzenie ciasnych miejsc. Wtedy butle w połowie swej wysokości przypięte do pasa biodrowego a osłona zaworów do pętli piersiowej. W ten sposób butla jest zamocowana w miarę stabilnie wzdłuż ciała a zawór jest chroniony pod pachami płetwonurka.</p>
<p>Drugie stopnie automatów powinny być przypięte do gumowej linki założonej na szyję. Zapobiega to zaplątywaniu się automatów i ułatwia ich odnajdowanie w stresowych sytuacjach. Musimy zapewnić sobie możliwość łatwego odpięcia automatu od gumki. Można zastosować małe karabinki lub zatrzaskowe klamerki.</p>
<p>Istotnym zagadnieniem jest wyrównywanie pływalności. Najczęściej wykorzystuje się do tego kamizelkę typu jacket. Kamizelka typu chomonto zabiera zbyt dużo przestrzeni z przodu płetwonurka i utrudnia manewrowanie sprzętem. Kamizelkę należy również zabierać do kombinezonu suchego, aby w przypadku jego rozdarcia nie utrącić zdolności do kontrolowania pływalności. W ciasnych jaskiniach, gdzie użycie jacketu jest niepraktyczne można stosować inne rozwiązania. Jednym z nich jest szczelny worek zakładany na plecy pod zestaw butlowy. Montuje się do niego inflator i zawory nadmiarowe. Taka kamizelka nie zwiększa oporów ruchu płetwonurka. Modyfikacja tego pomysłu jest przyklejenie na plecach kombinezonu drugiej warstwy neoprenu, przez co uzyskuje się również określona przestrzeń wypornościową.</p>
<p>Kolejnym istotnym elementem wyposażenia płetwonurka jaskiniowego jest oświetlenie. Temat ten reprezentujemy na osobnej stronie. [<a class="navismall" href="./latarki.php">Więcej o latarkach...</a>]</p>

<p>Niezbędnym przyrządem pomiarowym jest kompas. Rejestrowanie azymutów znacznie ułatwia orientacje, a w przypadku zgubienia poręczowki pozwala na określenie kierunku powrotu. Gdy przebieg korytarza jest skomplikowany, to warto zabrać plastykowa tabliczkę z ołówkiem do notowania azymutów i informacji o charakterze korytarza.</p>
<p>Zabieramy również komputer nurkowy bądź zestaw: głębokościomierz, zegarek i tabele dekompresyjne. Jest to taki sam sprzęt, jaki używa się na wodach otwartych. Warto jednak mięć dwa rożne głębokościomierze i zegarki. W przypadku awarii jednego z nich nie bedziemy pozbawieni ważnych informacji (np. komputer może się nie włączyć).</p>
<p>Istotna zmiana w stosunku do standardowego wyposażenia jest to, że zamiast noża używa się ogrodniczego sekatorka. Do poręczowania syfonów mogą być użyte rożnego rodzaju linki nie wyłączając kabla telefonicznego. Sekatorek jest takim narzędziem, które pozwala na przecięcie ruchem jednej ręki dowolnej poręczówki. Wykonanie tej samej operacji za pomocą noża jest o wiele bardziej kłopotliwe. Sekatorek umieszczamy w pochwie po wewnętrznej stronie przedramienia, tak aby można go było wyciągnąć za pomocą jednej ręki.</p>
<p>Poręczówkę pod wodą transportujemy na kołowrotkach. Istnieje wiele rodzajów konstrukcji kołowrotków. Kołowrotek powinien zapewniać możliwość nawijania węzłów znajdujących się na linie, blokowania bębna, zapobiegać spadaniu luźnych zwojów.</p>
<p>Do przyczepiania i mocowania rożnego rodzaju elementów wyposażenia wykorzystuje się gumki uzyskane z pocięcia dętek samochodowych. Służą one miedzy innymi do zabezpieczania płetw w przypadku zerwania paska. Płetwę przywiązuje się sznurkiem do gumki, którą z kolei zakłada się na nogę. Te gumki pozwalają również na wygodny transport płetw przy pokonywaniu suchych odcinków miedzy syfonami. Gumkę podciąga się na wysokość uda i wkłada się pod nią pióro płetwy. Można w ten sposób iść mając ręce wolne.</p>
<!--============================= CONTENTS END ==========================================-->
<?php
	renderBottom($bSubdir);
?>