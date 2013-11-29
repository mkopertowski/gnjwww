<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

	renderHead($bSubdir);
	renderMenu($bSubdir,6,true);
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
	Bihor - luty 2000
</h1>

<p>W lutym 2000 odbyła się wyprawa w masyw Bihor w Rumunii. Wzięło w niej udział czterech nurków z SG Wrocław: Wiktor Bolek, Rafał Górecki, Michał Stajszczyk i Norbert Ziober oraz trzech grotołazów z KKTJ: Stanisław Kotarba, Jerzy Kierod i Wojciech Sieprawski. Zespół z Krakowa zwiedzał piękną pod względem nacieków i rozmiarów jaskinię Zgurasti. 

<p align=center>
	<img src="./img/rumunia00_2.jpg" alt="Transport sprzętu saniami" height=363 width=500><br>
	<i>Transport sprzętu saniami</i>
</p>

<p>Natomiast nurkowie działali w wywierzysku Cotetul Dobrostilor. To miejsce ma dosyć złożony profil. Najpierw trzeba zanurzyć się na -50m potem wynurzyć do -20, a potem ponownie zanurzyć się do na -67, gdzie zakończono eksplorację. Poznany odcinek ma około 300m długości. Nurkowanie przy takim profilu wymagało zastosowania odpowiednich gazów oddechowych nitroxu i trimixu. Korzystając z dwu butli 18l i depozytu 8l i trzech butli dekompresyjnych udało się przepłynąć odcinek 240m (Wiktor Bolek). 

<p align=center>
	<img src="./img/rumunia00_3.jpg" alt="Nurkowanie w Cotecul Dobrestilor" height=367 width=500><br>
	<i>Nurkowanie w Cotecul Dobrestilor</i>
</p>

<p>Okazało się, że jeziorko wstępne jest zamieszkiwane przez zwierzęta. Dwa okazy zostały złowione do specjalnie przygotowanych probówek. Jeden z okazów był Niphargusem, a drugiego nikt nie potrafił oznaczyć. Był on ok. dwa razy większy od Niphargusa i przypominał swoim wyglądem szczypawkę. Te okazy mają być przesłane na Uniwersytet w Bukareszcie w celu dalszych badań.</p>

<p align=center>
	<img src="./img/rumunia00_1.jpg" alt="Próbki z nieznanymi zwierzętami" height=354 width=400><br>
	<i>Próbki z nieznanymi zwierzętami</i>
</p>

<h3 align=right>Wiktor Bolek</h3>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>