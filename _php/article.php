<?php

error_reporting(E_ALL);


class CArticle {
  var $xmlfile;
  var $htmlpage;
  var $xh;

  function display() { 
    if($this->htmlpage) {
      print $this->htmlpage; 
    }
  }

  function CArticle($sec,$id,$lang) {
    
    $this->xmlfile = $id.'.xml';
  
    $path2xml = $sec.'/'.$id.'/'.$this->xmlfile;

    if(@function_exists(xslt_create))
    {
      $this->xh = xslt_create(); 

      if($lang == "en")
      {
        $this->htmlpage = xslt_process($this->xh, $path2xml, '_php/xsl/articleEN.xsl');
      }
      else
      {
        $this->htmlpage = xslt_process($this->xh, $path2xml, '_php/xsl/article.xsl');
      }   
    }
    else
    {
      $xml = new DomDocument;
      $xml->load($path2xml);

      $xsl = new DomDocument;
      if($lang == "en")
      {
        $xsl->load('_php/xsl/articleEN.xsl');
      }
      else
      {
        $xsl->load('_php/xsl/article.xsl');
      }   

      $proc = new xsltprocessor;
      $proc->importStyleSheet($xsl);
      $this->htmlpage = $proc->transformToXML($xml); 
    }
  } 
}
// sec - section name polska,swiat, etc. / directory name
// id - article xml file. should be placed in the following directory ./sec/id/id.xml
// 
// article.php?sec=xxxx;id=yyyy

$Article = new CArticle($_REQUEST['sec'],$_REQUEST['id'],$_REQUEST['lang']); 

$Article->display();

if(@function_exists(xslt_free))
{
  xslt_free($xh); 
}

?>
