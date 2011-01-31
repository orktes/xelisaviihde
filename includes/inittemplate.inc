<?php
$view="coverflow";
if(isset($_GET['view'])) {
	if($_GET['view']=="listview") {
		$view = "listview";
	}	
$expire=time()+60*60*24*30;
setcookie("view", $view, $expire);
} else if(isset($_COOKIE['view'])) {
	if($_COOKIE['view']=="listview") {
		$view = "listview";
	}
}

include('templates/rss.'.$view.'.php');