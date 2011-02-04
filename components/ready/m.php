<?php

defined( 'parentFile' ) or die( 'No direct access! Olet väärässä paikassa!' ); 
require_once($XEEDIR.'libs/mvc/m.php');
class ReadyXElisaViihdeModel extends XElisaViihdeModel {

	function getReady() {
		$elisaviihde = parent::getElisaviihde();
		if(!$elisaviihde->isLogged()) {
			$elisaviihde->login();
		}


		$folderid="";
		if(isset($_REQUEST['folder'])){
			$folderid=$_GET['folder'];
		}

		return $elisaviihde->getReady($folderid);

	}
	
	function getFolderId() {
	$folderid="";
		if(isset($_GET['folder'])){
			$folderid=$_GET['folder'];
		}
		
		return $folderid;
	}

}