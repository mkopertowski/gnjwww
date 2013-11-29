<?php
  
  $bSubdir = true;
  @include('../_php/functions.php');
  @include('../_php/page_utf8.php');
  @include('../_php/page_publication.php');
  
  renderHead($bSubdir,$publication->GetMetaKeywords(),$publication->GetMetaDescription());  renderMenu($bSubdir,0,false);  renderGallery(true,false);
  renderCentral(true);

?>  

	<script language=JavaScript1.2>
	<!--
	function open_click(what)
	{
		sStyle = "channelmode=0,directories=0,fullscreen=0,height=650,";
		sStyle += "left=0,location=0,menubar=0,resizable=1,scrollbars=1,";
		sStyle += "status=0,titlebar=1,toolbar=0,top=0,width=850"; 
		window.open(what,"_blank",sStyle);
	}
	//-->
	</script>
<!--============================= CONTENTS START ==========================================-->

<h1><?php echo $publication->GetHeader(); ?></h1>
<h3 align=right><?php echo $publication->GetDateString('PL'); ?></h3>

<?php

$authorprinted = false;

for($i=0; $i < $publication->GetContentSize(); $i++)
{
  $content = $publication->GetContent($i);
  
  switch($content->GetType())
  {
    case 'paragraph_start':
      echo '<P class="publication">';
      break;
    case 'paragraph_end':
      echo '</P>';
      break;
    case 'image_start':
      echo '<TABLE align=center width=80%>';
      break;
    case 'image_end':
      echo '</TABLE>';
      break;
    case 'list_start':
      echo '<UL class="normal">';
      break;
    case 'list_end':
      echo '</UL>';
      break;
    case 'item_start':
      echo '<LI class="normal">';
      break;
    case 'item_end':
      echo '</LI>';
      break;
    case 'txt':
      echo $content->GetText();
      break;
    case 'img':
      echo PasteImage($content);
      break;
    case 'seesection':
      if($authorprinted == false) 
      {
        echo '<h3 align=right>tekst: '.$publication->GetAuthor();
        if ($publication->GetPhotos())
        {
          echo '<BR>zdjęcia: '.$publication->GetPhotos();
        }
        echo '</h3>';
      }
      echo '<h3 align=left>Zobacz także:</h3>';    
      $authorprinted = true;
      break;
    case 'section':
      if($authorprinted == false) 
      {
        echo '<h3 align=right>tekst: '.$publication->GetAuthor();
        if ($publication->GetPhotos())
        {
          echo '<BR>zdjęcia: '.$publication->GetPhotos();
        }
        echo '</h3>';
      }
      $authorprinted = true;
      echo PasteSection($content);
      break;      
    case 'link':
      echo PasteLink($content);
      break;          
  }  
} 

if($authorprinted == false) 
{
  echo '<h3 align=right>tekst: '.$publication->GetAuthor();
  if ($publication->GetPhotos())
  {
    echo '<BR>zdjęcia: '.$publication->GetPhotos();
  }
  echo '</h3>';
}

?>

<!--============================= CONTENTS END   ==========================================-->
<?php renderBottom($bSubdir); ?>
