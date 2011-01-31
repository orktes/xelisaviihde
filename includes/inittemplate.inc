<?php
$view="coverflow";
if(isset($_GET['view'])) {
	if($_GET['view']=="listview") {
		$view = "listview";
	}	
}

include('templates/rss.'.$view.'.php');