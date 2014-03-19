<?php

$bSubdir = true;
@include('../_php/page_utf8.php');

renderHead($bSubdir,'','');
renderMenu($bSubdir,2,false,ConvertSec2SectionName("polska"));
renderGallery($bSubdir,false);
renderUpdates($bSubdir);
	
renderCentral(true);

?>

<link rel="stylesheet" href="../_css/flexslider.css" type="text/css" media="screen" />

<script src="../_js/modernizr.js"></script>

<!-- jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

<!-- FlexSlider -->
<script defer src="../_js/jquery.flexslider.js"></script>

<script type="text/javascript">
$(window).load(function() {
    $('.flexslider').flexslider({
          controlsContainer: ".flex-container"
    });
  });
</script>



 <!-- ============================= CONTENT BEGIN   ========================================== -->
<h1><?php echo $this->title; ?></h1>
<h2><?php echo $this->subtitle; ?></h2>
<B>
<P align="right"><?php echo $this->date; ?></P></B> 

<?php echo $this->text; ?>

<BR><P align="right"><B><?php echo $this->author; ?><BR></B></P>

<BR><BR><BR>

<?php if( $this->imageIds->num_rows > 0): ?>

<div class="flexslider" align="middle">
	<ul class="slides">	
	
	<?php while ($row = $this->imageIds->fetch_assoc()): ?>
	    <li>
	        <a href="../_php/mysql_getFile.php?id=<?php echo $row['id']; ?>&type=small" rel="lightbox[set1]" title="AAAAA">
	    	  <img src="../_php/mysql_getFile.php?id=<?php echo $row['id']; ?>&type=small" alt="window"/>
	    	</a>
	    	<p class="flex-caption"><?php echo $row['description']; ?></p>
	    </li>
	<?php endwhile; ?>
	<li>
	<object width="425" height="350">	<param name="movie" value="http://www.youtube.com/v/XRdFKLa1u7M"></param>	<embed src="http://www.youtube.com/v/XRdFKLa1u7M" type="application/x-shockwave-flash" wmode="transparent" width="425" height="350"></embed></object><br />
	
	</li>	
  	</ul>
</div>
<?php endif; ?>


<a href="../1smallx.jpg" rel="lightbox[set2]" title="AAAA">AAAAA</a>
<a href="../2smallx.jpg" rel="lightbox[set2]" title="AAAA">AAAAA</a>
<a href="../3small.jpeg" rel="lightbox[set2]" title="AAAA">AAAAA</a>

<!-- ============================= CONTENT END   ============================================ -->
<?php 

renderBottom($bSubdir);

?>  