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
<BR>

<H3>Grupa Nurków Jaskiniowych PZA jest reprezentowana przez:</H3>
<H3><I>(Podkomisja Nurkowania Jaskiniowego)</I></H3>
<UL>
<LI><H2>Mirosław Kopertowski (SGW)</H2></LI>
<LI><H2>Rafał Górecki (SGW)</H2></LI>
<LI><H2>Arkadiusz Nowak (SW)</H2></LI>
</UL>
<H3>Z Podkomisja Nurkowania Jaskiniowego można się kontkatować piszac na pnj / at / gnj.org.pl</H3>

<BR><BR>
<H3>Prowadzenie serwisu: Lucyna Cieślik gnj / at / gnj.org.pl</H3>

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
