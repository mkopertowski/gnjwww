<?php  

if ($this->searchResult)
	$num_rows = $this->resultsNum;
else 
	$num_rows = 0;
?>

<div class="container padding25">
<?php if($this->showbreadcrumb): ?>
<ol class="breadcrumb">
  <li><?php echo $this->section;?></li>
  <?php if ($this->subsection) echo '<li class="active">'.$this->subsection.'</li>';?>
</ol>
<?php endif; ?>

<?php 
if ($this->searchResult)
{
    printResult($num_rows,$this->searchResult,$this->mysqli,$this->dots);

	// render the pagination links
	$this->pagination->render();
}
?>
</div>

<script type="text/javascript" src="<?php echo $this->dots;?>/js/zebra_pagination.js"></script>