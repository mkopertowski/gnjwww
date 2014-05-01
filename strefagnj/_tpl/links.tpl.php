<h1>Dodawanie linków</h1>

<p><big>Tytuł puplikacji: <?php echo $this->title; ?></big></p>

<p>Linki:</p>

<?php if( $this->links->num_rows > 0): ?>

<table id="articlelist-table">
        <tr><th width="70%">Link</th><th width="30%">Operacje</th></tr>

	<?php while ($row = $this->links->fetch_assoc()): ?>
		<tr>
    		<td><a href="<?php echo $row['link']; ?>"><?php echo $row['name']; ?></a></td>
		    <td><a href="article_links.php?id=<?php echo $this->articleid; ?>&linkid=<?php echo $row['id']; ?>&del">Usuń</a></td>
		</tr>
	<?php endwhile; ?>
	
</table>
<?php else: ?>
<p><i>--------- list pusta --------</i></p>
<?php endif; ?>

<form name="form1" method="post" action="article_linksadd.php" enctype="multipart/form-data">

<p>Możesz dodac maksymalnie <?php echo $this->maxLinks; ?> linków.</p>

<p>Link:</p>
<p><input name="link" type="text" id="link" size=80 maxlength=255></p>

<p>Opis:</p>
<p><input name="name" type="text" id="name" size=80 maxlength=255></p>

<p><input type="submit" name="Submit" value="Dodaj"></p>
    
<p><?php if(isset($this->info)) echo $this->info; ?></p>    
    
</form>        
