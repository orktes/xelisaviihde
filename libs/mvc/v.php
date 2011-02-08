<?php
/* Copyright Jaakko Lukkari 2011 
 *  
 * This program is free software; you can redistribute it and/or modify 
 * it under the terms of the GNU General Public License as published by 
 * the Free Software Foundation; either version 2 of the License, or 
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful, but 
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY 
 * or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License 
 * for more details.
 * 
 * You should have received a copy of the GNU General Public License along 
 * with this program; if not, write to the Free Software Foundation, Inc., 
 * 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
 */
defined( 'parentFile' ) or die( 'No direct access! Olet väärässä paikassa!' ); 
class XRuutuView {

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
