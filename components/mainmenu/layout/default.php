<?php 
defined( 'parentFile' ) or die( 'No direct access! Olet väärässä paikassa!' ); 

global $XEEDIR, $XEEURL;

header("Content-Type: application/rss+xml");
echo  "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\n";
?>
<rss version="2.0"  xmlns:media="http://purl.org/dc/elements/1.1/"  xmlns:dc="http://purl.org/dc/elements/1.1/">


 <mediaDisplay  name="photoView"
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
    itemOffsetXPC="50"
    itemImageOffsetXPC="0"
    itemOffsetYPC="70.8"
        
    itemWidthPC="5.62"
    itemHeightPC="10"
    itemBorderColor="-1:-1:-1"
    itemBackgroundWidthPC="0"
    itemBackgroundHeightPC="0"
    itemGapXPC="1.43"
    focusItemOffsetYPC="70.3"
    focusItemOffsetXPC="0"
    focusItemWidthPC="6.19"
    focusItemHeightPC="11"
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



  <image offsetXPC=13.35 offsetYPC=23.2 widthPC=73.3 heightPC=53.6><?php echo $XEEDIR; ?>images/mainmenulogo.png</image>

<itemDisplay>
        <image redraw="yes" offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="100" >
            <script>
                if( getFocusItemIndex() == getItemInfo(-1,"itemid") )
                    getItemInfo(-1,"imageover");
                else
                    getItemInfo(-1,"image");
            </script>

        </image>
    </itemDisplay>


<text redraw="yes" tailDots="yes" fontSize="14" lines="1"
                                        offsetXPC="49" offsetYPC="83" widthPC="80" heightPC="5" 
                                        backgroundColor="0:0:0" foregroundColor="255:255:255">
      <script>  getItemInfo(getFocusItemIndex(), "title");
</script>

    </text>

</mediaDisplay>



<channel>
<title></title>
<item>
<title>Valmiit nauhoitukset</title>
<link><?php echo $XEEURL; ?>index.php?option=ready</link>                    
<media:thumbnail url="<?php echo $XEEDIR; ?>images/mainmenuicons/mainmenuready.jpg" />    
<image><?php echo $XEEDIR; ?>images/mainmenuicons/mainmenuready.jpg</image>    
<imageover><?php echo $XEEDIR; ?>images/mainmenuicons/mainmenuready_over.jpg</imageover> 
 <itemid>0</itemid>

</item>
<item>
<title>Tulevat nauhoitukset</title>
<link><?php echo $XEEURL; ?>index.php?option=scheduled</link> >                    
<media:thumbnail url="<?php echo $XEEDIR; ?>images/mainmenuicons/mainmenuscheduled.jpg" />    
<image><?php echo $XEEDIR; ?>images/mainmenuicons/mainmenuscheduled.jpg</image>    
<imageover><?php echo $XEEDIR; ?>images/mainmenuicons/mainmenuscheduled_over.jpg</imageover> 
 <itemid>1</itemid>

</item>
<item>
<title>Kanavaopas</title>
<link><?php echo $XEEURL; ?>index.php?option=epg</link>                     
<media:thumbnail url="<?php echo $XEEDIR; ?>images/mainmenuicons/mainmenuinfo.jpg" />  
<image><?php echo $XEEDIR; ?>images/mainmenuicons/mainmenuinfo.jpg</image>    
<imageover><?php echo $XEEDIR; ?>images/mainmenuicons/mainmenuinfo_over.jpg</imageover> 
 <itemid>2</itemid>
  
</item>
<item>
<title>Asetukset</title>
<link><?php echo $XEEURL; ?>index.php?option=settings</link> 
<media:thumbnail url="<?php echo $XEEDIR; ?>images/mainmenuicons/mainmenusettings.jpg" />    
<image><?php echo $XEEDIR; ?>images/mainmenuicons/mainmenusettings.jpg</image>    
<imageover><?php echo $XEEDIR; ?>images/mainmenuicons/mainmenusettings_over.jpg</imageover> 
 <itemid>3</itemid>

</item>
<item>
<title>Päivitä</title>
<link><?php echo $XEEURL; ?>index.php?option=update</link> 
<media:thumbnail url="<?php echo $XEEDIR; ?>images/mainmenuicons/mainmenuupdate.jpg" />  
<image><?php echo $XEEDIR; ?>images/mainmenuicons/mainmenuupdate.jpg</image>    
<imageover><?php echo $XEEDIR; ?>images/mainmenuicons/mainmenuupdate_over.jpg</imageover> 
<itemid>4</itemid>
  
</item>
</channel>
</rss>



