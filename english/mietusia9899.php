<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

	renderHead($bSubdir);
	renderMenu($bSubdir,10,true);
	renderGallery(true,true);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
	The sumps in Mietusia Cave
</h1>

<p>In Mietusia Cave in Tatra Mountains, there are the deepest sumps in Poland. Approximately 200m from the entrance, there are two almost parallel sequences of pits, called Great and Narrow Chimneys (Wielkie Kominy, Ciasne Kominy). At their bottoms are clear, spacious lakes - a challenge for cave divers. Although these sumps were so close, no connection between them was known.</p>
<p>The vertical part of the sump in Great Chimneys was explored in early 70's to a depth of -30m. In the middle of 90's Krzysztof Starnawski explored a horizontal collector at the bottom of this pit. He also discovered a western part of the sump which starts at -12m and is more than 100m long.</p>
<p>The sumps at the bottom of Narrow Chimneys were explored mainly by Wiktor Bolek and Norbert Ziober, during three last years. Wiktor explored southern branch of the sump to the depth of -63m. Norbert explored North-Western part, but no connection was found.</p>

<p align=center>
	<a href="./img/ciasnekominy_plan.gif" target="_new">
		<img src="./img/ciasnekominy_plan_small.gif" alt="Plan of Narrow Chimneys sumps" height=259 width=250></a><br>
	<i>Plan of Narrow Chimneys sumps</i>
</p>

<p>The last expedition was carried out in December 1998. Norbert dived in Northern lake and explored 90m long corridor. There he eventually found a line from Great Chimneys at -28m in the horizontal collector. On the way back the water got muddy and Norbert find difficult to pass a restriction. He tried several times. At last he turned his back down and stretched his arm as much as possible. The following the line he managed to get through.</p>
<p>Wiktor dived in southern lake. He managed to submerge to -70m, 135 m from the surface. He used trimix as a bottom mix and oxygen for decompression, which lasted for 50 minutes.</p>
<p>After these dives the deepest point in Polish sump was reached and the long awaited connection between Narrow and Great Chimneys was eventually found.</p>


<h3 align=right>Wiktor Bolek</h3>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>