<?php

$bSubdir = true;
include('../_php/page_utf8.php');

renderHead($bSubdir,'','');
renderMenu($bSubdir,2,false,ConvertSec2SectionName("polska"));
renderGallery($bSubdir,false);

renderCentral(true);

?>

<!-- ============================= CONTENT BEGIN   ========================================== -->
<h1><?php echo $this->title; ?></h1>
<h2><?php echo $this->subtitle; ?></h2>
<B>
<P align="right"><?php echo $this->date; ?></P></B> 

<?php echo $this->text1; ?>

<?php if( $this->imageIds->num_rows > 0): ?>
	<div class="flexslider" align="center">
	<ul class="slides">	
	<?php while ($row = $this->imageIds->fetch_assoc()): ?>
		<li>
			<a class="fancybox" href="../_php/mysql_getFile.php?id=<?php echo $row['id']; ?>&type=data" data-fancybox-group="gallery" title="<?php echo $row['description']; ?>">
				<img src="../_php/mysql_getFile.php?id=<?php echo $row['id']; ?>&type=data400x266" alt=""/>
			</a>
			<p class="flex-caption"><?php echo $row['description']; ?></p>
		</li>
	<?php endwhile; ?>
	</ul>
	</div>
<?php endif; ?>

<?php echo $this->text2; ?>

<BR><P align="right"><B><?php echo $this->author; ?><BR></B></P>


<!-- ============================= CONTENT END   ============================================ -->
<?php 

renderBottom($bSubdir);

?>  