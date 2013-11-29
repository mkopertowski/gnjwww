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
	 Wykorzystanie depozytów
</h1>
<p>Jeśli miejsce, do którego chcemy dopłynąć w jaskini, wymaga zużycia&nbsp;wiekszej niż wynika to z reguły 1/3 dla zestawu głównego ilości gazów oddechowych, należy wykorzystać dodatkowe butle z czynnikiem oddechowym, tzw. depozyty.<p>
<p>Założeniem wszelkich symulacji zużycia mieszanek oddechowych są awarie poszczególnych zestawów butlowych w kluczowych punktach profilu nurkowego. Do takich punktów zaliczane są :
<ul>
	<li class="normal">osiągnięcie najdalszego punktu w jaskini, do którego chcemy dopłynąć</li>
	<li class="normal">rozpoczęcie / zakończenie oddychania z zestawu głównego i depozytu</li>
	<li class="normal">punkty zmieniania mieszanek oddechowych (np. osiągnięcie głębokości 6 metrów celem dekompresji z użyciem tlenu)</li> 
</ul>

<p align=center>
	<img src="./img/depozyty_1.jpg" alt="Nurek z depozytami zebranymi w jaskini" height=500 width=334><br>
	<i>Nurek z depozytami zebranymi w jaskini</i>
</p>

<p>W najprostszym przypadku wykorzystuje się jedną butlę depozytową. Załóżmy, że czynnikiem oddechowym w zestawie głównym i w butli depozytowej będzie powietrze. Pewną zasadą jest to, że zestaw główny jest używany w najdalszych partiach jaskini, a w partiach bliższych otworowi - używana jest butla depozytowa.</p>
<P>Dodatkowe powietrze z depozytu wykorzystuje się następująco : 40% na penetracje, 40% na powrót i 20% w rezerwie. Butla depozytowa nie może być zbyt duża. Jej wielkość wynika z zasady, ze 1/3 powietrza głównego (rezerwa główna) musi być większa od 40% depozytu. Podczas penetracji najpierw oddychamy z butli depozytowej i zostawiamy ją w momencie, gdy zużyjemy 40% powietrza. Na zostawienie depozytu należy wybrać takie miejsce na spągu gdzie nie ma osądów. Butle należy położyć na dnie i przypiąć do poręczówki karabinkiem. Jeżeli poręczówka biegnie nad dnem to używamy krótkiej linki łączącej butle z karabinkiem. Nie wolno wieszać butli na poręczówce. Przed opuszczeniem depozytu należy zakręcić zawór i zostawić automat z tej strony, z której będziemy potem wracać. Dobrze jest wpiąć drugi stopień karabinkiem do poręczówki, aby w sytuacji awaryjnej można było reką natrafić na niego, nie tracąc kontaktu z poręczówką.</p>

<p align=center>
	<img src="./img/depozyty_2.jpg" alt="Małe butle depozytowe używane w ciasnych jaskiniach" height=363 width=500><br>
	<i>Małe butle depozytowe używane w ciasnych jaskiniach</i>
</p>

<p>Użycie butli depozytowych prowadzi zwykle do długich nurkowań wymagających dekompresji. Stąd warto przewidzieć kolejna butle na dekompresję. W takim przypadku nieodzowne jest także przeprowadzenie szeregu symulacji zużycia różnych mieszanek oddechowych w zależności od tego, który zestaw butlowy będzie niesprawny. Należy być przygotowanym na wszelkie konfiguracje, jeśli chodzi o awarie zestawu głównego i wszystkich depozytów. Do takich symulacji najlepiej używać specjalistycznego oprogramowania.</p>
<!--============================= CONTENTS END ==========================================-->
<?php
	renderBottom($bSubdir);
?>