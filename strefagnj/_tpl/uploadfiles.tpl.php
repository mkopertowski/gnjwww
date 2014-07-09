<h1>Dodawanie plików</h1>

<p><big>Tytuł puplikacji: <?php echo $this->title; ?></big></p>

<p>Pliki:</p>

<?php if( $this->files->num_rows > 0): ?>

<table id="articlelist-table">
        <tr><th>Nazwa</th><th>Opis</th><th>Operacje</th></tr>

	<?php while ($row = $this->files->fetch_assoc()): ?>
		<tr>
		    <td><?php echo $row['name']; ?></td>
			<td><?php echo $row['description']; ?></td>
		    <td><a href="article_uploadfiles.php?id=<?php echo $this->articleid; ?>&fileid=<?php echo $row['id']; ?>&del">Usuń</a></td>
		</tr>
	<?php endwhile; ?>
	
</table>
<?php else: ?>
<p><i>--------- list pusta --------</i></p>
<?php endif; ?>

<form class="form" role="form" name="form1" method="post" action="article_upload.php" enctype="multipart/form-data">

<div class="form-group">
	<label>Możesz dodac maksymalnie <?php echo $this->maxPhotos; ?> zdjęc.</label>
</div>

<div class="form-group">
	<label>Plik</label>
	<input type="file" name="uploaded_file"/>
</div>

<div class="form-group">
	<label>Opis</label>
	<input name="description" type="text" id="description"/>
</div>

<button type="submit" class="btn btn-default">Dodaj</button>
    
</form>        

<p><?php if(isset($this->info)) echo $this->info; ?></p>    

