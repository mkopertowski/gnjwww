<div class="page-header">
	<h3>Nowy artykuł</h3>
</div>

<form class="form" role="form" name="form1" method="post" action="article_save.php" enctype="multipart/form-data">

<input name="articleid" type="hidden" value=<?php echo $this->articleid; ?>>

<div class="form-group">
	<label for="Tytul">Tytuł</label>
	<input name="title" type="text" id="title" class="form-control" id="Tytul" value="<?php echo $this->title; ?>">
</div>

<div class="form-group">
	<label for="subtext">Podtytuł <i>(będzie pokazany na stronie głównej pod tytyłem)</i></label>
	<textarea name="subtitle" id="subtext" class="form-control" rows="3"  maxlength="400"><?php echo $this->subtitle; ?></textarea>
</div>

<div class="form-group">
	<label for="section">Dział</label>
	<select name="section" value="polska" class="form-control">
		<?php foreach($this->sectionList as $value):
		         if($this->section == $value)
		         	echo "<option value=\"$value\" selected>$value</option>";		         	
		         else 
		         	echo "<option value=\"$value\">$value</option>";
			  endforeach;
		?>
    </select>
</div>

<div class="form-group">
	<label for="language">Język</label>
	<select name="language" value="pl" class="form-control">
		<?php foreach($this->languageList as $value):
		         if($this->language == $value)
		         	echo "<option value=\"$value\" selected>$value</option>";		         	
		         else 
		         	echo "<option value=\"$value\">$value</option>";
			  endforeach;
		?>
    </select>
</div>

<div class="form-group">
	<label for="text">Treść (używaj składni wiki trac markup https://trac.edgewall.org/wiki/WikiFormatting)</label>
	<ul>
		<li>''' Bold '''</li>
		<li>'' Italic ''</li>
		<li>''''' Bold-italic '''''</li>
		<li>== heading level 2 ==</li>
		<li>=== heading level 3 ===</li>
		<li>* Nienumerowana lista</li>
		<li>1. Numerowana lista</li>
		<li>pusta linia - nowy akapit</li>
	</ul>
	<textarea name="text" id="text" class="form-control" rows="40"  maxlength="<?php echo $this->textMax; ?>"><?php echo $this->text; ?></textarea>
</div>

<button type="submit" name="Submit" class="btn btn-default">Zapisz</button>
            
<!-- ADMIN FIELDS -->
            
<?php if(isset($_SESSION['usertype']) && ($_SESSION['usertype'] == "admin")): ?>            

<hr>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<div class="form-group">
	<h3><span class="label label-info">Pola administratora bazy</span></h3>
</div>

<div class="form-group">
	<label for="tags">Tagi (do filtrowania SQL)</label>
	<input name="tags" type="text" id="tags" class="form-control" value="<?php echo $this->tags; ?>">
</div>

<div class="form-group">
	<label for="keywords">HTML "keywords" (słowa powinny byc użyte na stronie, oddzielone przecinkiem, bez spacji)</label>
	<input name="html_keywords" type="text" id="keywords" class="form-control" value="<?php echo $this->html_keywords; ?>">
</div>

<div class="form-group">
	<h4><span class="label label-info">Ustaw tylko gdy chcesz nadpisać domyślne wartości</span></h4>
</div>

<div class="form-group">
	<label>Autor artykułu (wybierz albo wpisz)</label>
<div class="form-group row"> 
		<div class="col-xs-4"> 
	<select name="authorlist" class="form-control">
	   <option value="notSet"></option>
		<?php while ($row = $this->membersList->fetch_assoc()):
					if($row['id'] == $this->authorid)
					{
						echo "<option value=\"".$row['id']."\" selected>".$row['name']." ".$row['surname']."</option>";
					}
					else
					{
						echo "<option value=\"".$row['id']."\">".$row['name']." ".$row['surname']."</option>";
					}
		      endwhile; 
		?>	   
	</select>
	</div>
	<div class="col-xs-8">
 	<input name="authortext" type="text" id="authortext" value="<?php echo $this->author; ?>" maxlength="100" class="form-control">
</div></div>

<div class="form-group">
	<div class="form-group row"> 
		<div class="col-xs-4"> 
			<label class="control-label">Data publikacji</label> 
			<div class="input-group date" id="dp3" data-date="" data-date-format="yyyy-mm-dd"> 
				<input name="date" class="form-control" type="text" readonly value=<?php echo $this->date; ?>>
				<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
			</div>
		</div>
	</div>
</div>


<?php endif; ?>

</form>        
<script>
	$(function(){
		$(".input-group.date").datepicker({ 
			autoclose: true, 
			todayHighlight: true 
		});
	});

	

	
</script>
