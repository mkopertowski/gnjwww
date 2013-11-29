<?php

class CArticle {
  var $xmlfile;
  var $htmlpage;
  var $xh;

  function display() { 
    if($this->htmlpage) {
      print $this->htmlpage; 
    }
  }

  function CArticle($sec,$id) {
    
    $this->xmlfile = $id.'.xml';

    $this->xh = xslt_create(); 
  
    $path2xml = './'.$sec.'/'.$id.'/'.$this->xmlfile;

    $this->htmlpage = xslt_process($this->xh, $path2xml, './libs/xsl/article.xsl');
  } 
}
// sec - section name polska,swiat,rozne, etc. / directory name
// id - article xml file. should be placed in the following directory ./sec/id/id.xml
// 
// article.php?sec=xxxx;id=yyyy

$Article = new CArticle($_REQUEST['sec'],$_REQUEST['id']); 

$Article->display();

xslt_free($xh); 

?>
