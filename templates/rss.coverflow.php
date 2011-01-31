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
      <?php echo $XEEDIR; ?>images/mainmenulogo.png
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

<?php // if($folderid!="") { include("templates/rss.prevfolder.php"); } ?>
<?php // include("templates/rss.newfolder.php"); ?>
<?php foreach($folders as $folder) { include("templates/rss.folder.php");  }  ?>
<?php foreach($recordings as $recording) { include("templates/rss.recording.php");  }  ?>

</channel>
</rss>