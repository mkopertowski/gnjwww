<?php

//including the class file
include('menu.php');

/*

total = 760
left panel = 136
space between left and center panel width = 10
central panel = 614

*/

//----------------------------------------------------------------------------------------------------
function renderHead($bSubdir,$description="", $keywords="")
{
	$title = 'Nurkowanie Jaskiniowe - Grupa Nurków Jaskiniowych PZA; Cave Diving Poland - Cave Diving Group';

   if($description == '')
   {
     $description = 'Nurkowanie jaskiniowe i w zalanych podziemiach. 
                     Podkomisja Nurkowania Jaskiniowego KTJ PZA oraz 
                     Grupa Nurków Jaskiniowych. Cave diving and overhead env. diving. Cave Diving Group Poland.';
   }

   if($keywords == '')
   {
     $keywords = 'nurkowanie, jaskiniowe, jaskinie, speleologia, warsztaty, 
                  podkomisja, nurkowania, jaskiniowego, PNJ, grupa, nurków, 
                  jaskiniowych, GNJ, cave, diving, group, poland';
   }
   
	$dots = '.';
	if($bSubdir == true)
		$dots = '..';

	$txt = '
<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
	<head>
	
		<title>'.$title.'</title>
                <META NAME="DESCRIPTION" CONTENT="'.$description.'">
                <META NAME="KEYWORDS" CONTENT="'.$keywords.'"> 
		<meta http-equiv=content-type content="text/html; charset=UTF-8">	
		<LINK rel="stylesheet" type="text/css" href="'.$dots.'/_php/css/css.css">
		
		<!-- mediabox advanced -->
        <link rel="stylesheet" href="'.$dots.'/_css/mediaboxAdvBlack21.css" type="text/css" media="screen" /> 
        <script src="'.$dots.'/_js/mootools-1.2.5-core-nc.js" type="text/javascript"></script> 
        <script src="'.$dots.'/_js/quickie.js" type="text/javascript"></script> 
        <script src="'.$dots.'/_js/mediaboxAdv-1.3.4b.js" type="text/javascript"></script>				
								
		<link rel="Shortcut icon" href="_gfx/favicon.ico">
		<LINK rel="alternate" type="application/rss+xml" title="Grupa Nurków Jaskiniowych PZA RSS" href="http://www.gnj.org.pl/_rss/rss.xml">

	</head>
	<body>


		
		<a name=top></a>
		<div align=center>
		


		
		
		  <table cellspacing=0 cellpadding=0 width=760>
		    <tr>
				<th colspan="3" valign=top align=right>
					<TABLE class="noborder" cellspacing=0 cellpadding=0><TR><TD>       
						<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 	codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" WIDTH=100% HEIGHT=100>
							<PARAM NAME=movie VALUE="'.$dots.'/_gfx/FLASH.swf"> 
							<PARAM NAME=quality VALUE=high> 
							<PARAM NAME=bgcolor VALUE=#000000> 
							<EMBED src="'.$dots.'/_gfx/FLASH.swf" quality=high bgcolor=#000000 WIDTH=600 HEIGHT=100 TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></EMBED>
						</object>			
					</TABLE>							
			 <TR height=4>				
			   <th width=136>
			   <th width=10>
			   <th width=614>
			 <TR valign=middle>  
';
	echo $txt;	
}
//----------------------------------------------------------------------------------------------------
function renderTopMenu($bSubdir,$ActiveMenuTitle)
{
  $dots = '.';
  if($bSubdir == true)
	 $dots = '..';

  // render link do strony glownej
  if($ActiveMenuTitle=="STRONA GŁÓWNA") {
    $id = "MainMenuXActive";
  } else {
    $id = "MainMenuX";
  }
  $txt = '<TD align=middle>
  

  <a href="http://www.gnj.org.pl/_rss/rss.xml" class="feed-icon"><img src="'.$dots.'/_rss/rss.png" alt="Subskrybuje zawartość" title="Grupa Nurków Jaskiniowych PZA">

  
  <div id="'.$id.'">';
  $txt .= '<a href="'.$dots.'/index.php" alt="STRONA GŁÓWNA">STRONA GŁÓWNA</a>';
  $txt .= '</div>';
  echo $txt;

  // render top menu
  $txt = '<TD><TD><div id="MainMenuH">
	    <ul>
              <li>'.renderMenuItem($dots,'NURKOWANIE JASKINIOWE.Cave Diving Poland','/wstep','NURKOWANIE JASKINIOWE',$ActiveMenuTitle).'</li>
              <li>'.renderMenuItem($dots,'GALERIA','/galeria','GALERIA',$ActiveMenuTitle).'</li>
              <li>'.renderMenuItem($dots,'KONTAKT: GNJ (PNJ)','/kontakt','KONTAKT: PNJ i GNJ',$ActiveMenuTitle).'</li>
              <li>'.renderMenuItem($dots,'LINKI','/linki','LINKI',$ActiveMenuTitle).'</li>
            </ul>
          </div>';
  echo $txt;
   
  // render space
  $txt = '<TR height=10>
 	  <TH>
            <div align=center><hr color="#005273"></div>
          <TH colspan="2">

          
 	  <TR>';
  echo $txt;
}
//----------------------------------------------------------------------------------------------------
function renderMenu($bSubdir,$nActive,$bClickable,$ActiveMenuTitle= "",$ActiveSubMenuTitle= "")
{

  $dots = '.';
  if($bSubdir == true) $dots = '..';

  renderTopMenu($bSubdir,$ActiveMenuTitle);

  $txt = '<td valign=top align=middle width=136>';

  echo $txt;

  //creating a new menu object
  $menu = new CMenu();

  //menu
  include('menutree.php');

  //Generating the code
  $code = $menu->generateMenu($ActiveMenuTitle,$ActiveSubMenuTitle);

  //Using the code in the webpage
  echo "<div style=\"width:136px;\">".$code['html']."</div>";

  $txt  = '<div align=center>';
					
			
					
  $txt .= '<a class="Cave diving" href="'.$dots.'/english/cave_diving_poland.php"><img border="0" src="'.$dots.'/_gfx/cave_diving_poland.gif"></a>';

  
  $txt .= '</div>';
	
  echo $txt;
}
//----------------------------------------------------------------------------------------------------
function renderMenuItem($DOTS,$NAME,$URL,$ALT,$ActiveMenuTitle)
{
  if($ActiveMenuTitle==$NAME) {
    return '<a class="MainMenuHActive" href="'.$DOTS.$URL.'/index.php" alt="'.$ALT.'">'.$NAME.'</a>';
  } else {
    return '<a class="MainMenuH" href="'.$DOTS.$URL.'/index.php" alt="'.$ALT.'">'.$NAME.'</a>';
  }
}
//----------------------------------------------------------------------------------------------------
function renderGallery($bSubdir,$bEnglish)
{
  $english = '';
  if($bEnglish == true)
	 $english = '_en';
  $dots = '.';
  if($bSubdir == true)
	 $dots = '..';

  $randomImage = ((time() % 60) + 1).'.jpg';
  $path = $dots.'/_img/random/'.$randomImage;
  $size = getimagesize($path);

  $txt = '<BR><TABLE align=center border=0 cellspacing=0 cellpadding=0>';

  $txt.= '<TR height=10>
          <TD background="'.$dots.'/_gfx/perf.gif">';
  
  $txt.= '<TR>
          <TD valign=top align=center>';
             
  $txt.= '<A href="'.$dots.'/galeria/index.php">
            <IMG alt="Nasze zdjęcia!" src="'.$path.'" '.$size[3].' name=imageSmall border="0">
          </A>';

  $txt.= '<TR height=10>
			 <TD background="'.$dots.'/_gfx/perf.gif">';
			 

			 
				 
  $txt.= '</TABLE>';
  
  echo $txt;	
}
//----------------------------------------------------------------------------------------------------
function renderPZA($bSubdir)
{
  $dots = '.';
  if($bSubdir == true)
	 $dots = '..';

  $txt = '<BR><IMG src="'.$dots.'/_gfx/logoGNJ.png" border=0>';

  $txt.= '<BR><a class="navi" href="http://www.pza.org.pl">
            <IMG src="'.$dots.'/_gfx/logoPZA.png" border=0>
          </a>';
  $txt.= '<BR><a class="navi" href="https://www.facebook.com/pages/Grupa-Nurk%C3%B3w-Jaskinowych-GNJ-PZA/304624799616421">
            <IMG src="'.$dots.'/_gfx/fb.png" border=0>
          </a>';
  $txt.= '<BR><BR><a class="navi" href="https://www.freefrog.pl">
            <IMG src="'.$dots.'/_gfx/ffgnj.png" border=0>
          </a>';
  $txt.= '<BR><BR><a class="navi" href="http://www.gralmarine.com" target="_blank">
			<IMG src="./_gfx/gralmarine1.png" border=0>
			</a>';

  echo $txt;	
}

