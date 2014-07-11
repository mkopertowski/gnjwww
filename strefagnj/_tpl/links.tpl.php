<div class="page-header">
	<h3>Dodawanie linków <small>(<?php echo $this->title; ?>)</small></h3>
</div>

<div class="panel panel-default">
	<div class="panel-heading"><h4>Linki</h4></div>
	<div class="panel-body">
		<p>Możesz dodać maksymalnie <?php echo $this->maxLinks; ?> linków.</p>

		<?php if( $this->links->num_rows > 0): ?>
			<div class="table-responsive">
			<table class="table table-hover">
				<tr><th>Link</th><th>Operacje</th></tr>
				<?php while ($row = $this->links->fetch_assoc()): ?>
				<tr>
					<td><a href="<?php echo $row['link']; ?>" target="_blank"><?php echo $row['name']; ?></a></td>
					<td><a href="article_links.php?id=<?php echo $this->articleid; ?>&linkid=<?php echo $row['id']; ?>&del">Usuń</a></td>
				</tr>
				<?php endwhile; ?>	
			</table>
			</div>
		<?php else: ?>
			<div class="alert alert-info" role="alert">List pusta</div>
		<?php endif; ?>
	</div>
</div>

<form  class="form" role="form" name="form1" method="post" action="article_linksadd.php" enctype="multipart/form-data">

	<div class="form-group">
		<label for="link">Link</label>
		<input name="link" type="text" id="link" class="form-control" maxlength=255>
	</div>

	<div class="form-group">
		<label for="name">Opis</label>
		<input name="name" type="text" id="name" class="form-control" maxlength=255>
	</div>

	<button type="submit" name="Submit" class="btn btn-default">Dodaj</button>

</form>

<BR>

<?php 
if(isset($this->info))
	echo '<div class="alert alert-info" role="alert">'.$this->info.'</div>';
?>

