<div class="page-header">
    <h2>Tytuł puplikacji: <?php echo $this->title; ?></h2>
</div>

<form class="form" role="form" name="form1" method="post" action="<?php echo $this->form_action; ?>" enctype="multipart/form-data">

<div class="form-group">
	<label><?php echo $this->question; ?></label>
</div>

<?php if(isset($this->showMessage) && ($this->showMessage == "true")): ?>

<div class="form-group">
	<label for="InputWiadomosc">Wiadomość:</label>
	<textarea class="form-control" id="InputWiadomosc" name="message" id="text" rows="5"></textarea>
</div>

<?php endif; ?>

<button type="submit" class="btn btn-default"><?php echo $this->submit_title; ?></button>

</form>        

<?php 
if(isset($this->info))
	echo '<div class="alert alert-info" role="alert">'.$this->info.'</div>';
?>
