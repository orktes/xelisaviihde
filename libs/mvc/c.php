<?php
defined( 'parentFile' ) or die( 'No direct access! Olet väärässä paikassa!' ); 
class XElisaViihdeController {
	private $model=null;
	private $view=null;
	private $layout=null;
	
	function __construct($m, $v, $layout) {
		$v->setModel($m);
		$v->setLayout($layout);		
		$this->model=$m;
		$this->view=$v;
		$this->layout=$layout;
		
		
	}
	function getModel() {
		return $this->model;
	}
	function getView() {
		return $this->view;
	}
	function render($tmpl='default') {
		
	 return	$this->view->render($tmpl);
		
	}
	
	
	function execute($command) {
		
		
		
		$thisMethods	= get_class_methods( get_class( $this ) );
		$methods=array();
		foreach ( $thisMethods as $method )
		{
			if ( substr( $method, 0, 1 ) != '_' ) {
				$methods[strtolower($method)]=$method;
			}
		}
		$methods['render']='render';
		if(isset($methods[strtolower($command)])) {
			return $this->$methods[strtolower($command)]();
		} else {
			return $this->render();
		}


	}

}