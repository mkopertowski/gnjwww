<h1>Tytuł puplikacji: <?php echo $this->title; ?></h1>

<form name="form1" method="post" action="<?php echo $this->form_action; ?>" enctype="multipart/form-data">
       	
<h2><?php echo $this->question; ?></h2>

<?php if(isset($this->showMessage) && ($this->showMessage == "true")): ?>            

<h2>Wiadomość:</h2>        
<textarea name="message" id="text" cols="120" rows="5"></textarea>             

<?php endif; ?>

<h2><input type="submit" name="Submit" value="<?php echo $this->submit_title; ?>"></h2>
    
<p><?php echo $this->info; ?></p>    
    
</form>        
