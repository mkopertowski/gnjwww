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
	Planowanie ilości mieszanek oddechowych
</h1>

<p>Poniższe rozważania dotyczą oddychania powietrzem. Planujemy, że podczas nurkowania przeznaczymy taka sama ilość powietrza na penetrację, powrót i rezerwę. Taki podział określa się mianem reguły jednej trzeciej. Płetwonurek musi bezwzględnie zakończyć penetracje, gdy ciśnienie w butli osiągnie 2/3 początkowej wartości. Nie wolno zapomnieć o rezerwie ostatnich 20 bar, gdyż ich wykorzystanie jest wątpliwe (wzrastają opory oddechowe, a w niektórych automatach występuje ciągły wypływ, np. Poseidon Jetstream). O tę wartość należy pomniejszyć ciśnienie początkowe przed zastosowaniem reguły 1/3.      
<p>Podczas nurkowania   powietrze    musi być  tak rozmieszczone, aby  bezpieczna  rezerwa  była  dostępna   w   przypadku awarii dowolnego elementu w jednym z zestawów. Wobec tego użycie pojedyńczego zestawu butlowego jest wykluczone.  Bezwzględnie należy oddychać  naprzemiennie z  każdego  z automatów (zużywając po ok. 10 bar za każdym razem).  Pozwala  to rozdzielić  zużycie  powietrza  miedzy  butle  i  na  bieżąco sprawdzać poprawność działania automatów.</p>
<p><b>Przykład :</b></p>
<p>Awaria  automatu  nastąpiła  w  najbardziej odległym  miejscu  podczas  penetracji. Przed wyruszeniem mieliśmy dwie butle 9 litrowe napełnione do 200 bar.</p>
<ul>
	<li class="normal">początkowa ilość powietrza : <b>18 x 200 = 3 600 lu</b>
	<li class="normal">rezerwa koncowa : <b>18 x 20 = 360 lu</b>
	<li class="normal">ilość powietrza na penetracje : <b>(3 600 - 360) / 3 = 1080 lu</b></li>
</ul>
<p>Ilość powietrza potrzebnego  na  drogę  powrotna  jest  mniej więcej równa ilości zużytej podczas penetracji, czyli <b>1080 lu.</b> Jeżeli awaria  wydarzy  się  w  najodleglejszym  punkcie,  to zawsze zostanie 2/3  powietrza  z  drugiej  butli  i  rezerwa końcowa, czyli razem : <b>1 260 lu = 1 800 - ( 1 080 / 2) lu.</b></p>
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>