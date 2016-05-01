<div class="media">

<?php if($this->imgId): ?>

<div class="media-left">

     <?php if(getImageAspectRatio($this->mysqli,$this->imgId)>1): ?>
        <img class="media-object img-rounded" width="250" src="<?php echo $this->dots; ?>/_php/mysql_getFile.php?id=<?php echo $this->imgId; ?>&type=data400x266"/>
     <?php else: ?>
        <img class="media-object img-rounded" height="250" src="<?php echo $this->dots; ?>/_php/mysql_getFile.php?id=<?php echo $this->imgId; ?>&type=data400x266"/>
     <?php endif; ?>
     
</div>

<?php endif; ?>

<div class="media-body">

<h4 class="media-heading">
	<a href="<?php echo $this->link; ?>"><img src="<?php echo $this->dots; ?>/img/marker.png"> <?php echo $this->row['title']; ?></a><BR>
	<small><?php if ($this->author != "-") echo $this->author; ?><?php if($this->date) echo ", ".$this->date; ?></small>
</h4>
	
	
<?php echo $this->row['subtitle']; ?>	
<br><br>

<!--  -->

</div>
</div>
<hr>