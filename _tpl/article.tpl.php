<?php

$bSubdir = true;
include('../_php/page_utf8.php');

renderHead($bSubdir,'','');
renderMenu($bSubdir,2,false,ConvertSec2SectionName("polska"));
renderGallery($bSubdir,false);
renderUpdates($bSubdir);

renderCentral(true);

?>

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
	    <a class="fancybox" href="../_php/mysql_getFile.php?id=<?php echo $row['id']; ?>&type=small" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
	    	<img src="../_php/mysql_getFile.php?id=<?php echo $row['id']; ?>&type=small" alt=""/>
	    	     </a>
	    	<p class="flex-caption"><?php echo $row['description']; ?></p>
	    </li>
	<?php endwhile; ?>
  	</ul>
</div>
<?php endif; ?>

<!-- ============================= CONTENT END   ============================================ -->
<?php 

renderBottom($bSubdir);

?>  