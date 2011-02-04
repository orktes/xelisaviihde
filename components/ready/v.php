<?php
defined( 'parentFile' ) or die( 'No direct access! Olet väärässä paikassa!' ); 
require_once($XEEDIR.'libs/mvc/v.php');
class ReadyXElisaViihdeView extends XElisaViihdeView {
	
	
	function render($tmpl='default') {
		$model=$this->getModel();	
		$ready = $model->getReady();
		
		$folders = $ready->ready_data[0]->folders;
		$recordings = $ready->ready_data[0]->recordings;
		$folderid=$model->getFolderId();
		
		
		
		
		
	
		$view="";
		if(isset($_REQUEST['view'])) {
			$view=$_REQUEST['view'];
		}
		if($view!=""||$view!="coverflow") {
			$tmpl=$view;
		} else {
			$tmpl="default";
		}
		
		
	$this->assignRef('view',$view);
		$this->assignRef('folders',$folders);
		$this->assignRef('recordings',$recordings);
		$this->assignRef('folderid',$folderid);
		
		
		
		return parent::render($tmpl);
	}
}