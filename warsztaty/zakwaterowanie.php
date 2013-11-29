<?php

$bSubdir = true;
$sInclude = './_php/page_utf8.php';
if($bSubdir == true)
	$sInclude = '.'.$sInclude;
@include($sInclude);

	renderHead($bSubdir);
	renderMenu($bSubdir,4,true);
	renderGallery(true,false);
	renderCentral(true);
?>
<!--============================= CONTENTS START ==========================================-->
<h1>
	Informacja o zakwaterowaniu
</h1>

Bazą KNJ 2007 będzie <b>Bar Kaskada Pokoje Gościnne</b>
(<a class="navismall" href="http://barkaskada.pl/">www</a>)
położone niedaleko kamieniołomu w Zimniku.<BR><BR>

Rezerwacji można dokonywać indywidualnie lub za pośrednictwem organizatorów.
W drugim przypadku prosimy o informację e-mailem z informacją o preferowanej
wielkości (liczebności) pokoju.

<h3>Zapraszamy!</h3>

<h3>Podkomisja Nurkowania Jaskiniowego</h3>

<!--
<p>Do ponownego uczestnictwa w Warsztatach zapraszamy również osoby, które ukończyły Warsztaty w latach poprzednich. -->
<!-- Formularz zgłoszniowy dla tych osób można pobrać <A class="navismall" HREF="./doc/wnj04_fkolejne.doc" target="_new">tutaj</A> . -->
<!--Formularz zgłoszeniowy zostanie opublikowany w najblizszym czasie. 
Te osoby mogą wykonywać złożone procedury związane z nurkowaniem jaskiniowym lub nurkować w sztolniach.</p>-->

<!--
<center><a class="navi" href="../kontakt/index.php">Kontakt z organizatorami warsztatów nurkowania w zalanych podziemiach.</a></center>
-->
<!--============================= CONTENTS END   ==========================================-->
<?php
	renderBottom($bSubdir);
?>
