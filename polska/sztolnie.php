<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

@include('../_php/publication_supp.php');
include('../_php/mysql.php');
include('../_php/misc.php');

	renderHead($bSubdir,'','');
	renderMenu($bSubdir,5,false,'POLSKA','SZTOLNIE, STUDNIE, KOPALNIE');
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
	POLSKA - SZTOLNIE, STUDNIE, KOPALNIE
</h1>

<ul class="normal">

<?php

$sqlfiltr="section='polska' AND tags LIKE '%kopalnie%'";

ArticleListFiltredMYSQL($mysqli,'..',$sqlfiltr);

  ExtendedListItem('Nurkowanie w „Winnicy”',
                   'Wzgórze Winnica położone jest się w Krakowie. Znajduje się na nim fort 53a wybudowany w latach 1898-1899 jako pancerny fort obrony bliskiej...',
                   '../polska/publication.php?id=winnica','RELACJA',
                   '6. Listopad 2006','Lucyna Cieślik');
?>
	
  <BR>
	<li class="normal">
		<b>Sztolnia w Bystrzycy Górnej</b> - Dawna kopalnia rud ołowiu i srebra w Bystrzycy Górnej<br>
		...Kopalnia ta dokumentuje metody udostępniania i eksploatacji złóż żyłowych stosowane w górnictwie od XVI do XVIII w. Z uwagi na stan zachowania, stanowi cenne źródło historii śląskiego górnictwa kruszcowego...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./bystrzycagornamadziarz.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Sztolnia w Bystrzycy Górnej</b> - Sztolnia w Bystrzycy Górnej<br>
		Dolny Śląsk był już od czasów średniowiecza  terenem intensywnej działalności górniczej. Stąd też obfitość różnego rodzaju obiektów podziemnych. Niektóre z nich są zalane wodą, a zatem niedostępne dla przygodnych...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./bystrzycagornawb.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Sztolnia w Bystrzycy Górnej</b> - nurkowanie poznawcze<br>
		Pozostało nam tylko przejść kilkadziesiąt metrów poziomego korytarza i już staliśmy nad krystalicznie czysta wodą. Sztolnia ta nie kryje żadnych wąskich miejsc, więc nurkowałem z zestawem 2 x 8L na noszaku. Szybko założyłem butle, kask, włączyłem światło i zanurzyłem się w wodzie. Przejrzystość zapierała dech w piersiach ...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./bystrzycagornamg.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Sztolnia w Bystrzycy Górnej</b> - Stajnia Kleina w Bystrzycy Górnej. Przejrzystość zapierała dech w piersiach ...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./bystrzycagornatremb.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Sztolnia w Bystrzycy Górnej</b> - 27 grudnia 2003 zanurkowaliśmy znów w sztolni w Bystrzycy Górnej. Tym razem w składzie Agata Kuśnierek i Jacek "Trembi" Trembowelski. Naszym celem była  ...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./bystrzycagornatremb2.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Sztolnia Drei Brüder</b> - Sztolnia Drei Brüder po raz kolejny<br>
		Sztolnię Drei Brüder (podnóże Gór Izerskich) znamy już od kilku lat. Znajduje się tam duża komora wyrobiskowa, której dolne poziomy są zalane. Stwarza to interesujące możliwości dla nurkowania jaskiniowego. Pierwsze nurkowania...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./dreibruder01.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Sztolnia w Dzikowcu</b> - Sztolnia w Dzikowcu - maj 2003<br>
		...Przy uważniejszej penetracji można jeszcze dostrzec pod południową ścianą komory niepozorną kałużę, która nie łączy się ze wspomnianymi jeziorkami. Uwagę przykuwa krystaliczna czystość wody. Po dokładnym obejrzeniu okazuje się, że po pokonaniu zacisku na dnie tej kałuży można się przedostać do poziomego, zalanego pod strop, korytarza...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./dzikowiec_05_2003.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Sztolnia w Dzikowcu</b> - Sztolnia w Dzikowcu - czerwiec 2003<br>
		...Po zjechaniu do komory wydobywczej uderzył mnie dziwny wygląd spągu. Kamienie leżały w sposób jakby bardziej zwarty, a ponadto przykrywała je kilkumilimetrowa warstwa szarozielonego osadu. Spąg wyglądał jak dno zbiornika, z którego spuszczono wodę. Poświeciłem w kierunku jeziorek. Z przerażeniem nie dostrzegłem wody, zamiast niej była szarozielona powierzchnia. Czyżby podczas naszej miesięcznej nieobecności nastąpił gwałtowny przybór wody, który zamulił jeziorka i co najgorsze chodnik...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./dzikowiec_06_2003.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Sztolnia w Kamionkach</b> - Sztolnia w Kamionkach wyeksplorowana do końca<br>
		Gdy jesienią ubiegłego roku odnaleźliśmy starą sztolnię "Wilhelm" w Kamionkach, poczułem, że nareszcie stanęliśmy przed dużym problemem nurkowym. W chwili obecnej do sztolni wchodzi się przez ciasną, stromo opadającą szczelinę...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./kamionki.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Sztolnia w Kowarach</b> - Sztolnia w Kowarach<br>
		Od czasów, gdy w naszej Sekcji zaczęliśmy zajmować się na poważnie nurkowaniem w jaskiniach, szukamy na terenie Dolnego Śląska podziemnych, zalanych obiektów, gdzie w bliskiej odległości od domu można oswajać się z tym niedostępnym środowiskiem...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./kowary.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Sztolnie w Miedziance</b> - Nurkowania w sztolni w Miedziance<br>
		...Góry Świętokrzyskie są rejonem obfitującym z racji swej geologii w sztolnie i wyrobiska górnicze. Wywiad poczyniony wśród członków klubu odwiedzających te okolice sugerował istnienie tam ciekawych dla nas problemów nurkowych /zalane kopalnie/. Najwięcej informacji mieliśmy na temat okolic miejscowości Miedzianka położonej...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./miedzianka_1999.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Studnia w Srebrnej Górze</b> - Naprawdę głębokie nurkowanie<br>
		Jak zaopatrzyć w wodę fortecę znajdującą się na szczycie skalistej góry? Najlepiej wywiercić studnię - aby uniezależnić załogę od niepewnych deszczy. Jednak taka studnia powinna być naprawdę głęboka i obszerna, a w zasadzie...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./srebrnagora1.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Studnia w Srebrnej Górze</b> - Srebrna Góra - poligon doświadczalny<br>
		Jesienią 1997 roku powróciliśmy do studni w Srebrnej Górze. Zaletą tego miejsca jest stosunkowo łatwo dostępna duża głębokość. Do przeprowadzenia tutaj treningowych zanurzeń skłoniły nas perspektywy eksploracji zalanych ciągów...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./srebrnagora2.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Studnia w Srebrnej Górze</b> - Srebrna Góra - co było za zamkniętymi drzwiami?<br>
		Studnia ta jest położona bardzo nisko, na powierzchni, w zasadzie jeszcze w granicach Srebrnej Góry. Można do niej łatwo dojść z parkingu pod przełęczą, a dostępu do środka  bronią olbrzymie betonowe płyty. Po ich odsunięciu ukazał się nam wlot do studni. Do lustra wody było bardzo blisko około 4m...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./srebrnagora3.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Wyrobiska w Stolcu</b> - Nurkowanie w Stolcu<br>
		W artykule "Jaskinie i sztolnie Sudetów (14)" Maciej Pawełczyk opisuje tajemnice podziemnych wyrobisk w Stolcu, stwierdzając, że jest tam ciekawy problem do nurkowania - w miejscu, które określił jako Jeziorko II...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./stolec.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Sztolnia w Tąpadłach</b> W dniu 18 październka 2003 w ramach przygotowań do eksploracji Syfonu Mysi w Jaskini Wielka Śnieżna obyła się akcja nurkowa w tej sztolni. Wiktor Bolek zanurkował w w konfiguracji bocznej 2x 7l. Rozwarstwienie nie było widoczne ... &nbsp;&nbsp;&nbsp;[<a class="navismall" href="./tapadla200310.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">	
		<b>Sztolnia w Tąpadłach</b> W dniu 21 września 2003 obyła się akcja nurkowa w tej sztolni. Michał Gignal zanurkował w obydwu chodnikach odchodzących od szybu. Woda była rozwarstwiona ... &nbsp;&nbsp;&nbsp;[<a class="navismall" href="./tapadla200309.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Kopalnia na przełęczy Tąpadła</b> - Koniec eksploracji w sztolni na przełęczy Tąpadła<br>
		Na przestrzeni ostatnich kilku lat zalany szyb w tej sztolni stanowił dla nas cel weekendowych wyjazdów. Podczas kolejnych nurkowań coraz lepiej poznawaliśmy tajemnicze piętro kopalni, biorące swój początek na dnie tego szybu...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./tapadla.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Sztolnia odwadniająca w Wałbrzychu</b> - Opis zalanego chodnika w sztolni odwadniającej rejon miasta Wałbrzycha<br>
		Przy użyciu technik nurkowych, 21 grudnia przeprowadzono penetrację całkowicie zalanego chodnika idącego od szybu "w Porcelania" w kierunku południowo- zachodnim (do szybu "Julia"). W akcji wzięli udział nurkowie : Wiktor Bolek, Michał Stajszczyk...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./walbrzych.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Sztolnia przy Przełęczy Walimskiej</b> - Walim i Kamionki - problemy nurkowe<br>
		...Nie mniej jednak od pewnego już czasu pojawiały się pogłoski o obiektach pogórniczych na tym terenie, posiadających dolne, całkowicie zalane poziomy. Ostatnio udało się nam zlokalizować jedną z takich sztolni. Jest ona...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./walim.php">więcej...</a>]<br>&nbsp;
	</li>
	<li class="normal">
		<b>Wieliczka</b> - Wieliczka jest najbardziej znaną kopalnią soli w Polsce. Na początku lat 90. ubiegłego stulecia na IV poziomie wdarła się do tej kopalni słodka woda...
		&nbsp;&nbsp;&nbsp;[<a class="navismall" href="./wieliczka_01_2004.php">więcej...</a>]<br>&nbsp;
	</li>
</ul>

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
