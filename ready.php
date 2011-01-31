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



require_once('configuration.php');
require_once('libs/elisa.class.php');
include('includes/variables.inc');


$elisaviihde = new PHPElisaViihde($username, $password);

$folderid="";
if(isset($_GET['folder'])){
	$folderid=$_GET['folder'];
}

$ready = $elisaviihde->getReady($folderid);
$folders = $ready->ready_data[0]->folders;
$recordings = $ready->ready_data[0]->recordings;

header("Content-Type: application/rss+xml");
echo  "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\n";


include('includes/inittemplate.inc');

?>
