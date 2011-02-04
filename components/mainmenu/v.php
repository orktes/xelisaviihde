<?php
defined( 'parentFile' ) or die( 'No direct access! Olet väärässä paikassa!' ); 
require_once($XEEDIR.'libs/mvc/v.php');
class MainMenuXElisaViihdeView extends XElisaViihdeView {
	
	
	function render($tmpl='default') {
		$model=$this->getModel();
	
		
		return parent::render($tmpl);
	}
}