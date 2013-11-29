<?php

class Cpublication {
  var $id;
  var $header;
  var $date  ;
  var $author;
  var $photos;
  var $acontent;
  var $contentsize;
  var $metakeywords;
  var $metadescription;
  
  function GetId() { return $this->id; }
  function GetHeader() { return $this->header; }
  function GetDate() { return $this->date; }
  function GetAuthor() { return $this->author; }
  function GetPhotos() { return $this->photos; }
  function GetContent($i) { return $this->acontent[$i]; }
  function GetContentSize() { return $this->contentsize; }
  function GetMetaKeywords() { return $this->metakeywords; }
  function GetMetaDescription() { return $this->metadescription; }

  function GetDateString($lang) {
    return $this->date['day'].'. '.GetMonthString($this->date['month'],$lang).' '.
           $this->date['year']; 
  }
  
  function Cpublication($id) {
    $this -> id = $id;
    $this -> contentsize = 0;
    $this -> acontent = array();
    $this -> date = array();
    $this -> metakeywords = '';
    $this -> metadescription = '';
  }  
}

class Ccontent {
  var $type;      
  var $text;
  var $filename;
  var $align;
  var $isbigimage;
  var $width;
  var $height;
  var $layout;
  var $link;
  
  function GetType() { return $this->type; }
  function GetText() { return $this->text; }
  function GetAlign() { return $this->align; }
  function GetFileName() { return $this->filename; }
  function GetWidth() { return $this->width; }
  function GetHeight() { return $this->height; }
  function GetLayout() { return $this->layout; }
  function GetLink() { return $this->link; }
  function IsLinkToBigImage() { return $this->isbigimage; }
  
  function Ccontent($type) {
    $this->type = $type;
    $this->file = '';
    $this->align = '';
    $this->isbigimage = 1;
    $this->height = 0;
    $this->width = 0;    
    $this->layout = 'horizontal';
  }
}

$publication = new Cpublication($_REQUEST['id']);

function tag_start($parser, $attr, $params) {
  global $publication, $act_tag;
  $act_tag = $attr;
  switch($attr) {
    case 'DATE':
      $publication->date['day'] .= $params['DAY'];
      $publication->date['month'] .= $params['MONTH'];
      $publication->date['year'] .= $params['YEAR'];
      break;
    case 'PARAGRAPH':
      $publication->acontent[$publication->contentsize] = new Ccontent('paragraph_start');
      $publication->contentsize++;
      break;
    case 'IMAGEINROW':
      $publication->acontent[$publication->contentsize] = new Ccontent('image_start');
      $publication->contentsize++;
      break;
    case 'SEESECTION':
      $publication->acontent[$publication->contentsize] = new Ccontent('seesection');
      $publication->contentsize++;
      break;
    case 'SECTION':
      $publication->acontent[$publication->contentsize] = new Ccontent('section');
      break;
    case 'LIST':
      $publication->acontent[$publication->contentsize] = new Ccontent('list_start');
      $publication->contentsize++;
      break;
    case 'ITEM':
      $publication->acontent[$publication->contentsize] = new Ccontent('item_start');
      break;
    case 'TXT':
      $publication->acontent[$publication->contentsize] = new Ccontent('txt');
      break;
    case 'IMAGE':
      $publication->acontent[$publication->contentsize] = new Ccontent('img');
      $publication->acontent[$publication->contentsize]->filename .= $params['FILE'];
      $publication->acontent[$publication->contentsize]->align .= $params['ALIGN'];    
      $publication->acontent[$publication->contentsize]->width = $params['WIDTH'];    
      $publication->acontent[$publication->contentsize]->height = $params['HEIGHT'];   
      if($params['BIG'] != '')
        $publication->acontent[$publication->contentsize]->isbigimage = $params['BIG'];    
      if($params['LAYOUT'] != '')
        $publication->acontent[$publication->contentsize]->layout = $params['LAYOUT'];    
      break;
    case 'LINK':
      $publication->acontent[$publication->contentsize] = new Ccontent('link');
      $publication->acontent[$publication->contentsize]->link .= $params['LINK'];
      break;    
  }
}   

