<div class="page-header">
	<h3>Dodawanie plików <small>(<?php echo $this->title; ?>)</small></h3>
</div>

<div class="panel panel-default">
	<div class="panel-heading"><h4>Pliki</h4></div>
	<div class="panel-body">
		<p>Możesz dodac maksymalnie <?php echo $this->maxPhotos; ?> plików. Obsługiwane formaty: jpg/png/gif/pdf.</p>

		<?php if( $this->files->num_rows > 0): ?>
			<div class="table-responsive">
			<table class="table table-hover">
				<tr><th>Nazwa</th><th>Opis</th><th>Operacje</th></tr>

				<?php while ($row = $this->files->fetch_assoc()): ?>
				<tr>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['description']; ?></td>
					<td><a href="article_uploadfiles.php?id=<?php echo $this->articleid; ?>&fileid=<?php echo $row['id']; ?>&del">Usuń</a></td>
				</tr>
				<?php endwhile; ?>
				
			</table>
			</div>
		<?php else: ?>
			<div class="alert alert-info" role="alert">lista pusta</div>
		<?php endif; ?>
</div>
</div>

<form class="form" role="form" name="form1" method="post" action="article_upload.php" enctype="multipart/form-data">

<input name="articleid" type="hidden" value=<?php echo $this->articleid; ?>>

<div class="form-group">
	<label for="plik">Plik</label>
	<input type="file" name="uploaded_file" id="plik"/>
</div>

<div class="form-group">
	<label for="description">Opis</label>
	<input name="description" type="text" class="form-control" id="description" maxlength=255/>
</div>

<button type="submit" class="btn btn-default">Dodaj</button>
    
</form>        

<BR>

<?php 
if(isset($this->info))
	echo '<div class="alert alert-info" role="alert">'.$this->info.'</div>';
?>
