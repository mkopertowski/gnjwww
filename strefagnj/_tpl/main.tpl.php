<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta name="description" content="description"/>
	<meta name="keywords" content="keywords"/>
	<meta name="author" content="author"/>
	<link rel="stylesheet" type="text/css" href="default.css" media="screen"/>
    <link rel="Shortcut icon" href="../_gfx/favicon.ico">
	<title>Strefa GNJ</title>
</head>

<!-- script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js" type="text/javascript"></script -->
<script src="jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
var timeout         = 500;
var closetimer		= 0;
var ddmenuitem      = 0;

function jsddm_open()
{	jsddm_canceltimer();
	jsddm_close();
	ddmenuitem = $(this).find('ul').eq(0).css('visibility', 'visible');}

function jsddm_close()
{	if(ddmenuitem) ddmenuitem.css('visibility', 'hidden');}

function jsddm_timer()
{	closetimer = window.setTimeout(jsddm_close, timeout);}

function jsddm_canceltimer()
{	if(closetimer)
	{	window.clearTimeout(closetimer);
		closetimer = null;}}

$(document).ready(function()
{	$('#jsddm > li').bind('mouseover', jsddm_open);
	$('#jsddm > li').bind('mouseout',  jsddm_timer);});

document.onclick = jsddm_close;

$(function() {
	/* For zebra striping */
    $("table tr:nth-child(odd)").addClass("odd-row");
	/* For cell text alignment */
	$("table td:first-child, table th:first-child").addClass("first");
	/* For removing the last border */
	$("table td:last-child, table th:last-child").addClass("last");
});

</script>


<body>

<div class="container">

	<div class="header">
		
		<div class="logo">
		    <a href="../index.php">
		       <IMG src="../_gfx/logoGNJ.png" border=0>
		    </a>
		</div>
			
		<div class="title">
			<h1>Strefa GNJ</h1>
			<h2 id="title"><?php print($this->info); ?></h2>
		</div>

	</div>
    <?php if(isset($this->menu)) print($this->menu); ?>
	<div class="main">		
		<div class="content">
			<?php echo $this->content; ?>
    	</div>
    	<div class="clearer"><span></span></div>
	</div>			

</div></body>
</html>