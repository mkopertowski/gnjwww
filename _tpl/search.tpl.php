<?php  

if ($this->searchResult)
	$num_rows = $this->resultsNum;
else 
	$num_rows = 0;
?>

<div class="container padding25">
<div class="page-header">
  <h3>Wyniki wyszukiwania dla: <strong><?php echo $this->searchString; ?></strong></h3>
  <h3><small>Znaleziono <?php echo $num_rows ?> artykułów<?php if($num_rows) echo ", strona ".$this->pagination->get_page()." z ".$this->pagination->get_pages();?>.
  </small></h3>
</div>

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