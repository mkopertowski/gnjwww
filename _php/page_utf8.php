<?php

//including the class file
include('menu.php');
include_once('Renderer.php');

/*

left panel = 136
space between left and center panel width = 10
central panel = 678
space between left and center panel width = 10
right panel 190 

total = 1024

*/

function renderHeadNew($bSubdir,$description="", $keywords="",$title="", $articleId="",$imgId="")
{
	
	if($description == '')
	{
		$description = 'Nurkowanie jaskiniowe i w zalanych podziemiach.
                     Podkomisja Nurkowania Jaskiniowego KTJ PZA oraz
                     Grupa Nurków Jaskiniowych. GNJ. Cave diving and overhead env. diving. Cave Diving Group Poland.';
	}
	
	if($keywords == '')
	{
		$keywords = 'jaskinia,warsztaty,podkomisja,PNJ,GNJ,PZA,cave,diving';
	}
	 
	$dots = '.';
	if($bSubdir == true)
		$dots = '..';
	
	$txt = '<!DOCTYPE html>
		   ';
	/* prepare HEAD section */
	$HeadSection = new Renderer($dots.'/_tpl/page_head.tpl.php');
	
	$HeadSection->set("title",$title);
	$HeadSection->set("description",$description);
	$HeadSection->set("keywords",$keywords);
	$HeadSection->set("dots",$dots);

	/* variables set for facebook plugin */
	$HeadSection->set("articleId",$articleId);
	$HeadSection->set("imgId",$imgId);
		
	$txt .= $HeadSection->parse();
	
	$txt .= '<body>
				<!-- facebook -->
				<div id="fb-root"></div>
				<script>
					(function(d, s, id) {
  						var js, fjs = d.getElementsByTagName(s)[0];
  						if (d.getElementById(id)) return;
  						js = d.createElement(s); js.id = id;
  						js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.0";
  						fjs.parentNode.insertBefore(js, fjs);
					}(document, \'script\', \'facebook-jssdk\'));
				</script>	
					
				<a name=top></a>
				<div align=center>
					<table cellspacing=0 cellpadding=0 width=960>
						<TR height=4>
					  		<TH width=136></TH>
			          		<TH width=10></TH>
			          		<TH width=678>
								<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 	codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" WIDTH=100% HEIGHT=100>
									<PARAM NAME=movie VALUE="'.$dots.'/_gfx/FLASH.swf">
									<PARAM NAME=quality VALUE=high>
									<PARAM NAME=bgcolor VALUE=#000000>
									<EMBED src="'.$dots.'/_gfx/FLASH.swf" quality=high bgcolor=#000000 WIDTH=600 HEIGHT=100 TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></EMBED>
								</object>
					 		</TH>
			          		<TH width=10></TH>
					  		<TH width=190></TH>
						</TR>
			       		<TR valign=middle>';
	echo $txt;

}



//----------------------------------------------------------------------------------------------------
function renderHead($bSubdir,$description="", $keywords="")
{
	$title = 'Nurkowanie Jaskiniowe - Grupa Nurków Jaskiniowych PZA; Cave Diving Poland - Cave Diving Group';

	renderHeadNew($bSubdir,$description,$keywords,$title,"","");
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

  echo $txt;	
}

//----------------------------------------------------------------------------------------------------
function renderUpdates($bSubdir,$date)
{
	$dots = '.';
	if($bSubdir == true)
		$dots = '..';
			
   $txt = '
			<table cellspacing=0 cellpadding=0 width=136>
				<tr>
					<td valign=top align=middle>
						<br>
						<b>
						   OSTATNIA AKTUALIZACJA<br>
						   '.$date.'<br>						   
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
		<td valign=top align=middle width=10>&nbsp;</td>
		<td valign=top align=middle width=678>
			<table cellspacing=0 cellpadding=0 width=678>
				<tr>
					<td valign=top align=middle colspan=0 width=678>
						<table cellspacing=0 cellpadding=0 width=678>
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
	         Copyright &copy; 2014 Grupa Nurków Jaskiniowych KTJ PZA, ver. 8.0<br>&nbsp;

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
						</table>';
	echo $txt;
	renderRightPanel($bSubdir);
	$txt = '	
				</tr>
			</table>
		</div>
		<script type="text/javascript">
		$(window).load(function() {
			$(".flexslider").flexslider({
				controlsContainer: ".flex-container"
			});
		});
		</script>															
	</body>
</html>
';
echo $txt;
}

//----------------------------------------------------------------------------------------------------
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

//----------------------------------------------------------------------------------------------------
function renderRightPanel($bSubdir)
{

  $dots = '.';
  if($bSubdir == true) $dots = '..';

  $txt = '<td valign=top align=middle width=10></td>';
  $txt .= '<td valign=top align=middle width=190>';
  
  // show RSS icon
  $txt .= '<a href="http://www.gnj.org.pl/_rss/rss.php" class="feed-icon"><img src="'.$dots.'/_rss/valid-rss.png" alt="Subskrybuje zawartość" title="Grupa Nurków Jaskiniowych PZA" border="0"></a>';
  
  //$txt .= '<BR><BR>';
  
  // show Facebook plugin
  //$txt .= '<div class="fb-like-box" data-href="https://www.facebook.com/pages/Grupa-Nurk%C3%B3w-Jaskinowych-GNJ-PZA/304624799616421" data-width="190" data-height="270" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="fals"></div>';
  
  $txt .= '<BR><BR><BR><BR>';
  
  // show "PARTNERZY"
  $txt .= '<b>PARTNERZY:</b>';
  $txt .= '<BR>';
  
  $txt.= '<BR><BR><a class="navi" href="http://www.gralmarine.com" target="_blank">
			<IMG src="'.$dots.'/_gfx/gralmarine1.png" border=0>
			</a>';
  $txt.= '<BR><BR><a class="navi" href="http://www.sklep-nurkowy.pl" target="_blank" alt="Sklep-nurkowy.pl">
			<IMG src="'.$dots.'/_gfx/sklepnurkowy1.png" border=0>
			</a>';
  $txt.= '<BR><BR><a class="navi" href="http://www.freefrog.pl" target="_blank">
            <IMG src="'.$dots.'/_gfx/ffgnj.png" border=0>
          </a>';

  $txt .= '</td>';
  
  echo $txt;
}
?>
