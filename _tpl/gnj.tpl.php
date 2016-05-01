<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo $this->dots; ?>/img/favicon.ico">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Grupa Nurków Jaskiniowych</title>

    <!-- Bootstrap -->
    <link href="<?php echo $this->dots; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $this->dots; ?>/css/gnj.css" rel="stylesheet">

    <LINK rel="alternate" type="application/rss+xml" title="Grupa Nurków Jaskiniowych PZA RSS" href="http://gnj.org.pl/_rss/rss.xml">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
		<!-- Zebra_Pagination -->
		<link rel="stylesheet" href="<?php echo $this->dots; ?>/css/zebra_pagination.css" type="text/css">
		
        <!-- jQuery (necessary for Bootstrap's and FancyBox JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>		
		
		<!-- Add mousewheel plugin (this is optional) -->
		<script type="text/javascript" src="<?php echo $this->dots; ?>/js/jquery.mousewheel-3.0.6.pack.js"></script>

		<!-- Add fancyBox main JS and CSS files -->
		<script type="text/javascript" src="<?php echo $this->dots; ?>/js/jquery.fancybox.js?v=2.1.5"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo $this->dots; ?>/css/jquery.fancybox.css?v=2.1.5" media="screen">

		<!-- Add Button helper (this is optional) -->
		<link rel="stylesheet" type="text/css" href="<?php echo $this->dots; ?>/css/jquery.fancybox-buttons.css?v=1.0.5">
		<script type="text/javascript" src="<?php echo $this->dots; ?>/js/jquery.fancybox-buttons.js?v=1.0.5"></script>

		<!-- Add Thumbnail helper (this is optional) -->
		<link rel="stylesheet" type="text/css" href="<?php echo $this->dots; ?>/css/jquery.fancybox-thumbs.css?v=1.0.7">
		<script type="text/javascript" src="<?php echo $this->dots; ?>/js/jquery.fancybox-thumbs.js?v=1.0.7"></script>

		<!-- Add Media helper (this is optional) -->
		<script type="text/javascript" src="<?php echo $this->dots; ?>/js/jquery.fancybox-media.js?v=1.0.6"></script>

		<script type="text/javascript">
		$(document).ready(function() {

			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox({
				'type':'image',
				 padding : 0,
				 helpers: {
				   overlay: {
				      locked: false
				 }
					  }
			});

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});
			
			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});

		});
		
		</script>
	
		<style type="text/css">
			.fancybox-custom .fancybox-skin {
				box-shadow: 0 0 50px #222;
			}

			body {
				margin: 0 auto;
			}
			.metaslider { width: 1024px; }
		</style>
		
		<!-- FlexSlider -->
		<link rel="stylesheet" href="<?php echo $this->dots; ?>/css/flexslider.css" type="text/css" media="screen">
		<script src="<?php echo $this->dots; ?>/js/modernizr.js"></script>
		<script defer src="<?php echo $this->dots; ?>/js/jquery.flexslider.js"></script>
        
  </head>
  <body>
	<!-- facebook -->
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
  			var js, fjs = d.getElementsByTagName(s)[0];
  			if (d.getElementById(id)) return;
  			js = d.createElement(s); js.id = id;
  			js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.0";
  			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>	
  

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo $this->dots; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo $this->dots; ?>/js/salvattore.min.js"></script>
          
  <!-- *******************************************************************************************************  -->
  <a name=top></a>
  <div id="wrap"> <!-- foot to the bottom -->
  
  <!-- *******************************************************************************************************  -->
  <!-- TOP MENU -->
  <!-- *******************************************************************************************************  -->  
  <div id="top-menu-bootstrap-menu" class="navbar navbar-default " role="navigation">
    <div class="container padding25">
        <div class="navbar-header"><a class="navbar-brand" href="<?php echo $this->dots; ?>/index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
           <ul class="nav navbar-nav navbar-left">
                <li><a href="<?php echo $this->dots; ?>/index.php"><img src="<?php echo $this->dots; ?>/img/flag_pl.png"></a>
                </li>
                <li><a href="<?php echo $this->dots; ?>/english/index.php"><img src="<?php echo $this->dots; ?>/img/flag_uk.png"></a>
                </li>
            </ul>
           <form class="navbar-form navbar-right" role="search" method="post" action="<?php echo $this->dots; ?>/search/index.php" enctype="multipart/form-data">
             <div class="form-group">
               <input type="text" class="form-control" placeholder="Szukaj" name="searchString">
             </div>
             <button type="submit" class="btn btn-default">
        	   <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
             </button>
          </form>
        </div>
    </div>
  </div>
  
  <!-- *******************************************************************************************************  -->
  <!-- HEADER -->
  <!-- *******************************************************************************************************  -->
  <div class="container">
        <img class="img-responsive center-block" src="<?php echo $this->dots; ?>/img/header.png">
  </div>
  
  <!-- *******************************************************************************************************  -->
  <!-- MAIN MENU -->
  <!-- *******************************************************************************************************  -->
