<div class="panel panel-default itemColor">

<div class="panel-body">

<?php if($this->imgId): ?>

<img src="<?php echo $this->dots; ?>/_php/mysql_getFile.php?id=<?php echo $this->imgId; ?>&type=data400x266" class="img-responsive img-rounded"/>

<?php endif; ?>

<h4>
	<a href="<?php echo $this->link; ?>"><img src="<?php echo $this->dots; ?>/img/marker.png"> <?php echo $this->row['title']; ?></a><BR>
	<small><?php if($this->date) echo $this->date; ?></small>
</h4>
	
<?php echo $this->row['subtitle']; ?>	

</div>

<?php if ($this->showFooter): ?>
<div class="panel-footer">
	<?php 
		if ($this->author) echo $this->author; 
    	if ($this->date) echo ", ".$this->date; 
    ?>
</div>
<?php endif;?>

</div>

