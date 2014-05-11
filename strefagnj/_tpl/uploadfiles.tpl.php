<h1>Dodawanie plików</h1>

<p><big>Tytuł puplikacji: <?php echo $this->title; ?></big></p>

<p>Pliki:</p>

<?php if( $this->files->num_rows > 0): ?>

<table id="articlelist-table">
        <tr><th width="10%">Nazwa</th><th width="60%">Opis</th><th width="30%">Operacje</th></tr>

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

<form name="form1" method="post" action="article_upload.php" enctype="multipart/form-data">

<p>Możesz dodac maksymalnie <?php echo $this->maxPhotos; ?> zdjęc.</p>

<p>Plik:</p>
<p>
   <input type="file" name="uploaded_file"/>
</p>

<p>Opis:</p>
<p><input name="description" type="text" id="description" size=80></p>

<p><input type="submit" name="Submit" value="Dodaj"></p>
    
<p><?php if(isset($this->info)) echo $this->info; ?></p>    
    
</form>        
