<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

$GL_DIR = '..';

@include('../_php/publication_supp.php');
include('../_php/mysql.php');
include('../_php/misc.php');

	renderHead($bSubdir);
	renderMenu($bSubdir,13,false,'RATOWNICTWO');
	renderGallery(true,false);
	renderCentral(true);
?>
		
<!--============================= CONTENTS START ==========================================-->
<h1>
   RATOWNICTWO NURKOWE W JASKINIACH
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
//-----------------------------------------------------

NewSection('SZKOLENIA','section');

StartList();

$sqlfiltr="section='ratownictwo'";

ArticleListFiltredMYSQL($mysqli,'..',$sqlfiltr);
    
  ExtendedListItem('Warsztaty Opieki Nad Poszkodowanym 2010',
                   'Relacja',
		   '../article.php?id=2010WONP&sec=ratownictwo','WIĘCEJ',
		   '08. Marzec 2010','Dominik Graczyk');
  
  ExtendedListItem('Wielka Orkiestra Nawiedzonych Płetwonurków, czyli Warsztaty Opieki Nad Poszkodowanym',
                   'W życiu każdego szanującego się speleologa, a już szczególnie nurka jaskiniowego, przychodzi taki moment, że zaczyna się on zastanawiać nad kruchością życia...',
		   '../article.php?id=2008WONP&sec=ratownictwo','WIĘCEJ',
		   '11. Maj 2008','Adam Więch');

  ExtendedListItem('Nurkowanie w metrze - ćwiczenia GRW PZA i Straży Pożarnej',
                   'Wspólne ćwiczenia Grupy Ratownictwa Wysokościowego PZA i Państwowej Straży Pożarnej odbyły się  06.03.2008...',
		   '../article.php?id=2008Metro&sec=ratownictwo','WIĘCEJ',
		   '9. Marzec 2008','Andrzej Szerszeń');

  ExtendedListItem('Ratownictwo nurkowe w jaskiniach w TOPR',
                   'Przez dwa dni (24 i 25.01.2008) ratownicy - płetwonurkowie TOPR, trenowali w Morskim Oku....',
		   '../article.php?id=2008TOPR&sec=ratownictwo','WIĘCEJ',
		   '9. Marzec 2008','Andrzej Szerszeń');

  ExtendedListItem('Trening RNJ w kamieniołomie Zakrzówek',
                   'W sobotę 21.10.2006 przeprowadzono kolejny trening zespołu nurków jaskiniowych w transportowaniu poszkodowanego w noszach. W ćwiczeniach wzięli udział nurkowie jaskiniowi...',
                   '../ratownictwo/publication.php?id=2006zakrzowek','RELACJA',
                   '7. Listopad','Lucyna Cieślik');

  ExtendedListItem('Trening RNJ w kamieniołomie Zakrzówek',
                   'W celu odpowiedniego przygotowania zespołu nurków jaskiniowych do manewrów ratownictwa zaplanowanych na przełom września i października, przeprowadzono ćwiczenia w kamieniołomie Zakrzówek...',
                   '../ratownictwo/publication.php?id=2006zakrzowek2','RELACJA',
                   '25. Listopad','Lucyna Cieślik');


?>
	<li class="normal">
      <b>PRÓBNA akcja ratownicza w Jaskini Zimnej.</b><br>
      25. Lutego 2006. odbyła się PRÓBNA akcja ratownicza w Jaskini Zimnej.
      Ratowaliśmy Pszczółka (Andrzej Szerszeń). W akcji uczetniczyło 
      8 nurków jaskiniowych podzielonych na...[<a class="navismall" href="./ZimnaLuty2006.php">wiecej</a>]
      <br><br><div align="right"><i>zamieszczono: 27. Luty 2006</i></div>
              <div align="right"><i>autor: Mirek Kopertowski</i></div>
	</li>
	<li class="normal">
      <b>Trening basenowy.</b><br>
      9. Lutego 2006. odbyły się basenowe ćwiczenia ratownictwa
      podczas których przećwiczono transport nurka w noszach. 
      W zajęciach uczestniczyli: Lucyna Cieślik (SKTJ, pozostali SGW), 
      Rafał Górecki, Mirek Kopertowski, Paweł Mordkowicz oraz Michał Stajszczyk oraz
      w roli poszkodowanego: Ola Potulska (NZ)
      [<a class="navismall" href="./basenLuty2006.php">wiecej</a>]
      <br><br><div align="right"><i>zamieszczono: 12. Luty 2006</i></div>
              <div align="right"><i>autor: Lucyna Cieślik</i></div>
	</li>
	<li class="normal">
	   <b>Sympozjum nt. "Ratownictwo Nurkowe w Jaskiniach"</b><br>
	   Sympozjum odbyło się w dniach 10-11 grudnia 2005 w Warszawie w siedzibie PZA.
      Gościliśmy specjalistów z dziedziny
      ratownictwa nurkowego ze Speleo Secours France - Jeana Pierra Baudu oraz
      Oliviera Guerarda. Obecni też byli przedstawiciele Państwowej Straży
      Pożarnej i innych służb ratowniczych.
	   <br><br><div align="right"><i>zamieszczono: 12. Luty 2006</i></div>
	</li>
	<li class="normal">
		<b>Stage Brancardage.</b><br>        
      Podczas ostaniego weekendu listopada odbył się we Francji staż ratownictwa 
      nurkowania jaskiniowego. Przećwiczone zostały techniki linowe wykorzystywane 
      przy transporcie poszkodowanego w noszach, transport przez syfon 
      (rownież w noszach) oraz omowiona zastała komunikacja z wykorzystaniem 
      systemu Nicola i udzielanie pierwszej pomocy za syfonem (ASV). 
      W stażu uczestniczyli: Rafał Górecki, Mirek Kopertowski (obaj SGW) 
      oraz Andrzej Szerszeń (SW). 
      <br><br><div align="right"><i>zamieszczono: 30. Listopad 2005</i></div>
	</li>
</ul>

<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
