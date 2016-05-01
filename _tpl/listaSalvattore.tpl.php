<?php 
                   
$num_rows = $this->articles->num_rows;

?>

<?php if($this->showbreadcrumb): ?>
<div class="container padding25">
<ol class="breadcrumb">
  <li><?php echo $this->section;?></li>
  <?php if ($this->subsection) echo '<li class="active">'.$this->subsection.'</li>';?>
</ol>
</div>
<?php endif; ?>

<div class="container">
<div id="grid" data-columns>
   <div class="column size-1of3 padding">
	    <?php printSalvattoreColumn(0,$num_rows,$this->articles,$this->mysqli,$this->dots,$this->showFooter); ?>
   </div>
   <div class="column size-1of3 padding">
	    <?php printSalvattoreColumn(1,$num_rows,$this->articles,$this->mysqli,$this->dots,$this->showFooter); ?>
   </div>
   <div class="column size-1of3 padding">
	    <?php printSalvattoreColumn(2,$num_rows,$this->articles,$this->mysqli,$this->dots,$this->showFooter); ?>
   </div>
</div>
</div>