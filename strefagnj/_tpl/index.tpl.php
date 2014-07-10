<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <p>Przed opublkowaniem artykułu zapoznaj się proszę z regulaminem.</p>
    <p><a href="regulamin.php" class="btn btn-primary btn-lg" role="button">Regulamin &raquo;</a></p>
</div>

<?php
if(isset($this->info))
	echo '<div class="alert alert-success" role="alert">'.$this->info.'</div>';
?>