<h1>Dodawanie zdjęć</h1>

<p><big>Tytuł puplikacji: <?php echo $this->title; ?></big></p>

<form name="form1" method="post" action="article_upload.php" enctype="multipart/form-data">

<p>Możesz dodac maksymalnie <?php echo $this->maxPhotos; ?> zdjęc.</p>

<p>Plik:</p>
<p>
   <input type="file" name="uploaded_file"/>
</p>

<p>Opis:</p>
<p><input name="description" type="text" id="description" size=80></p>

<p><input type="submit" name="Submit" value="Dodaj"></p>
    
<p><?php echo $this->info; ?></p>    
    
</form>        
