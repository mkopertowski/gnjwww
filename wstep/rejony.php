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
	Rejony atrakcyjne dla nurkowania jaskiniowego
</h1>

<p>Rejonów, gdzie można uprawiać nurkowanie jaskiniowe jest stosunkowo niewiele. Najpopularniejsze są te miejsca, które nie wymagają żmudnego transportu sprzętu nurkowego przez suchą jaskinię. 
<ul>
<li>Na kontynencie amerykańskim najbardziej znane są jaskinie na Florydzie, gdzie można znaleźć kilometry zalanych, obszernych jaskiń (Wakulla Springs, Cathedral Canyon). W Meksyku na półwyspie Jukatan są zalane jaskinie zwane cenotes (NoHoh Na Chich) oraz głębokie zalane studnie (Nacimiento del Rio Mante, Zacaton). Atrakcyjne są również podmorskie Blue Holes na Wyspach Bahama (Lucayan Caverns, Benjamin's Blue Hole).
<li>W Europie rajem dla nurków jaskiniowych jest Francja (la Doux de Coly, Emergence du Ressel, Fontaine Vauclaise). W Szwajcarii jest Emergence de la Chaudanne, we Włoszech Gorgazzo. Ciekawym obiektem jest jaskinia lawowa Atlantida Tunel na Teneryfie (Wyspy Kanaryjskie). Można tu jeszcze wspomnieć o Hranickiej Propasti w Czechach i Divjim Jezierze w Słowenii.
<li>Na kontynencie afrykańskim słynne są podmorskie jeziora jak Bushmansgat i Dragon's Breath (Oddech Smoka).
<li>Na kontynencie azjatyckim najbardziej znane jest wywierzysko Mcziszta w Gruzji. Duży potencjał tkwi również w jaskiniach chińskich, tak przynajmniej wynika z rekonesansów nurków angielskich. 
<li>W Australii największą zalaną jaskinią jest Cocklebiddy.
</ul>
<p>Ponadto większość dużych jaskiń (kilkaset metrów głębokości) kończy się syfonami. Jednak przeprowadzenie tam akcji nurkowych  wymaga zaangażowania na długi okres czasu dużej liczby ludzi, którzy muszą przetransportować sprzęt nurkowy do syfonu i z powrotem. Prowadzi się tu jedynie działalność eksploracyjną, której wynikiem jest z reguły zwiększenie deniwelacji lub długości jaskini.</p>
<p>W Polsce jedynym rejonem, gdzie można uprawiać nurkowanie jaskiniowe są Tatry. Poza Tatrami można zanurzyć się jedynie w trzech jeziorkach jaskiniowych. Jednakże nawet w Tatrach nie można zanurkować w wywierzyskach. Nurkowania mogą odbywać się jedynie wewnątrz jaskiń, co wymaga długiego i żmudnego transportu. Najwięcej zalanych przestrzeni do nurkowania znajduje się w Jaskini Kasprowa Niżnia, Jaskini Bystrej, Jaskini Miętusiej, Jaskini Wielkiej Śnieżnej i Śnieżnej Studni.</p>

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>