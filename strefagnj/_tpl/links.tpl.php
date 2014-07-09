<div class="page-header">
	<h2>Dodawanie linków</h2>
</div>

<h3>Tytuł puplikacji: <?php echo $this->title; ?></h3>

<h4>Linki:</h4>

<?php if( $this->links->num_rows > 0): ?>
<div class="table-responsive">
<table class="table table-hover">
    <tr><th>Link</th><th>Operacje</th></tr>
	<?php while ($row = $this->links->fetch_assoc()): ?>
		<tr>
    		<td><a href="<?php echo $row['link']; ?>"><?php echo $row['name']; ?></a></td>
		    <td><a href="article_links.php?id=<?php echo $this->articleid; ?>&linkid=<?php echo $row['id']; ?>&del">Usuń</a></td>
		</tr>
	<?php endwhile; ?>	
</table>
</div>
<?php else: ?>
<p><i>--------- list pusta --------</i></p>
<?php endif; ?>

<form  class="form" role="form" name="form1" method="post" action="article_linksadd.php" enctype="multipart/form-data">

<p>Możesz dodac maksymalnie <?php echo $this->maxLinks; ?> linków.</p>

<p>Link:</p>
<p><input name="link" type="text" id="link" size=80 maxlength=255></p>

<p>Opis:</p>
<p><input name="name" type="text" id="name" size=80 maxlength=255></p>

<p><input type="submit" name="Submit" value="Dodaj"></p>
    
<p><?php if(isset($this->info)) echo $this->info; ?></p>    
    
</form>

<?php 
if(isset($this->info))
	echo '<div class="alert alert-info" role="alert">'.$this->info.'</div>';
?>

