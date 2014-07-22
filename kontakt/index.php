<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

	renderHead($bSubdir);
	renderMenu($bSubdir,8,false,'KONTAKT: GNJ (PNJ)');
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<H1>Kontakt</H1>

<H3>Z Grupa Nurków Jaskiniowych KTJ PZA kontaktować się można pod adresem: gnj / at / gnj.org.pl </H3>

<!-- 
<H3>Grupa Nurków Jaskiniowych KTJ PZA jest reprezentowana przez:</H3>
<H4><I>(Podkomisja Nurkowania Jaskiniowego)</I></H3>
<UL>
<LI><H2>Mirosław Kopertowski : m.kopertowski / at / post.pl</H2></LI>

<LI><H2>Dominik "Honzo" Graczyk : honzo / at / o2.pl</H2></LI>

<LI><H2>Rafał Górecki : rafal.gorecki / at / aquamatic.pl</H2></LI>
</UL>
 -->
<BR><BR>
<P align="left"><I>Aktualizacja serwisu Michał Plata: relic / at / poczta.onet.pl</I></P>

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
