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
?>
<item>
<title><?php echo $folder->name ?> - <?php echo $folder->recordings_count ?> nauhoitusta - <?php echo $folder->size ?></title>
<link><?php echo curPageDirURL(); ?>ready.php?folder=<?php echo $folder->id; ?><?php if($folderid!="") { echo urlencode("&pfolder=").$folderid; } ?></link>                    
<media:thumbnail url="<?php echo curPageDirURL(); ?>images/folder.jpg" />    

<xeeType><![folder]]></xeeType>
<id><?php echo $folder->id; ?></id>
<name><![CDATA[Kansio: <?php echo $folder->name; ?>]]></name>
<size><![CDATA[<?php echo $folder->size; ?>]]></size>
<recordingsCount><![CDATA[<?php echo $folder->recordings_count; ?>]]></recordingsCount>

</item>