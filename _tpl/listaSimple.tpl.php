<?php 
                   
$num_rows = $this->articles->num_rows;

?>

<div class="container padding25">
<?php if($this->showbreadcrumb): ?>
<ol class="breadcrumb">
  <li><?php echo $this->section;?></li>
  <?php if ($this->subsection) echo '<li class="active">'.$this->subsection.'</li>';?>
</ol>
<?php endif; ?>

<ul class="nav nav-pills">

<?php printItems($this->articles,$this->mysqli,$this->dots,$this->showFooter); ?>

</ul>
</div>
