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

define( 'parentFile' , 1 );

require_once('configuration.php');
require_once('includes/variables.inc');
require_once('libs/elisa.class.php');

$elisaviihde = new PHPElisaViihde($username, $password);

$option="mainmenu";

if(isset($_REQUEST['option'])) {
	$option=$_REQUEST['option'];
}




if(file_exists($XEEDIR.'components/'.$option.'/layout/default.php')
&& file_exists($XEEDIR.'components/'.$option.'/m.php')
&& file_exists($XEEDIR.'components/'.$option.'/v.php')
&& file_exists($XEEDIR.'components/'.$option.'/c.php')) {

	require_once($XEEDIR.'components/'.$option.'/m.php');
	require_once($XEEDIR.'components/'.$option.'/v.php');
	require_once($XEEDIR.'components/'.$option.'/c.php');

	$layout=$XEEDIR.'components/'.$option.'/layout/';


	//luodaan model
	$modelclassname = $option."XElisaViihdeModel";
	$model = new $modelclassname($elisaviihde);

	//luodaan view
	$viewclassname = $option."XElisaViihdeView";
	$view = new $viewclassname();

	//luodaan controlleri
	$controllerclassname = $option."XElisaViihdeController";
	$contoller = new $controllerclassname($model, $view,$layout);


	if(isset($_REQUEST['task'])) {

		echo $contoller->execute($_REQUEST['task']);
		
	} else {

		echo $contoller->render();

	}

} else {
	echo "Komponenttia ".$option." ei löydy tai se on puutteellinen.";
}


