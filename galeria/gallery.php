<?php
  
  $bSubdir = true;
  @include('../_php/page_utf8.php');
  @include('./page_gallery.php');
  
  renderHead($bSubdir,'','');  renderMenu($bSubdir,0,false);  renderGallery(true,false);
  renderCentral(true);

?>  

<!--============================= CONTENTS START ==========================================-->

<h1><?php echo $galeria->GetHeader(); ?></h1>
<h3 align=right><?php echo $galeria->GetDate(); ?></h3>
<h3 align=center><?php echo $galeria->GetDescription(); ?></h3>

<?php renderPhotoGallery($galeria); ?>

<h3 align=right>zdjęcia: <?php echo $galeria->GetAuthor(); ?></h3>

<!--============================= CONTENTS END   ==========================================-->
<?php renderBottom($bSubdir); ?>