function tag_text($parser, $text) {
  global $act_tag, $publication;
  switch($act_tag) {
    case 'HEADER': $publication->header .= $text; break;
    case 'AUTHOR': $publication->author .= $text; break;
    case 'PHOTOS': $publication->photos .= $text; break;
    case 'METADESCRIPTION': $publication->metadescription .= $text; break;
    case 'METAKEYWORDS': $publication->metakeywords .= $text; break;
    case 'IMAGE':
    case 'LINK':
    case 'SECTION':
    case 'ITEM':
    case 'TXT': $publication->acontent[$publication->contentsize]->text .= $text; break;
  }      
}  

function tag_end($parser, $attr) {
  global $publication;
  switch($attr) {
    case 'TXT':
    case 'IMAGE':
    case 'LINK':
    case 'SECTION':
      $publication->contentsize++;
      break;
    case 'PARAGRAPH':
      $publication->acontent[$publication->contentsize] = new Ccontent('paragraph_end');
      $publication->contentsize++;
      break;
    case 'LIST':
      $publication->acontent[$publication->contentsize] = new Ccontent('list_end');
      $publication->contentsize++;
      break;
    case 'ITEM':
      $publication->contentsize++;
      $publication->acontent[$publication->contentsize] = new Ccontent('item_end');
      $publication->contentsize++;
      break;
    case 'IMAGEINROW':
      $publication->acontent[$publication->contentsize] = new Ccontent('image_end');
      $publication->contentsize++;
      break;
  }
}
  
$parser = xml_parser_create();

xml_set_element_handler($parser, 'tag_start', 'tag_end');
xml_set_character_data_handler($parser, 'tag_text');

$xmlfile = './'.$publication->id.'/'.$publication->id.'.xml';

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


function PasteImage($content)
{
  global $publication;
  
  switch($content->GetAlign()) {
    case "left": $class = "publicationleftimage"; break;
    case "right": $class = "publicationrightimage"; break;
    default: $class = "publicationcenterimage";
  }

  if($content->GetWidth() == 0) {
    if($content->GetLayout() == 'vertical') $width=200; else $width=266;
  } else $width = $content->GetWidth();
  if($content->GetHeight() == 0) {
    if($content->GetLayout() == 'vertical') $height=266; else $height=200;
  } else $height = $content->GetHeight();

  // $publication->GetId() $content->GetFileName() 
  if($content->GetAlign() == "center") $txt = '<div align=center>';
  if($content->GetAlign() == "centerrow") $txt = '<td align=center>';

  $txt .= '<table class="'.$class.'">
	       <tr><td align=center>';
	       
  if($content->IsLinkToBigImage() == 1) 
    $txt .= '<a class="image2" href="javascript:open_click
                (\'./'.$publication->GetId().'/'.$content->GetFileName().'\')">';
                
  $txt .= '<img src="./'.$publication->GetId().'/small/'.$content->GetFileName().'" border=0  
			       alt="'.$content->GetText().'" height='.$height.' width='.$width.'>';

  if($content->IsLinkToBigImage() == 1) $txt .= '</a>';
  
  $txt .= '<tr height=3><td>
	       <tr><td align=center>
			   <i>'.$content->GetText().'</i>
          </table>';

  if($content->GetAlign() == "center") $txt .= '</div>';
          
  return $txt;
}

function PasteLink($content)
{
  global $publication;
  
  $txt = ' <a class="navi" href="'.$content->GetLink().'">';
  $txt .= $content->GetText();
  $txt .= '</a> ';              
          
  return $txt;
}

function PasteSection($content)
{
  global $publication;
  
  $txt =  '<h3 align=left>';
  $txt .= $content->GetText();
  $txt .= '</h3>';              
          
  return $txt;
}


//-----------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------//----------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------


?>
