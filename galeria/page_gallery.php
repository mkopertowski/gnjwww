<?php

class Cgaleria {
  var $name;
  var $header;
  var $date;
  var $description;
  var $author;
  var $aimages;
  var $nofimages;
  
  function GetName() { return $this->name; }
  function GetHeader() { return $this->header; }
  function GetDate() { return $this->date; }
  function GetDescription() { return $this->description; }
  function GetAuthor() { return $this->author; }
  function GetImage($i) { return $this->aimages[$i]; }
  function GetNumberOfImages() { return $this->nofimages; }
  
  function Cgaleria($name) {
    $this -> name = $name;
    $this -> nofimages = 0;
    $this -> aimages = array();
  }  
}

class Cimage {
  var $file;
  var $description;
  var $layout;
      
  function GetFile() { return $this->file; }
  function GetDescription() { return $this->description; }
  function GetLayout() { return $this->layout; }
}

$galeria = new Cgaleria($_REQUEST['id']);

function tag_start($parser, $attr, $params) {
  global $galeria, $act_tag;
  $act_tag = $attr;
  if($attr == 'IMAGE') {
    $galeria->aimages[$galeria->nofimages] = new Cimage();
    $galeria->aimages[$galeria->nofimages]->file .= $params['FILE'];
    $galeria->aimages[$galeria->nofimages]->layout .= $params['LAYOUT'];    
  }
}   

function tag_text($parser, $text) {
  global $act_tag, $galeria;
  switch($act_tag) {
    case 'HEADER': $galeria->header .= $text; break;
    case 'DATE': $galeria->date .= $text; break;
    case 'AUTHOR': $galeria->author .= $text; break;
    case 'DESCRIPTION': $galeria->description .= $text; break;
    case 'IMAGE': $galeria->aimages[$galeria->nofimages]->description .= $text; break;
  }      
}  

function tag_end($parser, $attr) {
  global $galeria;
  if($attr == 'IMAGE') {
    $galeria->nofimages++;
  }
}
  
$parser = xml_parser_create();

xml_set_element_handler($parser, 'tag_start', 'tag_end');
xml_set_character_data_handler($parser, 'tag_text');

$xmlfile = './'.$galeria->name.'/'.$galeria->name.'.xml';

if(!($fp = fopen($xmlfile, 'r'))) {
  die('Nie można otworzyć podanego pliku XML!!!');
}

while($data = fread($fp, 4096)) {
  if(!xml_parse($parser, $data, feof($fp))) {
    die(sprintf("Błąd XML: %s w linii %d",
        xml_error_string(xml_get_error_code($_parser)),
        xml_get_current_line_number($parser)));
  }
}

xml_parser_free($parser); 

//-----------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------function rowLength($img_num,$img_total)
{
  if($img_num+3 < $img_total) {
    return 4;
  } else {
    return ($img_total - $img_num);
  }
}
//----------------------------------------------------------------------------------------------------
function insertImage($GALLERY,$I)
{
  $image = $GALLERY->GetImage($I);
  $fullPathToSmall = './'.$GALLERY->GetName().'/small/'.$image->GetFile();
  $fullPathToBig = './'.$GALLERY->GetName().'/'.$image->GetFile();
  $sizeSmall = getimagesize($fullPathToSmall);
  $sizeBig = getimagesize($fullPathToBig);

  $txt = '<TABLE align=center border=0 cellspacing=0 cellpadding=0 width='.$sizeSmall[0].'>';

  $txt.= '<TR height=10>
          <TD background="../_gfx/perf.gif">
          <TR><TD>';
  
  //$txt.= '<A href="javascript:open_click(\''.$fullPathToBig.'\','.($sizeBig[1]+20).','.($sizeBig[0]+20).')">';
  $txt.= '<A href="javascript:OpenGalleryWindow(\''.$fullPathToBig.'\',\''.$image->GetDescription().'\','.($sizeBig[1]+20).','.($sizeBig[0]+20).')">';
  
  $txt.= '<IMG src="'.$fullPathToSmall.'" border=0 '.$sizeSamll[3].'></A>';
   
  $txt.= '<TR height=10>
			 <TD background="../_gfx/perf.gif">';

  $txt.= '<TR height=3><TR><TD align=center><I>'.$image->GetDescription().'</I>';
				 
  $txt.= '</TABLE>';
  
  return $txt;
}

//----------------------------------------------------------------------------------------------------function renderPhotoGallery($GALLERY)
{       
   $txt = '<table align=center border=0 cellspacing=10 cellpadding=0>';
 
   // rysowanie galerii
   $i = 0; 
   while($i < $GALLERY->GetNumberOfImages())
   {
     $rowlen = rowLength($i,$GALLERY->GetNumberOfImages());     
     
     $txt.= '<TR>';

     for($j=0;$j<$rowlen;$j++)
     {
       $txt.= '<TD>';
       $txt.= insertImage($GALLERY,$i);
       $i++;
     }

     $txt.= '<TR height=3>';
   }      
   
   $txt.= '</TABLE>';
   
	echo $txt;
}
//----------------------------------------------------------------------------------------------------
?>
