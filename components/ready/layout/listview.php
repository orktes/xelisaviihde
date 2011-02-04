<?php 
defined( 'parentFile' ) or die( 'No direct access! Olet väärässä paikassa!' ); 

global $XEEDIR, $XEEURL;

header("Content-Type: application/rss+xml");
echo  "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\n";
?>
<rss version="2.0"  xmlns:media="http://purl.org/dc/elements/1.1/"  xmlns:dc="http://purl.org/dc/elements/1.1/">

<item_template>
<onClick>
<script>
		movieLink=   getItemInfo(getFocusItemIndex(), "link");
        playItemURL(movieLink, 0, "mediaDisplay");
      </script>
</onClick>
</item_template>

 <mediaDisplay  name="onePartView"  
	showDefaultInfo="no" showHeader="no"
	thumbnail="" sideLeftWidthPC="0" rowCount="28" columnCount="1"
	itemPerPage="30" itemImageXPC="65" itemXPC="65" itemYPC="5"
	itemWidthPC="50" itemHeightPC="3" backgroundColor="0:0:0"
	itemBackgroundColor="80:80:80"
	focusBorderColor="0:0:200" itemGapXPC=0 itemGapYPC=0
	itemImageWidthPC="0" itemImageHeightPC="0"   idleImageXPC="89"
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
                                        offsetXPC="10" offsetYPC="65" widthPC="35" heightPC="5" 
                                        backgroundColor="0:0:0" foregroundColor="255:255:255">
      <script>  
      getItemInfo(getFocusItemIndex(), "name");

</script>

    </text>
    <text redraw="yes" tailDots="yes" fontSize="14" lines="1"
                                        offsetXPC="10" offsetYPC="70" widthPC="35" heightPC="5" 
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
                                        offsetXPC="10" offsetYPC="75" widthPC="35" heightPC="5" 
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
                                        offsetXPC="10" offsetYPC="80" widthPC="35" heightPC="5" 
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
        url =  "<?php echo $XEEURL ?>ready.php?view=coverflow";
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