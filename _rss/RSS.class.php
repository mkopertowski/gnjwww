<?php
/**
 * RSS (simple rss 2.0 feed creator php class)
 */
class RSS {

	/**
	 * Constructor
	 */
	public function __construct($a_channel, $items) {
		// initialize
		$this->channel_properties = $a_channel;
		$this->items = $items;
	}

	/**
	 * Generate RSS 2.0 feed
	 *
	 * @return string RSS 2.0 xml
	 */
	public function create() {
 
		$xml = '<?xml version="1.0" encoding="utf-8"?>' . "\n";

		$xml .= '<rss version="2.0"' . $this->xmlns . '>' . "\n";

		// channel required properties
		$xml .= '<channel>' . "\n";
		$xml .= '<title>' . $this->channel_properties["title"] . '</title>' . "\n";
		$xml .= '<link>' . $this->channel_properties["link"] . '</link>' . "\n";
		$xml .= '<description>' . $this->channel_properties["description"] . '</description>' . "\n";

		// channel optional properties
		if(array_key_exists("language", $this->channel_properties)) {
			$xml .= '<language>' . $this->channel_properties["language"] . '</language>' . "\n";
		}
		
		if(array_key_exists("image_title", $this->channel_properties)) {
			$xml .= '<image>' . "\n";
			$xml .= '<title>' . $this->channel_properties["image_title"] . '</title>' . "\n";
			$xml .= '<link>' . $this->channel_properties["image_link"] . '</link>' . "\n";
			$xml .= '<url>' . $this->channel_properties["image_url"] . '</url>' . "\n";
			$xml .= '</image>' . "\n";
		}

		// get RSS channel items
		foreach($this->items as $rss_item) {
			$xml .= '<item>' . "\n";
			$xml .= '<title>' . $rss_item['title'] . '</title>' . "\n";
			$xml .= '<link>' . $rss_item['link'] . '</link>' . "\n";
			$xml .= '<description>' . $rss_item['description'] . '</description>' . "\n";
			$xml .= '<pubDate>' . $rss_item['pubDate'] . '</pubDate>' . "\n";
			$xml .= '<category>' . $rss_item['category'] . '</category>' . "\n";
			$xml .= '<source>' . $rss_item['source'] . '</source>' . "\n";
			$xml .= '</item>' . "\n";
		}

		$xml .= '</channel>';

		$xml .= '</rss>';

		echo $xml;
	}
}
