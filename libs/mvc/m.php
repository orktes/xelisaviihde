<?php
defined( 'parentFile' ) or die( 'No direct access! Olet väärässä paikassa!' ); 
class XElisaViihdeModel {
	
	private $elisaviihde =null;
	
		function __construct($elisaviihde) {
			
			$this->elisaviihde=$elisaviihde;
			
		}
	
		function getElisaViihde() {
			return $this->elisaviihde;
		}
	
	
}