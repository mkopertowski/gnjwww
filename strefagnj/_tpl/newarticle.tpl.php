<h1>Nowy artykuł</h1>

<form name="form1" method="post" action="article_add.php" enctype="multipart/form-data">
       	
<h2>Tytuł:</h2>
<input name="title" type="text" id="title" size=100 value="<?php echo $this->title; ?>" maxlength="255">

<h2>Podtytuł <i>(będzie pokazany na stronie głównej pod tytyłem)</i>:</h2>
<textarea name="subtitle" id="text" cols="100" rows="3" maxlength="400"><?php echo $this->subtitle; ?></textarea>

<h2>Dział:</h2>
	<select name="section" value="polska">
		<?php foreach($this->sectionList as $value):
		         if($this->section == $value)
		         	echo "<option value=\"$value\" selected>$value</option>";		         	
		         else 
		         	echo "<option value=\"$value\">$value</option>";
			  endforeach;
		?>
    </select>
    
<h2>Treść (używaj składni wiki markup):</h2>

<ul>
    <li>''' Bold '''</li>
    <li>'' Italic ''</li>
    <li>''''' Bold-italic '''''</li>
    <li>: Indentation</li>
    <li>:: Subindentation</li>
    <li>* Nienumerowana lista</li>
    <li># Numerowana lista</li>
    <li>pusta linia - nowy akapit</li>
</ul>
<BR>

<textarea name="text" id="text" cols="100" rows="40" maxlength="<?php echo $this->textMax; ?>"><?php echo $this->text; ?></textarea>             
<h2><input type="submit" name="Submit" value="Zapisz"></h2>
            
<!-- ADMIN FIELDS -->
            
<?php if(isset($_SESSION['usertype']) && ($_SESSION['usertype'] == "admin")): ?>            

<br><br><hr><br>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
 <script>
$(function() {
$( "#datepicker" ).datepicker();
});
</script>
 
<h1>Pola administratora bazy:</h1>

<h2>Tagi (do filtrowania SQL):</h2>
<input name="tags" type="text" id="title" size=115 value="<?php echo $this->tags; ?>">
    
<h2>HTML "keywords" (słowa powinny byc użyte na stronie, oddzielone przecinkiem, bez spacji)</h2>
<input name="html_keywords" type="text" id="title" size=115 value="<?php echo $this->html_keywords; ?>">

<!--
<h2>HTML "description"</h2>
<input name="html_description" type="text" id="title" size=115 value="<?php echo $this->html_description; ?>">
-->
<BR><BR><BR>
<p><i>(ponizej ustaw tylko gdy chcesz nadpisać domyślne wartości)</i></p>

<h2>Autor artykułu:</h2>
	<select name="authorlist">
	   <option value="notSet"></option>
		<?php while ($row = $this->membersList->fetch_assoc()):
		   		echo "<option value=".$row['id'].">".$row['name']." ".$row['surname']."</option>";
		      endwhile; 
		?>	   
    </select> albo 
    <input name="authortext" type="text" id="authortext" size=30 value="<?php echo $this->author; ?>" maxlength="100">

<h2>Data publikacji:</h2>
<input name="date" type="text" id="datepicker">

<?php endif; ?>

<BR><BR><BR><BR>

</form>        
