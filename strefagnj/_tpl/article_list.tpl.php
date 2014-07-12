<div class="page-header">
	<h3><?php echo $this->header; ?></h3>
</div>

<?php if( $this->articles->num_rows > 0): ?>

<div class="table-responsive">
<table class="table table-hover">
        <tr><th>Autor</th><th>Tytuł</th><th>Dział</th><th>Data</th><th>Operacje</th></tr>

	<?php while ($row = $this->articles->fetch_assoc()): ?>
		<tr>
		    <td><?php if($row['author'] == "")
		              	echo getAuthorFromAuthorID($this->mysqli,$row['authorid']);
		              else 
		              	echo $row['author']
		        ?></td>
		    <td><?php echo $row['title']; ?></td>
			<td><?php echo $row['section']; ?></td>
		    <td><?php echo $row['date']; ?></td>
		    <td><a href="article_show.php?id=<?php echo $row['id']; ?>" target="_blank">Wyświetl</a>&nbsp;
		        <a href="article_edit.php?id=<?php echo $row['id']; ?>" >Edytuj</a>&nbsp;
		        <a href="article_uploadfiles.php?id=<?php echo $row['id']; ?>" >Pliki</a>&nbsp;
		        <a href="article_links.php?id=<?php echo $row['id']; ?>" >Linki</a>&nbsp;
		    </td>
		 </tr>
	<?php endwhile; ?>
	
</table>
</div>
<?php else: ?>
<div class="alert alert-info" role="alert">lista pusta</div>
<?php endif; ?>
