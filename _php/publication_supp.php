<?php
//-----------------------------------------------------------------------------function NewSection($caption,$style)
{
  $txt = '
          <table cellspacing=0 cellpadding=3 width=100%>
	       <tr>
		      <td class="'.$style.'" align=left width=100%>
		 	     <B>'.$caption.'</B>
		      </td>
	       </tr>
          </table>
          <br>';
  echo $txt;
}		

//-----------------------------------------------------------------------------	
function StartList()
{
  echo '<ul class="normal">';
}

//-----------------------------------------------------------------------------
function EndList()
{
  echo '</ul>';
}

//-----------------------------------------------------------------------------
function ListItem($tekst)
{
  $txt = '
          <li class="normal">
		      '.$tekst.' 
		      <br>&nbsp;
	       </li>';
  
  echo $txt;
}

function ExtendedListItem($title,$tekst,$link,$linktxt,$data,$autor)
{
  $txt = '
	       <li class="normal">
             <b>'.$title.'</b><br> 
             '.$tekst.' ';
  if($link != '')
  {
    $txt = $txt.'[<a class="navi" href="'.$link.'">'.$linktxt.'</a>]';
  }           
  
  if($data != '')
  {
		$txt = $txt.'<br><br><div align="right"><i>zamieszczono: '.$data.'</i></div>';
  }
             
  if($autor != '')
  {
    $txt = $txt.'<div align="right"><i>autor: '.$autor.'</i></div>';
  }
  
  $txt = $txt.'</li>';
  
  echo $txt;

}

function ExtendedListItemEN($title,$tekst,$link,$linktxt,$data,$autor)
{
  $txt = '
	       <li class="normal">
             <b>'.$title.'</b><br> 
             '.$tekst.' ';
  if($link != '')
  {
    $txt = $txt.'[<a class="navi" href="'.$link.'">'.$linktxt.'</a>]';
  }           
  
  $txt = $txt.'<br><br><div align="right"><i>date: '.$data.'</i></div>';
             
  if($autor != '')
  {
    $txt = $txt.'<div align="right"><i>author: '.$autor.'</i></div>';
  }
  
  $txt = $txt.'</li>';
  
  echo $txt;

}


function Paste2Photos($filename1,$caption1,$orientation1,
                      $filename2,$caption2,$orientation2)
{
  if($orientation1 == 'v')
  {
    $height = '300';
    $width = '225';
  } 
  else
  {
    $height = '225';
    $width = '300';    
  }

  $txt = '
  <table align=center>
	<tr>
		<td align=center>
			<img src="./img/small/'.$filename1.'" alt="'.$caption1.'" height='.$height.' width='.$width.'><br>
			<i>'.$caption1.'</i>
		</td>';

  if($orientation2 == 'v')
  {
    $height = '300';
    $width = '225';
  } 
  else
  {
    $height = '225';
    $width = '300';    
  }
		
	$txt = $txt.'
		<td align=center>
			<img src="./img/small/'.$filename2.'" alt="'.$caption2.'" height='.$height.' width='.$width.'><br>
			<i>'.$caption2.'</i>
		</td>
	</tr>
	</table>';
	
  echo $txt;
}

function PastePhoto($filename1,$caption1,$orientation1)
{
  if($orientation1 == 'v')
  {
    $height = '300';
    $width = '225';
  } 
  else
  {
    $height = '225';
    $width = '300';    
  }

  $txt = '
  <center>
  			<img align=center src="./img/small/'.$filename1.'" alt="'.$caption1.'" height='.$height.' width='.$width.'><br>
			<i>'.$caption1.'</i>
  </center>';			
  echo $txt;
}

function Paste2ExpandPhotos($filename1,$caption1,$orientation1,
                            $filename2,$caption2,$orientation2)
{
  if($orientation1 == 'v')
  {
    $height = '300';
    $width = '225';
  } 
  else
  {
    $height = '225';
    $width = '300';    
  }

  $txt = '
  <table align=center>
	<tr>
		<td align=center>
		   <a class="image2" href="javascript:open_click(\'./img/'.$filename1.'\')">
			<img src="./img/small/'.$filename1.'" alt="'.$caption1.'" height='.$height.' width='.$width.'><br>
			</a>
			<i>'.$caption1.'</i>
		</td>';

  if($orientation2 == 'v')
  {
    $height = '300';
    $width = '225';
  } 
  else
  {
    $height = '225';
    $width = '300';    
  }
		
	$txt = $txt.'
		<td align=center>
		   <a class="image2" href="javascript:open_click(\'./img/'.$filename2.'\')">
			<img src="./img/small/'.$filename2.'" alt="'.$caption2.'" height='.$height.' width='.$width.'><br>
			</a>
			<i>'.$caption2.'</i>
		</td>
	</tr>
	</table>';
	
  echo $txt;
}

?>
