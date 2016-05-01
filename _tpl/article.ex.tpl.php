<div class="page-header">
  <h1><?php echo $this->title; ?></h1>
  <h5><?php if ($this->author != "-") echo $this->author; ?><?php if($this->date) echo ", ".$this->date; ?></h5>
  <h1><small><?php echo $this->subtitle; ?></small></h1>
</div>

<?php 

foreach ($this->text as $txt)
{
	echo $txt . '</p>';
	
	if( $this->imageIds->num_rows > 0)
	{
		$row = $this->imageIds->fetch_assoc();
				
		if($row)
		{
			echo '<div class="container">';
            echo '<div class="row">';
			
            echo '<div class="col-md-4 text-center">';
			echo '<a class="fancybox" href="../_php/mysql_getFile.php?id=' . $row['id'] . '&type=data" data-fancybox-group="gallery" title="' . $row['description'] . '">';
			echo '<img src="../_php/mysql_getFile.php?id=' . $row['id'] . '&type=data400x266"/></a>';
			echo '<h5>'.$row['description'].'</h5>';
			echo '</div>';
				
			$row = $this->imageIds->fetch_assoc();
			
			if($row)
			{
                echo '<div class="col-md-1"></div>';
				echo '<div class="col-md-4 text-center">';
				echo '<a class="fancybox" href="../_php/mysql_getFile.php?id=' . $row['id'] . '&type=data" data-fancybox-group="gallery" title="' . $row['description'] . '">';
			    echo '<img src="../_php/mysql_getFile.php?id=' . $row['id'] . '&type=data400x266"/></a>';
			    echo '<h5>'.$row['description'].'</h5>';
				echo '</div>';
			}
			
			echo '</div></div>';
		}		
	}
}

/* wyswietla wszystkie zdjecia ktore pozostały */ 
while ($row = $this->imageIds->fetch_assoc())
{
	echo '<div class="container">';
    echo '<div class="row">';
			
    echo '<div class="col-md-4 text-center">';
	echo '<a class="fancybox" href="../_php/mysql_getFile.php?id=' . $row['id'] . '&type=data" data-fancybox-group="gallery" title="' . $row['description'] . '">';
	echo '<img src="../_php/mysql_getFile.php?id=' . $row['id'] . '&type=data400x266"/></a>';
	echo '<h5>'.$row['description'].'</h5>';
	echo '</div>';
				
	$row = $this->imageIds->fetch_assoc();
			
	if($row)
	{
    	echo '<div class="col-md-1"></div>';
		echo '<div class="col-md-4 text-center">';
		echo '<a class="fancybox" href="../_php/mysql_getFile.php?id=' . $row['id'] . '&type=data" data-fancybox-group="gallery" title="' . $row['description'] . '">';
		echo '<img src="../_php/mysql_getFile.php?id=' . $row['id'] . '&type=data400x266"/></a>';
		echo '<h5>'.$row['description'].'</h5>';
		echo '</div>';
	}
			
	echo '</div></div>';
}

?>

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
