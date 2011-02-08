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
class XRuutuController {
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
