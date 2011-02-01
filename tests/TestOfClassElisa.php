
<?php


require_once(dirname(__FILE__) . '/simpletest/autorun.php');
require_once(dirname(__FILE__) . '/../libs/elisa.class.php');
require_once(dirname(__FILE__) . '/../configuration.php');

class TestOfClassElisa extends UnitTestCase {
	
    function testLoginSuccessful() {
    	global $username, $password;    	
    	$elisaviihde = new PHPElisaViihde($username, $password);
    	$this->assertTrue($elisaviihde->login());
    	
    }
    
	function testGetScheduledRecordings() {
    	global $username, $password;    	
    	$elisaviihde = new PHPElisaViihde($username, $password);   
    	$records=$elisaviihde->getScheduledRecordings(); 
    	$this->assertTrue(isset($records->recordings)&&is_array($records->recordings));
    	
    }
    
		function testGetReady() {
    	global $username, $password;    	
    	$elisaviihde = new PHPElisaViihde($username, $password);    
    	$ready=$elisaviihde->getReady("");
    	$this->assertTrue(isset($ready->ready_data[0]->folders)&&isset($ready->ready_data[0]->recordings)&&is_array($ready->ready_data[0]->folders)&&is_array($ready->ready_data[0]->recordings));
    	
    }
    function testGetTopList() {
    	global $username, $password;    	
    	$elisaviihde = new PHPElisaViihde($username, $password);    
    	$toplist=$elisaviihde->getTopList();
    	$this->assertTrue(isset($toplist->programs)&&is_array($toplist->programs));
    	
    }
    function testGetChannels() {
    	global $username, $password;    	
    	$elisaviihde = new PHPElisaViihde($username, $password);    
    	$channels=$elisaviihde->getChannels();
    	$this->assertTrue(isset($channels->channels)&&is_array($channels->channels));
    	
    }
   
  function testGetWildcards() {
    	global $username, $password;    	
    	$elisaviihde = new PHPElisaViihde($username, $password);    
    	$wildcards=$elisaviihde->getRecordingWildCards();
    	$this->assertTrue(isset($wildcards->wildcardrecordings)&&is_array($wildcards->wildcardrecordings));
    	
    }
}

