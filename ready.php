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
//error_reporting(E_ALL);
//ini_set('display_errors', '1');


require_once('configuration.php');
require_once('libs/elisa.class.php');
include('includes/functions.inc');


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
?>

<rss version="2.0"  xmlns:media="http://purl.org/dc/elements/1.1/"  xmlns:dc="http://purl.org/dc/elements/1.1/">

  <log>
    old = readStringFromFile("/tmp/usbmounts/sda1/debug.txt");
    time = readStringFromFile("/tmp/currenttime");
    new = old + "&#x0A;" + time + ": " + txt;
    writeStringToFile("/tmp/usbmounts/sda1/debug.txt", new);
  </log>


<loadData>

thumb = getItemInfo(getFocusItemIndex(), "thumbnail");
name = getItemInfo(getFocusItemIndex(), "name");
 txt = name; executeScript("log");  


</loadData>

<onEnter>
 executeScript("loadData");
</onEnter>

<onExit>
setRefreshTime(-1);
</onExit>

  <onRefresh>
    setRefreshTime(-1);
    executeScript("loadData");

    txt = "redrawDisplay executed for FMI = " + FMI + " - " + movieTitle; executeScript("log"); 
    redrawDisplay();

  </onRefresh>





 <mediaDisplay  name="photoFocusView"
    imageBottomSide="null"
    imageTopSide="null"
    imageFocusItemBackground="null"
    imageItemBackground="null"
    imageFocus="null"
    imageParentFocus="null"
    backgroundColor="0:0:0"
    rowCount="1"
    columnCount="5"
    fontSize="12"
    sideTopHeightPC="0"
    sideColorTop="-1:-1:-1"
    sideColorBottom="-1:-1:-1"
    itemOffsetXPC="10"
    itemImageOffsetXPC="0"
    itemOffsetYPC="70.8"
        
    itemWidthPC="14"
    itemHeightPC="14"
    itemBorderColor="0:250:180"
    itemBackgroundWidthPC="0"
    itemBackgroundHeightPC="0"
    itemGapXPC="1.43"
    focusItemOffsetYPC="69"
    focusItemOffsetXPC="0"
    focusItemWidthPC="17"
    focusItemHeightPC="17"
    focusItemBackgroundWidthPC="0"
    focusItemBackgroundHeightPC="0"
    bottomYPC="85"
    showHeader="yes"
    showDefaultInfo="no"
    idleImageXPC="89"
    idleImageYPC="8"
    idleImageWidthPC="6"
    idleImageHeightPC="10">



        <idleImage>/tmp/usbmounts/sda1/scripts/xLive/image/busy1.png</idleImage>
        <idleImage>/tmp/usbmounts/sda1/scripts/xLive/image/busy2.png</idleImage>
        <idleImage>/tmp/usbmounts/sda1/scripts/xLive/image/busy3.png</idleImage>
        <idleImage>/tmp/usbmounts/sda1/scripts/xLive/image/busy4.png</idleImage>
        <idleImage>/tmp/usbmounts/sda1/scripts/xLive/image/busy5.png</idleImage>
        <idleImage>/tmp/usbmounts/sda1/scripts/xLive/image/busy6.png</idleImage>
        <idleImage>/tmp/usbmounts/sda1/scripts/xLive/image/busy7.png</idleImage>
        <idleImage>/tmp/usbmounts/sda1/scripts/xLive/image/busy8.png</idleImage>




<text redraw="yes" tailDots="yes" fontSize="14" lines="1"
                                        offsetXPC="43" offsetYPC="25" widthPC="80" heightPC="5" 
                                        backgroundColor="0:0:0" foregroundColor="0:154:205">
      <script>  getItemInfo(getFocusItemIndex(), "name");
</script>

    </text>
    <text redraw="yes" tailDots="yes" fontSize="14" lines="1"
                                        offsetXPC="43" offsetYPC="30" widthPC="80" heightPC="5" 
                                        backgroundColor="0:0:0" foregroundColor="0:154:205">
      <script> 
    
       getItemInfo(getFocusItemIndex(), "channel");
      
</script>

    </text>
    <text redraw="yes" tailDots="yes" fontSize="14" lines="1"
                                        offsetXPC="43" offsetYPC="35" widthPC="80" heightPC="5" 
                                        backgroundColor="0:0:0" foregroundColor="0:154:205">
      <script> 
    
       getItemInfo(getFocusItemIndex(), "startTime");
  
</script>

    </text>
        <text redraw="yes" tailDots="yes" fontSize="14" lines="1"
                                        offsetXPC="43" offsetYPC="40" widthPC="80" heightPC="5" 
                                        backgroundColor="0:0:0" foregroundColor="0:154:205">
      <script> 
      
kesto = getItemInfo(getFocusItemIndex(), "videolength");
      "kesto: "+ kesto +" min";

</script>

    </text>
  <image redraw="yes" offsetXPC=10 offsetYPC=25 widthPC=32.9 heightPC=33.2>
        <script>
        getItemInfo(getFocusItemIndex(), "thumbnail");
        </script>
      </image>

</mediaDisplay>
 
  <destination>
      <link>
        <script>
          url;
        </script>

      </link>
  </destination>



<channel>
<title>Nauhoitukset</title>

<?php if($folderid!="") { include("templates/rss.prevfolder.php"); } ?>
<?php  include("templates/rss.newfolder.php"); ?>
<?php foreach($folders as $folder) { include("templates/rss.folder.php");  }  ?>
<?php foreach($recordings as $recording) { include("templates/rss.recording.php");  }  ?>

</channel>
</rss>