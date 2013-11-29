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
	Trudności nurkowania jaskiniowego
</h1>

<p>Specyfika nurkowania w zalanych podziemiach wynika z charakteru środowiska, które jest połączeniem podziemnych korytarzy i podwodnych przestrzeni. Te czynniki determinują niebezpieczeństwa środowiska, którym trzeba przeciwstawić odpowiedni sprzęt i umiejętności. Za najważniejsze niebezpieczeństwa uważa się :</p>
<UL>
	<li>Brak możliwości bezpośredniego wynurzenia się na 
  powierzchnię z zalanego korytarza. 
  
	<li>Brak światła w zalanym korytarzu. 
  
	<li>Ograniczenie czasu przebywania pod wodą przez ilość 
  zabranego powietrza. 
  
	<li>Trudności z orientacją w zalanym korytarzu ze względu 
  na łatwe mącenie się wody. 
  
	<li>Prąd wody utrudnia poruszanie się. 
  
	<li>Korytarz narzuca profil nurkowania, który nie zawsze 
  jest korzystny ze względu na dekompresję. 
  <LI>Ciasne przestrzenie sprzyjają uszkodzeniu sprzętu podczas 
nurkowania.</LI></UL>
<P>Powyższe problemy wiążą się z często z poziomem 
wyszkolenia nurkowego - wiedza nurkowa jest równie ważna, co odpowiednio 
skopmletowany i przetestowany ekwipunek.</P>

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>