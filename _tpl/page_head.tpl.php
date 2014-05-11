<html class="no-js" lang="pl">
	<head>
		<title><?php echo $this->title; ?></title>
		<meta NAME="DESCRIPTION" CONTENT="<?php echo $this->description; ?>">
		<meta NAME="KEYWORDS" CONTENT="<?php echo $this->keywords; ?>"> 
		<meta http-equiv=content-type content="text/html; charset=UTF-8">	
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="stylesheet" type="text/css" href="<?php echo $this->dots; ?>/_php/css/css.css">

		<link rel="Shortcut icon" href="_gfx/favicon.ico">
		<LINK rel="alternate" type="application/rss+xml" title="Grupa Nurków Jaskiniowych PZA RSS" href="http://www.gnj.org.pl/_rss/rss.xml">

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

	
		<style type="text/css">
			.fancybox-custom .fancybox-skin {
				box-shadow: 0 0 50px #222;
			}

			body {
				max-width: 700px;
				margin: 0 auto;
			}
		</style>
		
		<!-- FlexSlider -->
		<link rel="stylesheet" href="<?php echo $this->dots; ?>/_css/flexslider.css" type="text/css" media="screen">
		<script src="<?php echo $this->dots; ?>/_js/modernizr.js"></script>
		<script defer src="<?php echo $this->dots; ?>/_js/jquery.flexslider.js"></script>
		
		<!-- facebook plugin settings -->
		<meta property="og:title"           content="<?php echo $this->title; ?>" /> 
		
		<?php if( $this->articleId != ""): ?>
			<meta property="og:url"             content="http://gnj.org.pl/_php/show.php?id=<?php echo $this->articleId; ?>"> 
		<?php else: ?>
			<meta property="og:url"             content="http://gnj.org.pl"> 
		<?php endif; ?>
		<?php if( $this->imgId != ""): ?>
			<meta property="og:image"           content="http://gnj.org.pl/_php/mysql_getFile.php?id=<?php echo $this->imgId; ?>&type=data400x266">
		<?php else: ?>
			<meta property="og:image"           content="http://gnj.org.pl/_gfx/logoGNJ.png">
		<?php endif; ?>
		</head>
