<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);
@include('../_php/publication_supp.php');

	renderHead($bSubdir);
	renderMenu($bSubdir,0,true);
	renderGallery(true,false);
	renderCentral(true);
	
function renderTableRow($data,$dzial,$link,$opis)
{
  $txt = '
          <tr>
            <td>'.$data.'</td>
            <td>'.$dzial.'</td>
            <td><a class="navi" href="'.$link.'">'.$opis.'</a></td>
          </tr>';
  echo $txt;
}	

function renderTableStart()
{
   echo '<table cellspacing=0 cellpadding=3 width=100%>
         <tr>
         <td width=20%><u><b>DATA</b></u></td>
         <td width=15%><u><b>DZIAŁ</b></u></td>
         <td</td>
         </b>
         </tr>';
}

function renderTableEnd()
{
   echo '</table><br><br>';
}

?>

<!--============================= CONTENTS START ==========================================-->
<h1>
	AKTUALIZACJE I ZMIANY<br>
	Cave Diving Poland<br>
</h1>



<?php
/*
  renderTableRow("","","../article.php?id=2008&sec=",
                 "");
*/

//--------------------------------------------------------------------------------------------
  NewSection('ROK 2011','section');
  renderTableStart();
  
  renderTableRow("Wrzesień 2011","ŚWIAT","../article.php?id=2011kosowoczarnogora&sec=swiat",
                 "Wyprawa do Kosowa i Czarnogóry");  
				 
	renderTableRow("Wrzesień 2011","POLSKA","../article.php?id=2011Tatry&sec=polska",
                 "Nurkowanie w j. Wodnej Pod Pisaną");  
  
  renderTableRow("Maj 2011","WARSZTATY","../article.php?id=2011warsztaty&sec=warsztaty",
                 "XIV Warsztaty Nurkowania Jaskiniowego");  
				 
	renderTableRow("Maj 2011","ŚWIAT","../article.php?id=2011SerbiaMacedonia&sec=swiat",
                 "Wyprawa do Serbii i Macedonii");  
  renderTableEnd();


//--------------------------------------------------------------------------------------------
  NewSection('ROK 2010','section');
  renderTableStart();
  
   renderTableRow("Sierpień 2010","ARTYKULY","../article.php?id=2010kosowo&sec=swiat",
                 "Wyprawa GNJ do Kosowa");  
  renderTableRow("25. Czerwiec 2010","ARTYKULY","../article.php?id=2010wnj&sec=warsztaty",
                 "XIII Warsztaty Nurkowania Jaskiniowego");
  renderTableRow("24. Czerwiec 2010","ARTYKULY","../article.php?id=2010albania&sec=swiat",
                 "Wyprawa do Albanii");
  renderTableRow("30. Kwiecień 2010","ARTYKULY","../article.php?id=2010Sobotka1&sec=polska",
                 "Sobotka1");
  renderTableRow("23. Kwiecień 2010","ARTYKULY","../article.php?id=2010RumuniaBihor&sec=artykuly",
                 "RumuniaBihor");
  renderTableRow("16. Marca 2010","ŚWIAT","../article.php?id=2010Marble&sec=swiat",
                 "Marble"); 
  renderTableRow("08. Marca 2010","POLSKA","../article.php?id=2010WONP&sec=polska",
                 "Warsztaty opieki nad poszkodowanym"); 
  
  renderTableEnd();
  
  //-------------------------------------------------------------------------------------------------
  
  NewSection('ROK 2009','section');
  renderTableStart();
  
  renderTableRow("04. Grudnia","POLSKA","../article.php?id=2009ObiektW&sec=polska",
                 "Obiekt W"); 
  renderTableRow("29. Października","ŚWIAT","../article.php?id=2009Rumunia_Serbia&sec=swiat",
                 "Rumunia_Serbia"); 
  renderTableRow("12. Wrzesień","ŚWIAT","../article.php?id=2009PoCiemnejStronie&sec=swiat",
                 "Po ciemnej stronie Gort");      
  renderTableRow("24. Sierpień","ŚWIAT","../article.php?id=2009UjezdzajacBurze&sec=swiat",
                 "Ujeżdżając burzę");      
  renderTableRow("22. Czerwca","POLSKA","../article.php?id=2009Fort13&sec=polska",
                 "Nurkowanie w forcie XIII w Błogosławiu");      
  renderTableRow("25. Maja","WARSZTATY","../article.php?id=wnj2009&sec=warsztaty",
                 "XII Warsztaty Nurkowania Jaskiniowego 2009");      
  renderTableRow("10. Maja","POLSKA","../article.php?id=2009Nawojow1&sec=polska",
                 "Kopalnia w Nawojowie Śląskim - odsłona pierwsza");      
  renderTableRow("7. Kwiecień","ŚWIAT","../swiat/index.php",
                 "Jaskinie jez. Szkoderskiego");      
  renderTableRow("14. Styczeń","POLSKA","../article.php?id=2008wpp&sec=polska",
                 "Jaskinia Wodna pod Pisaną 2008");      
  renderTableEnd();
  