<div id="main-menu-bootstrap-menu" class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="<?php echo $this->dots; ?>/index.php">AKTUALNOŚCI</a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DZIAŁALNOŚĆ<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo $this->dots; ?>/swiat/index.php">ŚWIAT</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="<?php echo $this->dots; ?>/jaskiniepolska/index.php">POLSKA: JASKINIE I WYWIERZYSKA</a></li>
                    <li><a href="<?php echo $this->dots; ?>/sztolniekopalnie/index.php">OBIEKTY SZTUCZNE: SZTOLNIE, KOPALNIE, STUDNIE</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="<?php echo $this->dots; ?>/warsztaty/index.php">WARSZTATY</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="<?php echo $this->dots; ?>/ratownictwo/index.php">RATOWNICTWO</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ARTYKUŁY<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                       <li><a href="<?php echo $this->dots; ?>/artykuly/index.php">ARTYKUŁY</a></li>
                       <li role="separator" class="divider"></li>
                       <li><a href="<?php echo $this->dots; ?>/osobistosci/index.php">WYBITNE OSOBISTOŚCI</a></li>
                    </ul>
                </li>                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">WIEDZA<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo $this->dots; ?>/technika/index.php">TECHNIKA</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="<?php echo $this->dots; ?>/tatry/syfony.php">SYFONY W TATRACH</a></li>
                    <li><a href="<?php echo $this->dots; ?>/planyiprzekroje/index.php">PLANY / PRZEKROJE</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">GNJ<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo $this->dots; ?>/gnj/index.php">O GNJ</a></li>  
                    <li role="separator" class="divider"></li>
                    <!--
                    <li class="disabled"><a href="<?php echo $this->dots; ?>/gnj/czlonkowie.php">CZŁONKOWIE</a></li>
                    -->
                    <li><a href="<?php echo $this->dots; ?>/gnj/formalnosci.php">FORMALNOŚCI</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="<?php echo $this->dots; ?>/kontakt/index.php">PODKOMISJA KTJ PZA</a></li>
                  </ul>
                </li>
                <li><a href="<?php echo $this->dots; ?>/partnerzy/index.php">PARTNERZY</a>
                </li>
                <li><a href="<?php echo $this->dots; ?>/kontakt/index.php">KONTAKT</a>
                </li>
            </ul>
        </div>
    </div>
</div>  
  
  
  <!-- *******************************************************************************************************  -->
  <!-- CONTENT -->
  <!-- *******************************************************************************************************  -->
  <?php echo $this->Content; ?>
  
  <div id="push"></div> <!--foot to the bottom  -->
  </div> <!-- id="wrap"  -->

  <!-- *******************************************************************************************************  -->
  <!-- FOOTER -->
  <!-- *******************************************************************************************************  -->
  <div id="footer">
      <div class="container">
      <div class="row paddingtop10">
        <div class="col-md-7">
        	<h3>Śledź nas na:
        	    <a href="https://www.facebook.com/pages/GNJ-PZA-Grupa-Nurk%C3%B3w-Jaskiniowych/1467101870223180"><img width="30" src="<?php echo $this->dots; ?>/img/facebook.png" alt="Grupa Nurków Jaskiniowych PZA"></a>
        	    <a href="https://www.youtube.com/channel/UCqmgRt5FJsDzU5a2lMWjtTA/videos"><img width="30" src="<?php echo $this->dots; ?>/img/youtube.png" alt="Grupa Nurków Jaskiniowych PZA"></a>
        	</h3>    
        	<h3>Grupa Nurków Jaskiniowych PZA. Wszelkie prawa zastrzeżone 2015.</h3>
        </div>
        <div class="col-md-4 paddingtop10">
        	<h4>Aktualizacja: <?php echo getLastUpdateMYSQL($this->mysqli); ?></h4>
            <a href="http://www.gnj.org.pl/_rss/rss.php" class="feed-icon"><img width="30" src="<?php echo $this->dots; ?>/img/rss.png" alt="Subskrybuje zawartość" title="Grupa Nurków Jaskiniowych PZA" border="0"></a>
        </div>
  		<div class="col-md-1 paddingtop10"><div><a href="#top"><img src="<?php echo $this->dots; ?>/img/do_gory.png"></a></div></div>
	 </div>
     </div>
  </div>
  
  <script type="text/javascript">
	$(window).load(function() {
	  $('.flexslider').flexslider({
	    controlsContainer: '.flex-container',
	  });
	});
  </script>
  
  </body>
</html>