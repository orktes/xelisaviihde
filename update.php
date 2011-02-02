<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');



require_once('libs/pclzip.lib.php');

$updateInfoUrl="http://xelisaviihde.googlecode.com/svn/wiki/UpdateInfo.wiki";
$currentVersionInfo="version.xml";

$updateXml=file_get_contents($updateInfoUrl);


if(file_exists($currentVersionInfo)) {
$curdoc = new DOMDocument();
$curdoc->load( $currentVersionInfo );
$currentVersion = $curdoc->getElementsByTagName( "version" )->item(0)->nodeValue;
} else {
$currentVersion="0.0.0";	
}

$newdoc = new DOMDocument();
$newdoc->loadXML( $updateXml );
$newestVersion = $newdoc->getElementsByTagName( "version" )->item(0)->nodeValue;
$downloadUrl=$newdoc->getElementsByTagName( "url" )->item(0)->nodeValue;
$changeLog=$newdoc->getElementsByTagName( "changeLog" )->item(0)->nodeValue;

$currentVersion = $currentVersion;
$newestVersion = $newestVersion;

if(version_compare($currentVersion, $newestVersion, '<')) {

	
	//get file
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $downloadUrl);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_FAILONERROR, true);
    curl_setopt($ch, CURLOPT_AUTOREFERER, true);
    curl_setopt($ch, CURLOPT_BINARYTRANSFER,true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $file = curl_exec($ch);
    curl_close($ch);
    $fp = fopen('updateTempFile.zip', 'w');
    fwrite($fp, $file);
    fclose($fp);
	
	
	$archive = new PclZip('updateTempFile.zip');
    

	if ($archive->extract(PCLZIP_OPT_PATH, '.',
                        PCLZIP_OPT_REMOVE_PATH, 'xelisaviihde',  PCLZIP_OPT_REPLACE_NEWER) == 0) {
                        	
                   unlink('updateTempFile.zip');
	echo "Epäonnistui!";
		
				//Päivitys epäonnistui
		
	} else {
		
	unlink('updateTempFile.zip');
		echo "Onnistui!";	//päivitys onnistui
	}
	
	
	
}
  
  