//----------------------------------------------------------------------------------------------------
function renderUpdates($bSubdir)
{
	$dots = '.';
	if($bSubdir == true)
		$dots = '..';

   //date of the update is read from the following file
	$filecontent = file($dots."/aktualnosci/update.txt");
	$date = $filecontent[0];
			
   $txt = '
			<table cellspacing=0 cellpadding=0 width=136>
				<tr>
					<td valign=top align=middle>
						<br>
						<b>
						   OSTATNIA AKTUALIZACJA<br>
						   <a class="navi" href="'.$dots.'/aktualnosci/zmiany.php">'.$date.'</a><br>						   
						</b>
					
					</td>
				</tr>
			</table>
	';
	echo $txt;   
}
//----------------------------------------------------------------------------------------------------
function renderCentral($bSubdir)
{
	$dots = '.';
	if($bSubdir == true)
		$dots = '..';

	$txt = '
		</td>
		<td valign=top align=middle width=10><img height=1 src="'.$dots.'/_gfx/1pix.gif" width=10><br></td>
		<td valign=top align=middle width=614>
			<table cellspacing=0 cellpadding=0 width=614>
				<tr>
					<td valign=top align=middle colspan=0 width=614>
						<table cellspacing=0 cellpadding=0 width=614>
							<tr>							
								<td valign=top align=middle width=10 bgcolor=#000000>
								<td valign=top align=left bgcolor=#000000>
									<br>
	';
	echo $txt;
}
//----------------------------------------------------------------------------------------------------
function renderBottom($bSubdir)
{
	$dots = '.';
	if($bSubdir == true)
		$dots = '..';




	$txt = '
												<br>&nbsp;<br>
												<div align=center>
													<hr>
													<font face="tahoma, verdana, arial, helvetica, geneva, sans-serif" color=#666666 size=-2>
	         Copyright &copy; 2012 Grupa Nurków Jaskiniowych KTJ PZA, ver. 7.0<br>&nbsp;

													</font>
												</div>
											</td>
											<td valign=top align=middle width=10 bgcolor=#000000>
												<img height=1 src="'.$dots.'/_gfx/1pix.gif" width=10></td>
										</tr>

									</table>
								</td>
							</tr>
							<tr>
								<td valign=top align=right colspan=2>
									<a class="navi" href="#top">
									
							
										Początek strony
									</a>
									<br>
									<br>
									

									
								</td>
							</tr>
						</table>
				</tr>
			</table>
		</div>
	</body>
</html>
';
echo $txt;
}
//----------------------------------------------------------------------------------------------------
function renderCounter()
{
	$txt = '<a target=_top href="http://stat.4u.pl/?pnjktj"><img src="http://adstat.4u.pl/s4u.gif" border="0"></a>
           <img alt="" src="http://stat.4u.pl/cgi-bin/s.cgi?i=pnjktj&amp;r=ns" width="1" height="1">';
	echo $txt;
}

