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

<!-- ============================= CONTENT BEGIN   ========================================== -->
<h1><?php echo $this->title; ?> </h1>
<h2><?php echo $this->subtitle; ?></h2>
<B>
<P align="right"><?php echo $this->date; ?></P></B> 

<?php 

foreach ($this->text as $txt)
{
	echo '<p style="clear: both;" class="article">' . $txt . '</p>';
	
	if( $this->imageIds->num_rows > 0)
	{
		$row = $this->imageIds->fetch_assoc();
		
		echo '<span style="text-align: center; font-size: 10pt;">';
		
		if($row)
		{
			$output  = '<p style="float: left; margin-bottom: 10px; margin-right: 58px; width: 300px;"><a class="fancybox" href="../_php/mysql_getFile.php?id=' . $row['id'] . '&type=data" data-fancybox-group="gallery" title="' . $row['description'] . '">';
			$output .= '<img width="300" src="../_php/mysql_getFile.php?id=' . $row['id'] . '&type=data400x266" alt="" border="0"/>';
			$output .= '</a><BR>';
			$output .= $row['description'] . '<BR>';
			echo $output;
		}
		
		$row = $this->imageIds->fetch_assoc();
		
		if($row)
		{
			$output  = '<p style="float: left; margin-bottom: 10px; width: 300px;"><a class="fancybox" href="../_php/mysql_getFile.php?id=' . $row['id'] . '&type=data" data-fancybox-group="gallery" title="' . $row['description'] . '">';
			$output .= '<img width="300" src="../_php/mysql_getFile.php?id=' . $row['id'] . '&type=data400x266" alt="" border="0"/>';
			$output .= '</a><BR>';
			$output .= $row['description'] . '<BR>';
			echo $output;
		}

		echo '</span>';
	}
}

/* wyswietla wszystkie zdjecia ktore pozostały */
echo '<p style="clear: both;" class="article"></p>';

echo '<span style="text-align: center; font-size: 10pt;">';

/* wyswietla wszystkie zdjecia ktore pozostały */
while ($row = $this->imageIds->fetch_assoc())
{
	$output  = '<p style="float: left; margin-bottom: 10px; width: 300px;"><a class="fancybox" href="../_php/mysql_getFile.php?id=' . $row['id'] . '&type=data" data-fancybox-group="gallery" title="' . $row['description'] . '">';
	$output .= '<img width="300" src="../_php/mysql_getFile.php?id=' . $row['id'] . '&type=data400x266" alt="" border="0"/>';
	$output .= '</a><BR>';
	$output .= $row['description'];
	echo $output;
}

echo '</span>';

echo '<p style="clear: both;" class="article"></p>';

?>

<BR>
<?php if( $this->author != "-" ): ?>
<P align="right"><B><?php echo $this->author; ?></B></P>
<?php endif; ?>
<BR>

<?php if( $this->links->num_rows > 0): ?>
    <ul class="article" >
	<?php while ($row = $this->links->fetch_assoc()): ?>
	<LI><a class="fancybox-media" href="<?php echo $row['link']; ?>" target="_blank"><?php echo $row['name']; ?></a></LI>
	<?php endwhile; ?>
	</ul>
<?php endif; ?>

<!-- ============================= CONTENT END   ============================================ -->

<!-- facebook plugin start -->

<?php if($this->showPlugin): ?>
<BR>
<div class="fb-like" data-href="http://www.gnj.org.pl/_php/show.php?id=<?php echo $this->articleId; ?>" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
<?php endif; ?>
<!-- facebook plugin end -->

<?php 

renderBottom($bSubdir);

?>
