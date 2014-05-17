<?xml version="1.0" encoding="UTF-8" ?>
<rss version="2.0">

<channel>
	<title><?php echo $this->title; ?></title>
	<link>http://www.gnj.org.pl</link>
	<description><?php echo $this->description; ?></description>
	
	<?php if( $this->items->num_rows > 0): ?>
		<item>
			<?php while ($row = $this->items->fetch_assoc()): ?>
				<title><?php echo $row['title']; ?></title>
				<link>http://www.gnj.org.pl/_php/show.php?id=<?php echo $row['id']; ?></link>
				<description><?php echo $row['subtitle']; ?></description>
			<?php endwhile; ?>
  		</item>
  	<?php endif; ?>  
    
</channel>

</rss> 