function ConvertSec2SectionName($sec)
{
	switch($sec)
	{
		case "ratownictwo": return "RATOWNICTWO";
		case "swiat": return "ŚWIAT";
		case "szkolenie": return "TECHNIKA";
                case "artykuly": return "ARTYKUŁY";
	}
}


?>

	<script language=JavaScript1.2>

	function open_click(what,height,width)
	{
		sStyle = "channelmode=0,directories=0,fullscreen=0,";
		sStyle += "left=0,location=0,menubar=0,resizable=1,scrollbars=1,";
		sStyle += "status=0,titlebar=0,toolbar=0,titlebar=0,top=0,"; 
                sStyle += "height=";
                sStyle += height;
                sStyle += ",width=";
                sStyle += width;
		window.open(what,"_blank",sStyle);
	}

        function OpenGalleryWindow(img,title,h,w)
        {
          var ww = w+75;  // Make room for scrollbars
          var wh = h+60; // and a close button
          var params = 'width='+ww+',height='+wh+',scrollbars,resizable';

          // Build the output and store it all in msg
          var msg='<html><head><title>'+title+'</title></head><body onclick="javascript:window.close();"><div align="center">'+
                  '<form><input type="button" onclick="javascript:window.close();" value="Zamknij okno"><br>\n</form>'+
                  '<img src="'+img+'" width="'+w+'" height="'+h+'" border="0" alt="'+title+'"><br>\n'+
                  '</div></body></html>\n';

          // Write it all out
          var win = open('','_blank',params);
          win.document.write(msg);
          win.document.close();        
        }

	</script>


