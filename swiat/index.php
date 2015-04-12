<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

$GL_DIR = '..';

@include('../_php/publication_supp.php');
include('../_php/mysql.php');
include('../_php/settings.php');
include('../_php/misc.php');

	renderHead($bSubdir,'','');
	renderMenu($bSubdir,6,false,'SWIAT');
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
	WYPRAWY ZAGRANICZNE
</h1>
<?php

/*
//-----------------------------------------------------
NewSection('','section');

StartList();

  ListItem('<b></b>');
  ExtendedListItem('','','','','');
  ExtendedListItem($title,$tekst,$link,$data,$autor);
EndList();
*/
//-----------------------------------------------------


$sql="SELECT * FROM $ARTICLE_TABLE_NAME WHERE status='ready' and section='świat' ORDER BY date DESC";
$result=$mysqli->query($sql);

if($result) {

	$rok = '';
	
	while ($row = $result->fetch_assoc()) { // list start?

		if($rok == '') {
			$rok = GetYearFromDate($row['date']);
			
			NewSection('ROK '.$rok,'section');
			StartList();
		} else if($rok != GetYearFromDate($row['date'])) { // new year?
			$rok = GetYearFromDate($row['date']);

			EndList ();
			NewSection('ROK '.$rok,'section');
			StartList();
		}
		
		ExtendedListItemMYSQL($mysqli,$row,'..');
		
	}

	EndList ();
}

NewSection('ROK 2012','section');

StartList();
ExtendedListItem('Komati Springs – Sodwana Bay – Monachium. Wyjazd nie tylko nurkowy',
                   'Relacja z wrześniowego wyjazdu do RPA',
                   '../article.php?id=2012rpa&sec=swiat','WIĘCEJ',
                   '2. Listopada 2012','D.Graczyk');


ExtendedListItem('Wyprawa do Kosowa',
                   'Relacja',
                   '../article.php?id=2012kosowo&sec=swiat','WIĘCEJ',
                   '12. Lipca 2012','D.Graczyk');



ExtendedListItem('Słoweńska czerwcówka',
                   'Relacja z wyjazdu do Słowenii',
                   '../article.php?id=2012slowenia2&sec=swiat','Więcej',
                   '10. Czerwca 2012','T.Zapiór, A.Budziarek');



ExtendedListItem('Wyprawa do Słowenii',
                   'Relacja',
                   '../article.php?id=2012slowenia&sec=swiat','WIĘCEJ',
                   '04. Maja 2012','Dominik Graczyk');

EndList();


NewSection('ROK 2011','section');

StartList();

ExtendedListItem('Wyprawa do Puerto Rico',
                   'Relacja',
                   '../article.php?id=2011puertorico&sec=swiat','WIĘCEJ',
                   '03. Grudnia 2011','Dominik Graczyk');

  ExtendedListItem('Wyprawa do Kosowa i Czarnogóry',
                   'Relacja',
                   '../article.php?id=2011kosowoczarnogora&sec=swiat','WIĘCEJ',
                   '03. Września 2011','Dominik Graczyk');
  
  ExtendedListItem('Wyprawa GNJ do Serbii i Macedonii',
                   'Relacja',
                   '../article.php?id=2011SerbiaMacedonia&sec=swiat','WIĘCEJ',
                   '03. Maja 2011','Sebastian Dobrowolski');
  
  EndList();

//-----------------------------------------------------

NewSection('ROK 2010','section');

StartList();
  
  ExtendedListItem('Wyprawa GNJ do Albanii i Grecji',
                   'Relacja',
                   '../article.php?id=2010albania&sec=swiat','WIĘCEJ',
                   '25. Czerwiec 2010','Dominik Honzo Graczyk');
  
  ExtendedListItem('Marble Arch i Prods Pot-Cascades',
                   'Pierwsza cześć raportu z grudniowego połączenia dwóch jaskiń w Irlandii Północnej',
                   './2010Marble/pdf/Marble.pdf','RAPORT',
                   '16. Marzec 2010','Artur Kozłowski');
EndList();

//----------------------------------------------------------------------------------------------------------------------

NewSection('ROK 2009','section');

StartList();
  ExtendedListItem('Rumunia i Serbia 2009',
                   'Wyprawa speleonurkowa do Rumunii i Serbii',
                   '../article.php?id=2009Rumunia_Serbia&sec=swiat','WIĘCEJ',
                   '29. Października 2009','Dominik "Honzo" Graczyk');
  
  ExtendedListItem('Po ciemnej stronie Gort',
                   'Progres osiągnięty tego lata przez zespół Jim Warny - Artur Kozłowski w jaskini Poulnacapple w Kiltartan, hrabstwo Galway, jest z pewnością jednym z najważniejszych wydarzeń w irlandzkim nurkowaniu jaskiniowym w 2009 r. Ponad 1.5-kilometrowa penetracja i głębokość -71m osiągnięta na końcu poręczówki czyni Poulnacapple najdłuższą podwodną jaskinią Irlandii...',
                   '../article.php?id=2009PoCiemnejStronie&sec=swiat','WIĘCEJ',
                   '12. Wrzesień 2009','Artur Kozłowski');

  ExtendedListItem('Riders on the storm - Ujeżdżając burzę',
                   'Pamiętam moje pierwsze nurkowanie na Nizinie Gort: jest koniec lutego 2008 r. i dojeżdżając do wsi Kiltartan w hrabstwie Galway nie mamy żadnych problemów ze zlokalizowaniem naszego punktu docelowego; z daleka widać wezbraną rzekę Coole i podążając w górę...',
                   '../article.php?id=2009UjezdzajacBurze&sec=swiat','WIĘCEJ',
                   '24. Sierpień 2009','Artur Kozłowski');

  ExtendedListItem('Jaskinie jez. Szkoderskiego',
                   'Zapraszamy do obejrzenia raportu z wypraw w 2007 i 2008 roku w rejon jez. Szkoderskiego, w Czarnogórze, których celem była eksploracja licznych w tym miejscu wywierzysk - podwodnych jaskiń. Raport opisuje ponad 35 zbadanych obiektów.',
                   './skadar_2008_report.pdf','RAPORT',
                   '7. Kwiecień 2009','Andrzej Szerszeń');

EndList();

?>

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
