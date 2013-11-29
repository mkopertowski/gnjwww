<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

	renderHead($bSubdir);
	renderMenu($bSubdir,14,false,'FORMALNOŚCI');
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
Odpowiedzialność w nurkowaniu
</h1>

<h2>
Odpowiedzialność nurkującego
</h2>

Na imprezach zorganizowanych i kursach za poczynania uczestników odpowiada organizator.<br><br>

W przypadku wyjazdów towarzyskich często organizatora (kierownika) nie ma. Dzieje się tak wtedy, gdy w wyjeździe uczestniczą osoby o odpowiednim doświadczeniu, umiejętnościach, celach sportowych, które posiadają własny sprzęt, które zdają sobie sprawę z niebezpieczeństwa, które niesie ze sobą nurkowanie i robią to na własną odpowiedzialność. Wtedy nikt od nikogo 
nie oczekuje pełnienia roli kierownika (organizatora, nadzorcy), czyli kogoś, kto byłby odpowiedzialny za poczynania reszty. Powyższa sytuacja jest typowa przy  nurkowaniach jaskiniowych,  eksploracyjnych, ekstremalnych itp.<br><br> 

Należy jednak pamiętać, że w razie wypadku do obowiązków organu badającego sprawę będzie należało ustalenie, kto był organizatorem (kierownikiem) lub powinien nim być. Organ ten może brać pod uwagę wszelkie dostępne przesłanki np. kto był pomysłodawcą wyjazdu, kto obdzwonił zainteresowanych, informując o nim, kto rezerwował noclegi, czyim samochodem dojechano na miejsce, kto miał najwyższe uprawnienia, itp.<br><br>

Jeżeli więc nasza działalność nie ma charakteru zorganizowanego i nurkujemy samodzielnie, indywidualnie to, aby nie obarczać przebywających z nami kolegów odpowiedzialnością za nasze poczynania, powinniśmy napisać odpowiednie oświadczenie. W razie wypadku pozwoli ono ustalić organom badającym sprawę, że zdajemy sprawę z tego, co robimy i że robimy to na własną odpowiedzialność.<br><br>

Przykładowe oświadczenie [<a class="navismall" href="./doc/oswiadczenie_odpowiedzialnosc_nurkujacego.pdf"> pdf </a>]

<h2>
Pożyczanie sprzętu
</h2>

Podobna jest sytuacja przy pożyczaniu sprzętu. Gdy pożyczamy koledze element sprzętu, stajemy się odpowiedzialni za jego stan techniczny. Powinniśmy poprosić go o sprawdzenie stanu technicznego i napisania odpowiedniego oświadczenia.<br><br>

Przykładowe oświadczenie [<a class="navismall" href="./doc/oswiadczenie_pozyczajacego_sprzet.pdf"> pdf </a>]

<h2>
Nurkowanie z przekroczeniem uprawnień
</h2>

Pamiętajmy też, aby nie wyrażać zgody na nurkowanie wykraczające poza uprawnienia lub obowiązujące regulacje prawne, ponieważ, akceptując takie działania, przyjmujemy na siebie odpowiedzialność za ich konsekwencje.<br><br>

<h3 align="right">Andrzej Szerszeń</h3>

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