//----------------------------------------------------------------------------------------------------

  NewSection('ROK 2008','section');
  renderTableStart();
  renderTableRow("14. Styczeń","POLSKA","../article.php?id=2008wpp&sec=polska",
                 "Jaskinia Wodna pod Pisaną 2008");      
  renderTableRow("13. Lisotpad","ŚWIAT","../article.php?id=2008Padis&sec=swiat",
                 "Padis 2008");      
  renderTableRow("11. Maj","RATOWNICTWO","../article.php?id=2008WONP&sec=ratownictwo",
                 "Warsztaty Opieki Nad Poszkodowanym");                
  renderTableRow("27. Marzec","GALERIA","../galeria/index.php",
                 "Nowe zdjęcia");
  renderTableRow("13. Marzec","ARTYKULY","../article.php?id=2008KursFoto&sec=artykuly",
                 "Kurs fotografii podwodnej");
  renderTableRow("9. Marzec","TECHNIKA","../article.php?id=2008Nawigacja&sec=szkolenie",
                 "Nawigacja w technicznym nurkowaniu jaskiniowym");
  renderTableRow("9. Marzec","RATOWNICTWO","../article.php?id=2008Metro&sec=ratownictwo",
                 "Nurkowanie w metrze - ćwiczenia GRW PZA i Straży Pożarnej");                
  renderTableRow("9. Marzec","RATOWNICTWO","../article.php?id=2008TOPR&sec=ratownictwo",
                 "Ratownictwo nurkowe w jaskiniach w TOPR");                
  renderTableRow("21. Styczeń","ŚWIAT","../article.php?id=2008Birnbachloch&sec=swiat",
                 "Birnbachloch");                
  renderTableRow("17. Styczeń","-","../rozne/publication.php?id=2008JaskiniaPoSerbsku",
                 "Jaskinia po Serbsku");                
  renderTableRow("17. Styczeń","ŚWIAT","../swiat/publication.php?id=2008Czarnogora",
                 "Wyprawa GNJ do Czarnogóry");                
  renderTableRow("17. Styczeń","ŚWIAT","../swiat/publication.php?id=2008Wlochy",
                 "X Divers Team: Elefante Bianco i Grotta dei Fontanazzi");                
  renderTableRow("15. Styczeń","-","../rozne/publication.php?id=kurspf1",
                 "Kurs Fotografii Podwodnej dla nurków jaskiniowych");                

  renderTableRow("15. Styczeń","RATOWNICTWO","../ratownictwo/publication.php?id=wonp",
                 "Warsztaty Opieki Nad Poszkodowanym");                

  renderTableEnd();

//--------------------------------------------------------------------------------------------
  NewSection('ROK 2007','section');
  renderTableStart();
  renderTableRow("14. Listopad","WARSZATATY","../warsztaty/kurs07.php",
                 "Kurs Nurkowania Jaskiniowego - relacja");                
  renderTableRow("9. Listopad","STRONA GŁÓWNA","../index.php",
                 "informacje o kongresach w roku 2008");                
  renderTableRow("9. Listopad","STRONA GŁÓWNA","../index.php",
                 "Aktualności / wydarzenia");                
  renderTableRow("9. Październik","ŚWIAT","../article.php?id=2007Wlochy&sec=swiat",
                 "Wywierzyska Włoch");                
  renderTableRow("18. Czerwiec","ŚWIAT","../swiat/publication.php?id=2007Slowenia",
                 "Wywierzyska Slovenji");                
  renderTableRow("14. Czerwiec","ŚWIAT","../swiat/publication.php?id=2007KursIantd",
                 "Kurs IANTD Cave Diver - Francja 2007");                
  renderTableRow("8. Czerwiec","POLSKA",
                 "../polska/publication.php?id=2007JeziorkoX",
		 "Wielka Śnieżna - Jeziorko X. Najniżej położony problem nurkowy w Tatrach");
  renderTableRow("27. Maj","ARTYKUŁY",
                 "../artykuly/publication.php?id=IIIKongres",
                 "III Międzynarodowy Kongres Nurkowania Jaskiniowego");
  renderTableRow("25. Maj","ŚWIAT",
                 "../swiat/publication.php?id=07FrancjaMaj",
                 "Wyprawa do Francji (Departament Lot)");
  renderTableRow("17. Maj","GALERIA",
                 "../galeria/gallery.php?id=07FrancjaX",
                 "X divers team - wyprawa do Francji 2007");
  renderTableRow("10. Kwiecień","POLSKA",
                 "../polska/publication.php?id=2007PNJZima",
                 "Zimowa działalność PNJ - podsumowanie");
  renderTableRow("29. Marzec","POLSKA",
                 "../polska/publication.php?id=2007zimna",
                 "Nurkowanie w jaskini Zimnej");
  renderTableRow("13. Marzec","GALERIA",
                 "../galeria/gallery.php?id=07sniezna_x",
                 "Wielka Śnieżna - nurkowanie na dnie");
  renderTableRow("11. Marzec","AKTUALNOŚCI",
                 "../index.php",
                 "Wielka Śnieżna - nurkowanie na dnie");
  renderTableRow("20. Luty","OGŁOSZENIA",
                 "../ogloszenia/index.php",
                 "Aktualizacja ogłoszeń");
  renderTableRow("20. Luty","GALERIA",
                 "../galeria/gallery.php?id=Mcziszta07",
                 "Wyprawa do Abhazji - Istocznik Mcziszta");
  renderTableRow("4. Styczeń","ŚWIAT",
                 "../swiat/index.php",
                 "X divers team w Miltitz, grudzień 2006");
  renderTableEnd();

 
