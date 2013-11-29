<?php 

include("../_php/Renderer.php");

class RendererGNJ
{
	private $MainPage;
	private $SubPage;
	
	function __construct($template,$showMenu = true)
	{
		$this->MainPage = new Renderer("./_tpl/main.tpl.php");
		$this->SubPage = new Renderer($template);		
		
		if($showMenu == true)
		{
			$Menu = new Renderer("./_tpl/menu.tpl.php");
			$this->MainPage->set("menu",$Menu->parse());
		}
	}
	
	public function setInfo($info)
	{
		$this->MainPage->set("info",$info);
	}

	public function set($var, $content)
	{
		$this->SubPage->set($var,$content);
	}
		
	public function publish()
	{
		$this->MainPage->set("content",$this->SubPage->parse());
		$this->MainPage->publish();
	}
}

?>