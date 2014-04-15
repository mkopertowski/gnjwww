<?php

/*

total = 760
left panel = 136
space between left and center panel width = 10
central panel = 614

*/

//----------------------------------------------------------------------------------------------------
function renderHead($bSubdir,$description,$keywords)
{
	$title = 'Nurkowanie Jaskiniowe - Grupa Nurków Jaskiniowych PZA - Nurkowanie w Jaskiniach i pod Ziemią';

   if($description == '')
   {
     $description = 'Nurkowanie jaskiniowe i w zalanych podziemiach. 
                     Podkomisja Nurkowania Jaskiniowego KTJ PZA oraz 
                     Grupa Nurków Jaskiniowych.';
   }

   if($keywords == '')
   {
     $keywords = 'nurkowanie, jaskiniowe, jaskinie, speleologia, warsztaty, 
                  podkomisja, nurkowania, jaskiniowego, PNJ, grupa, nurków, 
                  jaskiniowych, GNJ';
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
		<LINK rel="stylesheet" type="text/css" href="'.$dots.'/libs/css/css.css">
	</head>
	<body>
		<a name=top></a>
		<div align=center>
		  <table cellspacing=0 cellpadding=0 width=760>
		    <tr>
				<th colspan="3" valign=top align=center>
					<TABLE class="noborder" cellspacing=0 cellpadding=0><TR><TD>       
						<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 	codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" WIDTH=100% HEIGHT=100>
							<PARAM NAME=movie VALUE="'.$dots.'/_gfx/FLASH.swf"> 
							<PARAM NAME=quality VALUE=high> 
							<PARAM NAME=bgcolor VALUE=#000000> 
							<EMBED src="'.$dots.'/_gfx/FLASH.swf" quality=high bgcolor=#000000 WIDTH=760 HEIGHT=100 TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></EMBED>
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
function renderTopMenu($bSubdir)
{
  $dots = '.';
  if($bSubdir == true)
	 $dots = '..';

  $txt = '<TH align=middle>
            <TABLE class="noborder" cellspacing=0 cellpadding=0 width=136>
	           <tr valign=middle>
	             <td align=left><div id="menuV" align=left>';

  $txt .= renderMenuItem($dots,'STRONA GŁÓWNA','','STRONA GŁÓWNA');
                  
  $txt .= '     </div>
            </TABLE>  
          <TH>
          <TH>            
	         <TABLE class="noborder" cellspacing=0 cellpadding=0 width=614>
	           <tr>
	             <td><div id="menuH" align=left>
	             <ul>
                  <li>'.renderMenuItem($dots,'NURKOWANIE JASKINIOWE','/wstep','NURKOWANIE JASKINIOWE').'</li>
                  <li>'.renderMenuItem($dots,'KONTAKT: PNJ i GNJ','/kontakt','KONTAKT: PNJ i GNJ').'</li>
                  <li>'.renderMenuItem($dots,'LINKI','/linki','LINKI').'</li>
                </ul>
                </div>
            </TABLE>
          <TR height=4>
 			   <TH colspan="3" height=4>
 			 <TR>
  ';
  echo $txt;
}
//----------------------------------------------------------------------------------------------------function renderMenu($bSubdir,$nActive,$bClickable)
{
	$dots = '.';
	if($bSubdir == true)
		$dots = '..';

   renderTopMenu($bSubdir);

	$txt = '<td valign=top align=middle width=136>
	        <table class="noborder" cellspacing=0 cellpadding=0 width=136>
	        <tr><td><div id="menuV">';
	
	$txt .= renderMenuItem($dots,'OGŁOSZENIA','/ogloszenia','Ogloszenia');
	$txt .= renderMenuItem($dots,'WARSZTATY','/warsztaty','Informacje o Warsztatch Nurkowania Jaskiniowego');
	$txt .= renderMenuItem($dots,'TECHNIKA','/szkolenie','Podstawowe zasady nurkowania w jaskiniach');
	$txt .= renderMenuItem($dots,'ARTYKUŁY','/artykuly','Opisy wypadków');
	$txt .= renderMenuItem($dots,'POLSKA','/polska','Opisy nurkowań w kraju');
	$txt .= renderMenuItem($dots,'ŚWIAT','/swiat','Wyprawy');
   $txt .= renderMenuItem($dots,'GNJ','/gnj','Grupa Nurków Jaskiniowych');
   $txt .= renderMenuItem($dots,'RATOWNICTWO','/ratownictwo','Ratownictwo Nurkowo-Jaskiniowe');
   $txt .= renderMenuItem($dots,'FORMALNOŚCI','/formalnosci','Formalności');

	$txt .= '</div></td></tr></table>';

	$txt .= '<table cellspacing=0 cellpadding=0 width=136>
	        <tr height=5><tr><td><div align=center>';
					
	$txt .= '<a class="image2" href="'.$dots.'/english/index.php"><img border="0" src="'.$dots.'/_gfx/flaga_en.gif"></a>';
	$txt .= '</div></td></tr></table>';
	
	echo $txt;
}
//----------------------------------------------------------------------------------------------------
function renderMenuItem($DOTS,$NAME,$URL,$ALT)
{
	$txt = '<a href="'.$DOTS.$URL.'/index.php" alt="'.$ALT.'">'.$NAME.'</a>';

	return $txt;
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

  $txt = '<BR><TABLE align=center border=0 cellspacing=0 cellpadding=0>';

  $txt.= '<TR height=10>
          <TD background="'.$dots.'/_gfx/perf.gif">';
  
  $txt.= '<TR>
			 <TD valign=top align=center>
				 <script language="JavaScript1.2" src="'.$dots.'/_img/random/script'.$english.'.js"></script>';
             
  $txt.= '<TR height=10>
			 <TD background="'.$dots.'/_gfx/perf.gif">';
				 
  $txt.= '</TABLE>';
  
  echo $txt;	
}
//----------------------------------------------------------------------------------------------------
function renderUpdates($bSubdir)
{
	return "";
}
//----------------------------------------------------------------------------------------------------function renderCentral($bSubdir)
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
	$year = '2004';
	$version = '5.4';

	$dots = '.';
	if($bSubdir == true)
		$dots = '..';

	$txt = '
												<br>&nbsp;<br>
												<div align=center>
													<hr>
													<font face="tahoma, verdana, arial, helvetica, geneva, sans-serif" color=#666666 size=-2>
														Copyright &copy; '.$year.' Podkomisja Nurkowania Jaskiniowego KTJ PZA, ver. '.$version.'<br>&nbsp;
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
?>

	<script language=JavaScript1.2>
	<!--
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
	//-->
	</script>


