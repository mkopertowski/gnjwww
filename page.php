<?php
//----------------------------------------------------------------------------------------------------
function renderHead($bSubdir)
{
	$title = 'Nurkowanie Jaskiniowe - Podkomisja Nurkowania Jaskiniowego PZA - Nurkowanie w Jaskiniach i pod Ziemią';

	$dots = '.';
	if($bSubdir == true)
		$dots = '..';

	$txt = '
<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
	<head>
		<title>'.$title.'</title>
                <META NAME="DESCRIPTION" CONTENT="Nurkowanie jaskiniowe i w zalanych
podziemiach. Podkomisja Nurkowania Jaskiniowego KTJ PZA oraz Grupa Nurków
Jaskiniowych.">
                <META NAME="KEYWORDS" CONTENT="nurkowanie, jaskiniowe, jaskinie, speleologia, warsztaty, podkomisja, nurkowania, jaskiniowego, PNJ, grupa, nurków, jaskiniowych, GNJ"> 
		<meta http-equiv=content-type content="text/html; charset=windows-1250">	
		<LINK rel="stylesheet" type="text/css" href="'.$dots.'/_gfx/css.css">
	</head>
	<body>
		<a name=top></a>
		<div align=left>
			<table cellspacing=0 cellpadding=0 width=980>
				<tr>
					<td valign=top align=center>
						<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 	codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" WIDTH=100% HEIGHT=100>
							<PARAM NAME=movie VALUE="'.$dots.'/_gfx/FLASH.swf"> 
							<PARAM NAME=quality VALUE=high> 
							<PARAM NAME=bgcolor VALUE=#000000> 
							<EMBED src="'.$dots.'/_gfx/FLASH.swf" quality=high bgcolor=#000000 WIDTH=100% HEIGHT=100 TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></EMBED>
						</object>
						<br>&nbsp;
					</td>
				</tr>
			</table>
			<table cellspacing=0 cellpadding=0 width=980>
			<tr>
				<td valign=top align=middle width=136>
';
	echo $txt;
}
//----------------------------------------------------------------------------------------------------
function renderMenu($bSubdir,$nActive,$bClickable)
{
	$dots = '.';
	if($bSubdir == true)
		$dots = '..';

	$txt = '
			<table cellspacing=0 cellpadding=0 width="100%">
				<tr>
					<td valign=top align=middle>
						<a href="'.$dots.'/index.php">
							<img height=19
								alt="Strona główna" 
								src="'.$dots.'/_gfx/menu_on.gif" 
								width=136 name=menu border="0"></a><br>
	';
	$txt .= renderMenuItem(2,$dots,'aktual',$nActive,$bClickable,'/aktualnosci/index.php','Co nowego na Stronie ?');
	$txt .= renderMenuItem(12,$dots,'ogloszenia',$nActive,$bClickable,'/ogloszenia/index_blank.php','Ogloszenia');
	$txt .= renderMenuItem(3,$dots,'szkolenie',$nActive,$bClickable,'/szkolenie/index.php','Podstawowe zasady nurkowania w jaskiniach');
	$txt .= renderMenuItem(4,$dots,'warsztaty',$nActive,$bClickable,'/warsztaty/index.php','Informacje o Warsztatch Nurkowania Jaskiniowego');
	$txt .= renderMenuItem(5,$dots,'polska',$nActive,$bClickable,'/polska/index.php','Opisy nurkowań w kraju');
	$txt .= renderMenuItem(6,$dots,'swiat',$nActive,$bClickable,'/swiat/index.php','Wyprawy');
	$txt .= renderMenuItem(7,$dots,'artykuly',$nActive,$bClickable,'/artykuly/index.php','Opisy wypadków');
	$txt .= renderMenuItem(8,$dots,'kontakt',$nActive,$bClickable,'/kontakt/index.php','Kontakt');
	$txt .= renderMenuItem(9,$dots,'linki',$nActive,$bClickable,'/linki/index.php','Linki');
	$txt .= renderMenuItem(10,$dots,'english',$nActive,$bClickable,'/english/index.php','English articles');
	$txt .= renderMenuItem(11,$dots,'GNJ',$nActive,$bClickable,'/gnj/index.php','Grupa Nurków Jaskiniowych');
    $txt .= renderMenuItem(13,$dots,'ratownictwo',$nActive,$bClickable,'/ratownictwo/index.php','Ratownictwo Nurkowo-Jaskiniowe');
    $txt .= renderMenuItem(14,$dots,'czlonkowie',$nActive,$bClickable,'/czlonkowie/czlonkowie.php','Członkowie GNJ');
    $txt .= renderMenuItem(15,$dots,'odeszli',$nActive,$bClickable,'/odeszli/index.php','Odeszli od nas');

	$txt .= '
						<img height=5 alt="" src="'.$dots.'/_gfx/menu_bottom.gif" width=136><br>
					</td>
				</tr>
			</table>
	';
	
	echo $txt;
}
//----------------------------------------------------------------------------------------------------
function renderMenuItem($id,$dots,$icon,$nActiveId,$bClickable,$url,$alt)
{
	$txt = '';
	if(!($bClickable == false && $id == $nActiveId))
		$txt .= '<a href="'.$dots.$url.'">';
	$txt .= '<img src="'.$dots.'/_gfx/'.$icon.'_';
	
	if($id == $nActiveId)
	{
		$txt .= 'on.gif" ';
	}
	else
	{
		$txt .= 'off.gif" ';
		$txt .= 'onmouseover="image'.$id.'.src=\''.$dots.'/_gfx/'.$icon.'_on.gif\'" ';
		$txt .= 'onmouseout="image'.$id.'.src=\''.$dots.'/_gfx/'.$icon.'_off.gif\'" ';
	}
	$txt .= 'height=17 alt="'.$alt.'" width=136 name=image'.$id.' border="0">';
	if(!($bClickable == false && $id == $nActiveId))
		$txt .= '</a>';
	$txt .= '<br>';

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

	$txt = '
			<table cellspacing=0 cellpadding=0 width="100%">
				<tr>
					<td valign=top align=middle>
						<br>
						<img height=19 src="'.$dots.'/_gfx/galeriarandom.gif" width=136><br>
						<img height=98 src="'.$dots.'/_gfx/galeriarandom_left.gif" width=6><script language="JavaScript1.2" src="'.$dots.'/_img/random/script'.$english.'.js"></script><img height=98 src="'.$dots.'/_gfx/galeriarandom_right.gif" width=6><br>
						<img height=3 alt=136 src="'.$dots.'/_gfx/galeriarandom_bottom.gif"><br>
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
		<td valign=top align=middle width=16><img height=1 src="'.$dots.'/_gfx/1pix.gif" width=16><br></td>
		<td valign=top align=middle width=828>
			<table cellspacing=0 cellpadding=0 width=828>
				<tr>
					<td valign=bottom align=center width=828><img height=2 alt="" src="'.$dots.'/_gfx/top_left_corner.gif" width=2><img height=2 alt="" src="'.$dots.'/_gfx/top.gif" width=824><img height=2 alt="" src="'.$dots.'/_gfx/top_right_corner.gif" width=2><br>
					</td>
				</tr>
				<tr>
					<td valign=top align=middle colspan=2 width=828>
						<table cellspacing=0 cellpadding=0 width=828>
							<tr>
								<td valign=top align=middle width=1 bgcolor=#000000>
									<img height=1 src="'.$dots.'/_gfx/1pix.gif" width=1></td>
								<td valign=top align=middle width=1 bgcolor=#1fa0cf>
									<img height=1 src="'.$dots.'/_gfx/1pix.gif" width=1></td>
								<td valign=top align=middle width=10 bgcolor=#000000>
									<img height=1 src="'.$dots.'/_gfx/1pix.gif" width=10></td>
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
											<td valign=top align=middle width=1 bgcolor=#1fa0cf>
												<img height=1 src="'.$dots.'/_gfx/1pix.gif" width=1></td>
											<td valign=top align=middle width=1 bgcolor=#000000>
												<img height=1 src="'.$dots.'/_gfx/1pix.gif" width=1></td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td valign=top align=right colspan=2>
									<img height=2 src="'.$dots.'/_gfx/bottom_left_corner.gif" width=2><img height=2 src="'.$dots.'/_gfx/bottom.gif" width=824><img height=2 src="'.$dots.'/_gfx/bottom_right_corner.gif" width=2><br>
									<a class="navi" href="#top">
										Początek strony
									</a>
									<br>
								</td>
							</tr>
						</table>
					</td>
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
	$txt = '
			<table cellspacing=0 cellpadding=0 width="100%">
				<tr>
					<td align=center valign=center>
						<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;
						<!-- STATYSTYKA -->
						<script language="JavaScript" src="http://count.mystat.pl/count.js"></script>
						<script language="JavaScript">
						<!--
						   par="?s=nurekpza&p=index.html&c=logo9"
						   if (window.writeMyStat) writeMyStat();
						//-->
						</script>
						<noscript><a href="http://www.mystat.pl" target="_top"><img width=24 height=10  src="http://www.mystat.pl/servlet/count.gif?s=nurekpza&p=index.html&c=logo9"></a></noscript>
						<!-- prosze nie usuwac tego komentarza -->
						<!-- Kod statystyk MyStat - koniec -->
					</td>
				</tr>
			</table>
	';
	echo $txt;
}
?>
