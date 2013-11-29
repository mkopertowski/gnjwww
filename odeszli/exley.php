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
	Sheck Exley - odszedł najlepszy...
</h1>
<p>Rok 1994 przyniósł śmierć dwóch wybitnych płetwonurków jaskiniowych : <b>Shecka Exleya</b> (USA) i <b>Iana Rollanda</b> (GB).
<p>Sheck Exley był uważany za przodującego płetwonurka, nie tylko w Stanach, ale i na całym świecie. Jego osiągnięcia i rola, jaką odegrał w rozwoju techniki podziemnego nurkowania, są często porównywane z dorobkiem Reinholda Messnera w himalaizmie. Przeprowadził rekordowe nurkowanie na głębokość -267m w wywierzysku Nacimiento del Rio Mante w Meksyku i był jednym z dwu ludzi na świecie (oprócz Jochena Hasenmayera), ktorzy przekroczyli głebokość 200m w nurkowaniu swobodnym w jaskini. 
<p>Przez wiele lat odgrywał wiodącą rolę w eksploracji takich podwodnych systemów jak: Cathedral Canyon, Wakulla Springs, Manatee Springs. W momencie, gdy zorientował się, jak wielkie możliwości kryje w sobie Cathedral Canyon, nabył cały przylegający teren i przeprowadził się do domu leżącego nieopodal samego wywierzyska. W ten sposób mógł kontynuować eksplorację bezpośrednio na swoim własnym podwórku! W 1990 roku wykonał tam rekordowe nurkowanie na świecie, osiągając odleglość 3334 m od bazy, w jednym zalanym odcinku. Rekord ten został później pobity przez O. Islera w La Doux de Coly. W Wakulla Springs był pionierem nurkowania na mieszankach. Ten wielokilometrowy zalany system rozwija się głównie na głębokości 80-90m, co stwarza olbrzymie problemy ze względu na zatrucie tlenem i narkozę azotową. 
<p>Jak do tej pory nie znamy bliższych szczegółów wypadku, gdyż wiadomości zza oceanu docierają z dużym opóźnieniem.

<h3 align=right>Tłumaczenie - Wiktor Bolek</h3>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>