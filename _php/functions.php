<?php

//-----------------------------------------------------------------------------
// useful php functions 
//-----------------------------------------------------------------------------

function GetMonthString($month,$lang)
{
  $monthsPL = array ( 1 => "Styczeń", "Luty", "Marzec", "Kwiecień", "Maj", 
                     "Czerwiec", "Lipiec", "Sierpień", "Wrzesień", "Październik",
                     "Listopad", "Grudzień");
  return $monthsPL[$month];
}

?>