//---------------------------------------------------------------------------------------------
  NewSection('ROK 2006','section');
  renderTableStart();
  renderTableRow("26. Listopad","AKTUALNOŚCI",
                 "../rozne/publication.php?id=2006Sniezna_1",
                 "Na Dno Śnieżnej czyli przygotowania do nurkowania w jeziorku X");
  renderTableRow("25. Listopad","RATOWNICTWO",
                 "../ratownictwo/index.php",
                 "Trening RNJ na Zakrzówku (zaległa relacja)");
  renderTableRow("7. Listopad","RATOWNICTWO",
                 "../ratownictwo/index.php",
                 "Trening RNJ na Zakrzówku");
  renderTableRow("6. Listopad","POLSKA",
                 "../aktualnosci/index.php",
                 "Winnica");
  renderTableRow("1. Listopad","OGŁOSZENIA",
                 "../ogloszenia/index.php",
                 "Aktualizacja ogłoszeń");
  renderTableRow("10. Październik","GALERIA",
                 "../galeria/index.php",
                 "Zdjęcia z akcji nurkowej w jakini Panya");
  renderTableRow("23. Wrzesień","AKTUALNOŚCI",
                 "../aktualnosci/index.php",
                 "Krym po raz 2-gi czyli wyprawa 2006");
  renderTableRow("31. Lipiec","AKTUALNOŚCI",
                 "../aktualnosci/index.php",
                 "Izbucul Galbenei");
  renderTableRow("23. Lipiec","ENGLISH",
                 "../english/index.php",
                 "Galebenei Expedition");
  renderTableRow("4. Lipiec","AKTUALNOŚCI",
                 "../aktualnosci/index.php",
                 "X divers team we Włoszech - relacja z wyjazdu");
  renderTableRow("18. Czerwiec","AKTUALNOŚCI",
                 "../aktualnosci/index.php",
                 "Warsztaty Nurkowania Jaskiniowego - etap 2 - Słowenia");
  renderTableRow("11. Czerwiec","AKTUALNOŚCI",
                 "../aktualnosci/index.php",
                 "Krym i Warsztaty");
  renderTableRow("16. Kwiecień","AKTUALNOŚCI",
                 "../aktualnosci/index.php",
                 "Informacje o ostatnich wyjazdach");
  renderTableRow("20. Marzec","OGŁOSZENIA",
                 "../ogloszenia/index.php",
                 "Uaktualnienie listy ogłoszeń");
  renderTableRow("27. Luty","RATOWNICTWO",
                 "../ratownictwo/ZimnaLuty2006.php",
                 "Pozorowana akcja ratownicza w jaskini Zimnej");
  renderTableRow("12. Luty","ARTYKUŁY",
                 "../artykuly/TatryLuty2006.php",
                 "Relacja Lucyny z wyjazdu w Tatry");
  renderTableRow("12. Luty","ARTYKUŁY",
                 "../artykuly/spryciula.php",
                 "Wspomnienie Włodka Szymanowskiego");
  renderTableRow("12. Luty","RATOWNICTWO",
                 "../ratownictwo/index.php",
                 "Nowy dział: RATOWNICTWO");                
  renderTableEnd();
?>

<!--============================= CONTENTS END   ==========================================-->
<?php>
	renderBottom($bSubdir);
?>
