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
	Autoratownictwo
</h1>
<p>Poniżej są omówione dwie najczęstsze sytuacje wymagające zastosowania specjalnych procedur ratowniczych. Związane są one z poruszaniem się w korytarzu jaskini.</p>

<h3>Zgubienie poręczówki</h3> 
<p>Zagubienie poręczówki jest groźne zwłaszcza w mętnych wodach. W tej sytuacji należy zastabilizować na dnie linkę z kołowrotka, przepłynąć kilkanaście metrów w kierunku przypuszczalnego wyjścia (pomaga w tym kompas i nawyk kontrolowania kierunku, w którym sie poruszamy w jaskini), zablokować kołowrotek i przemieścić się po obwodzie korytarza W wyniku tego manewru linka z kołowrotka musi owinąć się wokół poręczówki. Następnie zwijając linkę z powrotem na kołowrotek musimy na nią trafić. Po odzyskaniu poręczówki musimy jeszcze określić kierunek powrotu. Do tego wykorzystuje się kompas i zapisywane podczas penetracji na tabliczce azymut.</p>

<h3>Zaplątanie się w poręczówkę</h3>
<p>Zaplątanie się w luźną poręczówkę jest sytuacją niebezpieczną. Zawsze należy w miarę możliwości próbować wyplątać się z poręczówki. Chwila na ocenę sytuacji jest tutaj pomocna. Jeśli wyplątanie nie jest możliwe, należy wyciąć się z poręczówki, ale w taki sposób, aby nie nastąpiła utrata ciągłości oporęczowania jaskini ani zmiana naciągnięcia poręczówki. Niedopełnienie tych założeń może oznaczać konieczność ponownego oporęczowywania, lub nawet może oznaczać utratę orientacji przez nurków znajdujących się w dalszych partiach jaskini i w efekcie zagrożenie ich życia. Najtrudniejszą czynnością jest wycinanie się po zaplataniu się w poręczówkę. Po stwierdzeniu, że musimy nieodwołalnie wycinać się należy : </p>
<ol>
	<li>Ustalić na kompasie azymut wyjścia.</li>
	<li>Załóżyć pierwszą gumkę przed sobą i zaciagnąć od siebie.</li>
	<li>Załóżyć druga gumkę i zaciagniąć do siebie.</li>
	<li>Przełóżyć linkę z kołowrotka przez gumki zaczynając od pierwszej.</li>
	<li>Zawiązać linkę na drugiej gumce.</li>
		<br>&nbsp;<br>
 		<img src="./img/autoratownictwo1.gif" alt="Pierwsza faza wycinania się z poręczówki"><br>&nbsp;<br>
	<li>Przeciąć linkę miedzy gumkami.</li>
	<li>Zawiązać dwie linki, tę z kołowrotka i końcówkę pozostałą po przecięciu, za drugą gumką.</li>
		<br>&nbsp;<br>
		<img src="./img/autoratownictwo2.gif" alt="Druga faza wycinania się z poręczówki"><br>&nbsp;<br> 
	<li>Znaleźć poręczówkę za zaplataniem, odwijająć linkę z kołowrotka.</li>
	<li>Polaczyć wezłem płaskim linkę z kołowrotka i odnalezioną poręczówke, zwracając uwage na odpowiednie naciągnięcie.</li>
		<br>&nbsp;<br>
		<img src="./img/autoratownictwo3.gif" alt="Trzecia faza wycinania się z poręczówki"><br>&nbsp;<br> 
	<li>Chwycić w jedną rękę linkę od kołowrotka i linkę idącą do zaplątania i przeciąć.</li>
	<li>Odciąć linkę przed zaplątaniem.</li>
	<li>Okreslić kierunek wyjścia za pomocą kompasu.</li>
		<br>&nbsp;<br>
 	<img src="./img/autoratownictwo4.gif" alt="Czwarta faza wycinania się z poręczówki"><br>&nbsp;<br>
</ol>
<!--============================= CONTENTS END ==========================================-->
<?php
	renderBottom($bSubdir);
?>