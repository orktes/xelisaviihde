<?php 

defined( 'parentFile' ) or die( 'No direct access! Olet väärässä paikassa!' ); 
require_once($XEEDIR.'libs/mvc/m.php');
class MainMenuXElisaViihdeModel extends XElisaViihdeModel {
	function getMenuItems() {
		
		global $XEEDIR;
		
		$menuitems = array();
		
		$mainmenudoc = new DOMDocument();
		$mainmenudoc->load( $XEEDIR."components/mainmenu/mainmenu.xml" );
		$xmlItems = $mainmenudoc->getElementsByTagName( "item" );
		
		foreach ($xmlItems AS $item) {
			$menuitem = new stdClass();
			
			$menuitem->name=$item->getElementsByTagName( "name" )->item(0)->nodeValue;
			$menuitem->component=$item->getElementsByTagName( "component" )->item(0)->nodeValue;
			$menuitem->image=$item->getElementsByTagName( "image" )->item(0)->nodeValue;
			$menuitem->imageover=$item->getElementsByTagName( "imageover" )->item(0)->nodeValue;
			
			$menuitems[]=$menuitem;
			
		}
		
		
		return $menuitems;
	}
	
	
}