<?php

$bSubdir = true;
include('../_php/page_utf8.php');

$description="";
if($this->html_description != "")
{
	$description = $this->html_description;
}
else if(isset($this->subtitle))
{
	$description = $this->subtitle;
}

$keywords="";
if($this->html_keywords != "")
{
	$keywords = $this->html_keywords;
}

renderHeadNew($bSubdir,$description,$keywords,"Nurkowanie Jaskiniowe GNJ - ".$this->title,$this->articleId,$this->imgId);
renderMenu($bSubdir,2,false,ConvertSec2SectionName("polska"));
renderGallery($bSubdir,false);

renderCentral(true);

?>

<!-- facebook -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- ============================= CONTENT BEGIN   ========================================== -->
<h1><?php echo $this->title; ?></h1>
<h2><?php echo $this->subtitle; ?></h2>
<B>
<P align="right"><?php echo $this->date; ?></P></B> 

<?php echo $this->text1; ?>

<?php if( $this->imageIds->num_rows > 0): ?>
	<div class="flexslider" align="center">
	<ul class="slides">	
	<?php while ($row = $this->imageIds->fetch_assoc()): ?>
		<li>
			<a class="fancybox" href="../_php/mysql_getFile.php?id=<?php echo $row['id']; ?>&type=data" data-fancybox-group="gallery" title="<?php echo $row['description']; ?>">
				<img src="../_php/mysql_getFile.php?id=<?php echo $row['id']; ?>&type=data400x266" alt=""/>
			</a>
			<p class="flex-caption"><?php echo $row['description']; ?></p>
		</li>
	<?php endwhile; ?>
	</ul>
	</div>
<?php endif; ?>

<?php echo $this->text2; ?>

<BR><P align="right"><B><?php echo $this->author; ?><BR></B></P>

<?php if( $this->links->num_rows > 0): ?>
    <ul>
	<?php while ($row = $this->links->fetch_assoc()): ?>
	<LI><a class="fancybox-media" href="<?php echo $row['link']; ?>"><?php echo $row['name']; ?></a></LI>
	<?php endwhile; ?>
	</ul>
<?php endif; ?>

<!-- ============================= CONTENT END   ============================================ -->

<!-- facebook plugin start -->

<?php if($this->showPlugin): ?>
<BR>
<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
<?php endif; ?>
<!-- facebook plugin end -->


<?php 

renderBottom($bSubdir);

?>
