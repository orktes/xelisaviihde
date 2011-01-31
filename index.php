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

include('includes/variables.inc');
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
<link><?php echo $XEEURL; ?>ready.php</link>                    
<media:thumbnail url="<?php echo $XEEDIR; ?>images/mainmenuready.jpg" />    
<image><?php echo $XEEDIR; ?>images/mainmenuready.jpg</image>    
<imageover><?php echo $XEEDIR; ?>images/mainmenuready_over.jpg</imageover> 
 <itemid>0</itemid>

</item>
<item>
<title>Tulevat nauhoitukset</title>
<link><?php echo $XEEURL; ?>scheduled.php</link> >                    
<media:thumbnail url="<?php echo $XEEDIR; ?>images/mainmenuscheduled.jpg" />    
<image><?php echo $XEEDIR; ?>images/mainmenuscheduled.jpg</image>    
<imageover><?php echo $XEEDIR; ?>images/mainmenuscheduled_over.jpg</imageover> 
 <itemid>1</itemid>

</item>
<item>
<title>Kanavaopas</title>
<link><?php echo $XEEURL; ?>epg.php</link>                     
<media:thumbnail url="<?php echo $XEEDIR; ?>images/mainmenuinfo.jpg" />  
<image><?php echo $XEEDIR; ?>images/mainmenuinfo.jpg</image>    
<imageover><?php echo $XEEDIR; ?>images/mainmenuinfo_over.jpg</imageover> 
 <itemid>2</itemid>
  
</item>
<item>
<title>Asetukset</title>
<link><?php echo $XEEURL; ?>settings.php</link> 
<media:thumbnail url="<?php echo $XEEDIR; ?>images/mainmenusettings.jpg" />    
<image><?php echo $XEEDIR; ?>images/mainmenusettings.jpg</image>    
<imageover><?php echo $XEEDIR; ?>images/mainmenusettings_over.jpg</imageover> 
 <itemid>3</itemid>

</item>
<item>
<title>Päivitä</title>
<link><?php echo $XEEURL; ?>update.php</link> 
<media:thumbnail url="<?php echo $XEEDIR; ?>images/mainmenuupdate.jpg" />  
<image><?php echo $XEEDIR; ?>images/mainmenuupdate.jpg</image>    
<imageover><?php echo $XEEDIR; ?>images/mainmenuupdate_over.jpg</imageover> 
<itemid>4</itemid>
  
</item>
</channel>
</rss>