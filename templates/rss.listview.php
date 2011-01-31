<rss version="2.0"  xmlns:media="http://purl.org/dc/elements/1.1/"  xmlns:dc="http://purl.org/dc/elements/1.1/">
<channel>
<title>Nauhoitukset</title>

<?php // if($folderid!="") { include("templates/rss.prevfolder.php"); } ?>
<?php // include("templates/rss.newfolder.php"); ?>
<?php foreach($folders as $folder) { include("templates/rss.folder.php");  }  ?>
<?php foreach($recordings as $recording) { include("templates/rss.recording.php");  }  ?>

</channel>
</rss>