<div class="page-header">
	<h3>Twoje artykuły</h3>
</div>

<div class="panel panel-default">
	<div class="panel-heading">Wersje robocze</div>
	<div class="panel-body">
		<?php if( $this->articles_edit->num_rows > 0): ?>
			<div class="table-responsive">
			<table class="table table-hover">
				<tr><th>Tytuł</th><th>Dział</th><th>Data</th><th>Operacje</th></tr>

				<?php while ($row = $this->articles_edit->fetch_assoc()): ?>
				<tr>
					<td><?php echo $row['title']; ?></td>
					<td><?php echo $row['section']; ?></td>
					<td><?php echo $row['date']; ?></td>
					<td><a href="article_show.php?id=<?php echo $row['id']; ?>" target="_blank">Wyświetl</a>&nbsp;
						<a href="article_new.php?id=<?php echo $row['id']; ?>">Edytuj</a>&nbsp;
						<a href="article_uploadfiles.php?id=<?php echo $row['id']; ?>">Pliki</a>&nbsp;
						<a href="article_links.php?id=<?php echo $row['id']; ?>" >Linki</a>&nbsp;
						<a href="article_submit.php?id=<?php echo $row['id']; ?>">Publikuj</a>&nbsp;
						<a href="article_delete.php?id=<?php echo $row['id']; ?>">Usuń</a>
					</td>
				</tr>
				<?php endwhile; ?>
			</table>
			</div>
		<?php else: ?>
			<div class="alert alert-info" role="alert">list pusta</div>
		<?php endif; ?>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading">Gotowe<small>(oczekujące na publikację)</small></div>
	<div class="panel-body">
		<?php if( $this->articles_review->num_rows > 0): ?>

			<div class="table-responsive">
			<table class="table table-hover">
				<tr><th>Tytuł</th><th>Dział</th><th>Data</th><th>Operacje</th></tr>

				<?php while ($row = $this->articles_review->fetch_assoc()): ?>
				<tr>
					<td><?php echo $row['title']; ?></td>
					<td><?php echo $row['section']; ?></td>
					<td><?php echo $row['date']; ?></td>
					<td><a href="article_show.php?id=<?php echo $row['id']; ?>" target="_blank">Wyświetl</a></td>
				</tr>
				<?php endwhile; ?>
			</table>
			</div>
		<?php else: ?>
			<div class="alert alert-info" role="alert">list pusta</div>
		<?php endif; ?>
	</div>
</div>


<div class="panel panel-default">
	<div class="panel-heading">Opublikowane</div>
	<div class="panel-body">
		<?php if( $this->articles_reviewed->num_rows > 0): ?>

			<div class="table-responsive">
			<table class="table table-hover">
				<tr><th>Tytuł</th><th>Dział</th><th>Data</th><th>Operacje</th></tr>

				<?php while ($row = $this->articles_reviewed->fetch_assoc()): ?>
				<tr>
					<td><?php echo $row['title']; ?></td>
					<td><?php echo $row['section']; ?></td>
					<td><?php echo $row['date']; ?></td>
					<td><a href="article_show.php?id=<?php echo $row['id']; ?>" target="_blank">Wyświetl</a></td>
				</tr>
				<?php endwhile; ?>

			</table>
			</div>
		<?php else: ?>
			<div class="alert alert-info" role="alert">list pusta</div>
		<?php endif; ?>
	</div>
</div>


