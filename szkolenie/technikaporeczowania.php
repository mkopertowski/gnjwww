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
Technika poręczowania
</h1>
<p>Zalane korytarze poręczujemy rozwijając linkę z kołowrotka. Przed nurkowaniem linka musi być odpowiednio przygotowana. Należy umieścić na niej markery określające odległość oraz kierunek do wyjścia. Dobrym zwyczajem jest oznaczanie poręczówki w następujący sposób : 
<ul>
	<li class="normal">co 10 metrów marker z kawałka taśmy izolacyjnej z naniesioną odległością do powierzchni marker ten posiada strzałkę, lub jest przycięty w  kształcie  strzałki</li>
	<li class="normal">strzałka ta wskazuje kierunek powrotu na  powierzchnię</li>
	<li class="normal">w połowie pomiędzy markerami oznacza się flamastrem poręczówkę - pozwala to na precyzyjniejsze sporządzanie planów jaskiń.</li>                      
</ul>
</p>
<p>Pierwszy punkt zakładamy zawsze powyżej poziomu wody, w takim miejscu by nigdy nie mógł być zalany. Należy go solidnie przywiązać. Użycie gumki jest wykluczone. Przy poręczowaniu trzymamy kołowrotek w jednej ręce. Przyczepiamy go  sobie  zakładając  gumkę  na nadgarstek, tak aby w żadnej sytuacji nie strącić z nim kontaktu. Rączka  musi  być  tak skonstruowana,   aby   umożliwiała kontrolowanie obrotów bębna za pomocą jednego z palców. Dzięki temu poręczówka będzie prowadzona sztywno i będziemy mieli wyczucie kierunku. Najprostszym sposobem  stabilizowania  poręczówki  jest zakładanie gumek  na kamienie czy występy skalne, tak jak to  pokazano  na  rysunku. Gdy nie ma takiej możliwości  zostawia  się ciężarek ołowiany, który specjalnie w  tym  celu wzięliśmy. Jednak jest to o tyle niekorzystne, że zmienia  się nam pływalność. Jeśli dno korytarza jest piaszczyste, można  posłuzyć się aluminiowymi kątownikami podobnymi do śledzi od namiotów.  Długość  takiego śledzia  dobiera  się  w  zależności   od  sypkości dna, zdarzają się śledzie o długości 50 cm. Do ich wbijania może się czasem przydać młotek.</p>
<p>Poręczówkę należy układać tak, by zostawić jak najwięcej przestrzeni dla płynących wzdłuż niej płetwonurków. Musi być tak poprowadzona, żeby płetwonurek przy braku widoczności (np. zmącona woda, wzbudzony automat przeszkadzający w widzeniu, awaria maski nurkowej itp.) dzięki niej był w stanie sie wynurzyć na powierzchnię bez niepotrzebnego pokonywania ciasnot. Oznacza to również, że ciągłość poręczówki musi być zachowana w taki sposób, aby przy braku widoczności jedną ręką mozna było pokonywać punkty przymocowania poręczówki do ścian i kamieni - nie może zdażyć się sytuacja przyciskania poręczówki kamieniem, w celu stabilizacji.</p>
<p>Jeśli zakładamy możliwość korzstania z depozytów, miejsca ich pozostawiania powinny być zaporęczowane w taki sposób, aby ciężar butli, lub operacje podczas pozostawiania / pobierania depozytu nie naruszyły poręczówki.</p>
<p>Gdy w jaskini występują jeziorka, do których płetwonurek może się wynurzyć, należy zadbać o możliwość znalezienia poręczówki z powierzchni jeziorka. W tym celu warto zainstalować bojkę na powierzchni (np. pusta butelka), połączoną z poręczówką biegnącą gdzieś w jeziorku. Zanurzając się przy takiej boi płetwonurek powinien też bez problemu wiedzieć, w którym kierunku poręczówki ma dalej płynąć.</p>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>