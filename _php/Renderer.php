<?php

class Renderer 
{
	private $template;

    function __construct($template) 
    {
    	if (!is_file($template))
        {
        	throw new FileNotFoundException("File not found: $template");
        } 
        elseif (!is_readable($template))
        {
            throw new IOException("Could not access file: $template");
        } 
        else
        {
            $this->template = $template;
        }
    }

    public function set($var, $content)
    {
        $this->$var = $content;
    }

    public function parse()
    {
        ob_start();
        require $this->template;
        $content = ob_get_clean();
        return $content;
    }
    
    public function publish()
    {
        print $this->parse();
    }
    
}
?>