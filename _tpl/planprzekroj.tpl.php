
<div class="page-header">
  <h1><?php echo $this->title; ?></h1>
  <h1><small><?php echo $this->subtitle; ?></small></h1>
</div>

<?php echo $this->text1; ?>

<?php echo $this->text2; ?>

<?php if( $this->imageIds->num_rows > 0): ?>
	<div class="row">
	
	<?php while ($row = $this->imageIds->fetch_assoc()): ?>
	<div class="col-xs-6 col-md-3">
		<div class="thumbnail">
			<a class="thumbnail fancybox" href="../_php/mysql_getFile.php?id=<?php echo $row['id']; ?>&type=data" data-fancybox-group="gallery" title="<?php echo $row['description']; ?>">
				<img src="../_php/mysql_getFile.php?id=<?php echo $row['id']; ?>&type=data400x266" alt="" border="0"/>
			</a>
			<div class="caption">
				<h4><?php echo $row['description']; ?></h4>
			</div>
		</div>
	</div>
	<?php endwhile; ?>

	</div>
<?php endif; ?>

<?php if(($this->localfiles->num_rows > 0)): ?>	
<ul>
  <?php while ($row = $this->localfiles->fetch_assoc()): ?>
	<LI><a class="fancybox-media" href="../_php/mysql_getFile.php?id=<?php echo $row['id']; ?>&type=data" target="_blank"><?php echo $row['description']; ?></a></LI>
	<?php endwhile; ?>
<?php endif; ?>
<?php if(($this->links->num_rows > 0)): ?>	
	<?php while ($row = $this->links->fetch_assoc()): ?>
	<LI><a class="fancybox-media" href="<?php echo $row['link']; ?>" target="_blank"><?php echo $row['name']; ?></a></LI>
	<?php endwhile; ?>
</ul>
<?php endif; ?>



<!-- ============================= CONTENT END   ============================================ -->

<!-- facebook plugin start -->
<BR>
<?php if($this->showPlugin): ?>
<div class="fb-like" data-href="http://www.gnj.org.pl/_php/show.php?id=<?php echo $this->articleId; ?>" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
<?php endif; ?>
<!-- facebook plugin end -->

