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
<title><?php echo urldecode ($recording->name); ?></title>
<link></link>     
<media:thumbnail url="http://tvmedia16.pa.saunalahti.fi/thumbnails/<?php echo $recording->program_id; ?>.jpg" />
               
<link><?php echo $XEEURL; ?>watch.php?id=<?php echo $recording->program_id; ?></link>

<enclosure type="video/mpeg"  url="<?php echo $XEEURL; ?>watch.php?id=<?php echo $recording->program_id; ?>"/>
<xeeType><![CDATA[recording]]></xeeType>
<id><?php echo $recording->id; ?></id>
<programId><?php echo $recording->program_id; ?></programId>
<folderId><?php echo $recording->folder_id; ?></folderId>
<name><![CDATA[<?php echo urldecode ($recording->name); ?>]]></name>
<channel><![CDATA[<?php echo $recording->channel; ?>]]></channel>
<startTime><![CDATA[<?php echo $recording->start_time; ?>]]></startTime>
<timestamp><![CDATA[<?php echo $recording->timestamp; ?>]]></timestamp>
<viewcount><![CDATA[<?php echo $recording->viewcount; ?>]]></viewcount>
<videolength><?php echo $recording->length; ?></videolength>
<description><![CDATA[Ei vielä implementoitu]]></description>

    

</item>