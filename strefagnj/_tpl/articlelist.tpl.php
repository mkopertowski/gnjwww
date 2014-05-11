<h1>Twoje publikacje</h1>

<h2>Wersje robocze:</h2>

<?php if( $this->articles_edit->num_rows > 0): ?>

<table id="articlelist-table">
        <tr><th>Tytuł</th><th>Dział</th><th>Data</th><th>Operacje</th></tr>

	<?php while ($row = $this->articles_edit->fetch_assoc()): ?>
		<tr>
		    <td><?php echo $row['title']; ?></td>
			<td><?php echo $row['section']; ?></td>
		    <td><?php echo $row['date']; ?></td>
		    <td><a href="article_show.php?id=<?php echo $row['id']; ?>">Wyświetl</a>&nbsp;
		        <a href="article_new.php?id=<?php echo $row['id']; ?>">Edytuj</a>&nbsp;
		        <a href="article_uploadfiles.php?id=<?php echo $row['id']; ?>">Pliki</a>&nbsp;
		        <a href="article_links.php?id=<?php echo $row['id']; ?>" >Linki</a>&nbsp;
		        <a href="article_submit.php?id=<?php echo $row['id']; ?>">Publikuj</a>&nbsp;
		        <a href="article_delete.php?id=<?php echo $row['id']; ?>">Usuń</a>
		    </td>
		</tr>
	<?php endwhile; ?>
	
</table>
<?php else: ?>
<p><i>--------- list pusta --------</i></p>
<?php endif; ?>

<h2>Gotowe (oczekujące na publikację):</h2>

<?php if( $this->articles_review->num_rows > 0): ?>

<table id="articlelist-table">
        <tr><th>Tytuł</th><th>Dział</th><th>Data</th><th>Operacje</th></tr>

	<?php while ($row = $this->articles_review->fetch_assoc()): ?>
		<tr>
		    <td><?php echo $row['title']; ?></td>
			<td><?php echo $row['section']; ?></td>
		    <td><?php echo $row['date']; ?></td>
		    <td><a href="article_show.php?id=<?php echo $row['id']; ?>" >Wyświetl</a></td>
		</tr>
	<?php endwhile; ?>
	
</table>
<?php else: ?>
<p><i>--------- list pusta --------</i></p>
<?php endif; ?>

<h2>Opublikowane:</h2>

<?php if( $this->articles_reviewed->num_rows > 0): ?>

<table  id="articlelist-table">
        <tr><th>Tytuł</th><th>Dział</th><th>Data</th><th>Operacje</th></tr>

	<?php while ($row = $this->articles_reviewed->fetch_assoc()): ?>
		<tr>
		    <td><?php echo $row['title']; ?></td>
			<td><?php echo $row['section']; ?></td>
			<td><?php echo $row['date']; ?></td>
	        <td><a href="article_show.php?id=<?php echo $row['id']; ?>" >Wyświetl</a></td>
	    </tr>
	<?php endwhile; ?>
	
</table>

<?php else: ?>
<p><i>--------- list pusta --------</i></p>
<?php endif; ?>

