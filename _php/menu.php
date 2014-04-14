<?php
class CMenu {

	/* VARIABLES */
	
	// Array containing all the parent nodes in order
	var $mainMenu = array();
	// Array containing, in each cell, an array of subMenus
	var $subMenus = array();
	// Index of the current parent, used to store the subMenus at the right index in the subMenus Array
	var $countParent;
	// Index of the current child, used to number xChild objects
	var $currentChildID;
	
	var $javaScript = '';
	/* CONSTRUCTOR */
	
	function CMenu(){
	
		$this->countParent = 0;
		$this->currentChildID = 0;
	
	}//CMenu constructor

	/* EXTERNAL FUNCTIONS */
	
	// addParent : Appends a new parent in the menu list
	function addMenu($title,$link = false){
		
		$this->countParent ++;
		$newParent = new xParent($title,$link);
		$this->mainMenu[$this->countParent] = $newParent;
		
	}//addMenu


	// addChild : Appends a new child in the menu list and under the last parent added
	function addSubMenu($title,$link = false){
		
		$this->currentChildID ++;
		$newChild = new xChild($this->currentChildID,$title,$link);
		$this->subMenus[$this->countParent][] = $newChild;
		
	}//addSubMenu
	
	// generateMenu : Lists the mainMenu and subMenus and generates both html and javascript code
	// The code is ready to be use in the webpage to display the menu
	function generateMenu($ActiveParentTitle,$ActiveChildTitle){
		
		$str = '';
		
		foreach($this->mainMenu as $index=>$parent){
			
			if(!empty($parent)){
				
				//Opening the parent DIV
                                if($parent->title == $ActiveParentTitle && $ActiveChildTitle == "") {
				 	$str .= "<div id=\"MainMenuActive\" onClick=\"xMenu".$index."();\">"; 
                                } else {
				 	$str .= "<div id=\"MainMenu\" onClick=\"xMenu".$index."();\">"; 
                                }
								
				//This parent may have a link on itself to display
				if(empty($parent->link)){
					$str .= $parent->title."</div>\n";
				}else{
					$str .= "<a href=\"".$parent->link."\">".$parent->title."</a></div>\n";
				}
				
				//If this parent has subMenus (1 or more)
				if(isset($this->subMenus[$index])){
					
					//List the subMenus of this parent
					foreach($this->subMenus[$index] as $child){
						
                                                if($parent->title == $ActiveParentTitle) {
                                                        $display = "block";
                                                } else {
                                                        $display = "none";
                                                }


						if(empty($child->link)){
							$str .= "	<div style=\"display:".$display.";\"><div id=\"childX\"><span style=\"cursor:text;\">".$child->title."</span></div></div>\n";
						}else{
              if($child->title == $ActiveChildTitle)
              {
                $childX = "childXActive"; 
              }
              else
              {
                $childX = "childX"; 
              }
							$str .= "	<div style=\"display:".$display.";\"><div id=\"".$childX."\"><a href=\"".$child->link."\">".$child->title."</a></div></div>\n";
						}
							
					}//for each child
					
				}//if there are one or more subMenus

			}//if not empty
		
		}//for each parent
		
		return array("html"=>$str,"js"=>$this->javaScript);
		
	}//generateMenu

}//class CMenu



/* INTERNAL CLASSES */


// xParent : Created by the 'xpandMenu' object, contains all information about a specific parent
class xParent {
	
	var $title;
	var $link;
	
	function xParent($title,$link = false){
		
		$this->title = $title;
		$this->link = $link;
		
	}//xParent constructor
	
}//xParent


// xChild : Created by the 'xpandMenu' object, contains all information about a specific child
class xChild {

	var $title;
	var $link;
	var $id;
	
	function xChild($id,$title,$link = false){
		
		$this->id = $id;
		$this->title = $title;
		$this->link = $link;
	
	}//xChild constructor

}//xChild

?>
