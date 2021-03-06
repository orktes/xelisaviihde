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

global $XEEDIR, $XEEURL;

//header("Content-Type: application/rss+xml");
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
                                        backgroundColor="0:0:0" foregroundColor="255:255:255">
      <script>  
      getItemInfo(getFocusItemIndex(), "name");

</script>

    </text>
    <text redraw="yes" tailDots="yes" fontSize="14" lines="1"
                                        offsetXPC="43" offsetYPC="30" widthPC="80" heightPC="5" 
                                        backgroundColor="0:0:0" foregroundColor="255:255:255">
      <script> 
    
      if(getItemInfo(getFocusItemIndex(), "xeeType")=="recording") {
          getItemInfo(getFocusItemIndex(), "channel");
      } else if(getItemInfo(getFocusItemIndex(), "xeeType")=="folder") {
    	  koko=getItemInfo(getFocusItemIndex(), "size");
	"Koko: "+koko;
      } else {
    	  "";
    	            }
      
</script>

    </text>
    <text redraw="yes" tailDots="yes" fontSize="14" lines="1"
                                        offsetXPC="43" offsetYPC="35" widthPC="80" heightPC="5" 
                                        backgroundColor="0:0:0" foregroundColor="255:255:255">
      <script> 
      if(getItemInfo(getFocusItemIndex(), "xeeType")=="recording") {
          getItemInfo(getFocusItemIndex(), "startTime");
    } else if(getItemInfo(getFocusItemIndex(), "xeeType")=="folder") { 
    	  maara=getItemInfo(getFocusItemIndex(), "recordingsCount");
    		"Nauhoituksia "+maara+" kpl";
    } else {
    	"";
    	          }
  
</script>

    </text>
        <text redraw="yes" tailDots="yes" fontSize="14" lines="1"
                                        offsetXPC="43" offsetYPC="40" widthPC="80" heightPC="5" 
                                        backgroundColor="0:0:0" foregroundColor="255:255:255">
      <script> 
      if(getItemInfo(getFocusItemIndex(), "xeeType")=="recording") {
    	      
kesto = getItemInfo(getFocusItemIndex(), "videolength");
      "kesto: "+ kesto +" min";
      } else {
"";
          }

</script>

    </text>
  <image redraw="yes" offsetXPC=10 offsetYPC=25 widthPC=32.9 heightPC=33.2>
        <script>
        getItemInfo(getFocusItemIndex(), "thumbnail");
        </script>
      </image>
  <image offsetXPC=10 offsetYPC=6.8 widthPC=20 heightPC=15>
      <?php echo $XEEDIR; ?>images/logo_small.jpg
      </image>
      
<onUserInput>
userInput = currentUserInput();

      
      /* OPEN LISTVIEW */
      if ( userInput == "2" )  {
          showIdle();
        url =  "<?php echo $XEEURL ?>ready.php?view=listview";
        jumpToLink("destination");
        redrawDisplay();
        ret;
      }
      
  </onUserInput>   
      
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

<?php // if($folderid!="") { include("templates/rss.prevfolder.php"); } ?>
<?php // include("templates/rss.newfolder.php"); ?>
<?php foreach($this->folders as $folder) { include($XEEDIR."components/ready/layout/rss.folder.php");  }  ?>
<?php foreach($this->recordings as $recording) { include($XEEDIR."components/ready/layout/rss.recording.php");  }  ?>

</channel>
</rss>