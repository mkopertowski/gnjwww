<html lang="pl">
	<head>
		<title><?php echo $this->title; ?></title>
		<meta NAME="DESCRIPTION" CONTENT="<?php echo $this->description; ?>">
		<meta NAME="KEYWORDS" CONTENT="<?php echo $this->keywords; ?>"> 
		<meta http-equiv=content-type content="text/html; charset=UTF-8">	
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta property="fb:admins" content="100003381500140,100001034079911" />
		<link rel="stylesheet" type="text/css" href="<?php echo $this->dots; ?>/_css/css.css">

		<link rel="shortcut icon" href="_gfx/favicon.ico">
		<link rel="apple-touch-icon" sizes="57x57" href="_gfx/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="114x114" href="_gfx/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="_gfx/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="144x144" href="_gfx/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="60x60" href="_gfx/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="120x120" href="_gfx/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="_gfx/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="152x152" href="_gfx/apple-touch-icon-152x152.png">
		<link rel="icon" type="image/png" href="_gfx/favicon-196x196.png" sizes="196x196">
		<link rel="icon" type="image/png" href="_gfx/favicon-160x160.png" sizes="160x160">
		<link rel="icon" type="image/png" href="_gfx/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="_gfx/favicon-16x16.png" sizes="16x16">
		<link rel="icon" type="image/png" href="_gfx/favicon-32x32.png" sizes="32x32">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-TileImage" content="_gfx/mstile-144x144.png">
		<meta name="msapplication-config" content="_gfx/browserconfig.xml">		
		
		<LINK rel="alternate" type="application/rss+xml" title="Grupa Nurków Jaskiniowych PZA RSS" href="http://gnj.org.pl/_rss/rss.xml">

		<!-- facebook plugin settings -->
		<meta property="og:title"           content="<?php echo $this->title; ?>" /> 
		
		<?php if( $this->articleId != ""): ?>
		<meta property="og:url"             content="http://gnj.org.pl/_php/show.php?id=<?php echo $this->articleId; ?>" /> 
		<meta property="og:type" content="article" />
		<?php else: ?>
		<meta property="og:url"             content="http://gnj.org.pl" />
		<meta property="og:type" content="website" /> 
		<?php endif; ?>
		<?php if( $this->imgId != ""): ?>
		<meta property="og:image"           content="http://gnj.org.pl/_php/mysql_getFile.php?id=<?php echo $this->imgId; ?>&type=data400x266" />
		<?php else: ?>
		<meta property="og:image"           content="http://gnj.org.pl/_gfx/logoGNJ.png" />
		<?php endif; ?>
		<meta property="og:description"     content="<?php echo $this->description; ?>" />
		
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
		
		<!-- Zebra_Pagination -->
		<link rel="stylesheet" href="<?php echo $this->dots; ?>/_css/zebra_pagination.css" type="text/css">
		
		<!-- Add jQuery library -->
		<script type="text/javascript" src="<?php echo $this->dots; ?>/_js/jquery-1.10.1.min.js"></script>

		<!-- Add mousewheel plugin (this is optional) -->
		<script type="text/javascript" src="<?php echo $this->dots; ?>/_js/jquery.mousewheel-3.0.6.pack.js"></script>

		<!-- Add fancyBox main JS and CSS files -->
		<script type="text/javascript" src="<?php echo $this->dots; ?>/_js/jquery.fancybox.js?v=2.1.5"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo $this->dots; ?>/_css/jquery.fancybox.css?v=2.1.5" media="screen">

		<!-- Add Button helper (this is optional) -->
		<link rel="stylesheet" type="text/css" href="<?php echo $this->dots; ?>/_css/jquery.fancybox-buttons.css?v=1.0.5">
		<script type="text/javascript" src="<?php echo $this->dots; ?>/_js/jquery.fancybox-buttons.js?v=1.0.5"></script>

		<!-- Add Thumbnail helper (this is optional) -->
		<link rel="stylesheet" type="text/css" href="<?php echo $this->dots; ?>/_css/jquery.fancybox-thumbs.css?v=1.0.7">
		<script type="text/javascript" src="<?php echo $this->dots; ?>/_js/jquery.fancybox-thumbs.js?v=1.0.7"></script>

		<!-- Add Media helper (this is optional) -->
		<script type="text/javascript" src="<?php echo $this->dots; ?>/_js/jquery.fancybox-media.js?v=1.0.6"></script>

		<script type="text/javascript">
		$(document).ready(function() {

			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox({
				'type':'image',
				 padding : 0
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
		<link rel="stylesheet" href="<?php echo $this->dots; ?>/_css/flexslider.css" type="text/css" media="screen">
		<script src="<?php echo $this->dots; ?>/_js/modernizr.js"></script>
		<script defer src="<?php echo $this->dots; ?>/_js/jquery.flexslider.js"></script>
		
				
		</head>
