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