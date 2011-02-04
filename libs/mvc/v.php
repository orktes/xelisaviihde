<?php
defined( 'parentFile' ) or die( 'No direct access! Olet väärässä paikassa!' ); 
class XElisaViihdeView {

	private $model=null;
	private $layout=null;

function assignRef($key, &$val)
	{
		if (is_string($key) && substr($key, 0, 1) != '_')
		{
			$this->$key =& $val;
			return true;
		}

		return false;
	}
	function setModel($model) {		
		$this->model=$model;
	} 
	
	function setLayout($layout) {
		
		$this->layout=$layout;
	
	}
function getModel() {		
		return $this->model;
	} 
	
	function getLayout() {
		
		return $this->layout;
	
	}
	
function render($tmpl='default') {
		

        ob_start();    
 	
        include $this->layout.'/'.$tmpl.'.php';
        $contents = ob_get_contents();
        ob_end_clean();
        return $contents;
    
		
		
	}
	
	
	
	
}