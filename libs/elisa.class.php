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
class PHPElisaViihde {
	var $username=null;
	var $password=null;
	var $vhttp=null;
	var $cookie_file="cookie.txt";
	var $serviceUrl="http://elisaviihde.fi/etvrecorder/";

	function PHPElisaViihde($username, $password) {
		$this->username=$username;
		$this->password=$password;

	}

	function getProgramInformation($programId) {
		$loadUrl=$this->serviceUrl."program.sl?programid=$programId&ajax";
		$data=$this->get($loadUrl);

		return json_decode($data);

	}
	function moveProgramToFolder($programId, $folder) {
		$loadUrl=$this->serviceUrl."ready.sl?programviewid=$programId&destination=$folder&move=true&ajax";
		$data=$this->get($loadUrl);

		return json_decode($data);
	}
	function removeProgram($programId) {
		$loadUrl=$this->serviceUrl."program.sl?removep=$programId&ajax";
		$data=$this->get($loadUrl);

		return json_decode($data);
	}
	function createFolder($name, $parent=null) {
		$loadUrl=$this->serviceUrl."ready.sl?folder=$name".($parent!=null?"&parent=$parent":"")."&create_subfolder&ajax";
		$data=$this->get($loadUrl);

		return json_decode($data);
	}
	function renameFolder($folder, $new_name) {
		$loadUrl=$this->serviceUrl."ready.sl?rename_folder=$folder&name=$new_name&ajax";
		$data=$this->get($loadUrl);

		return json_decode($data);
	}
	function removeFolder($folder) {
		$loadUrl=$this->serviceUrl."ready.sl?delete_folder=$folder&ajax";
		$data=$this->get($loadUrl);

		return json_decode($data);
	}
	function getScheduledRecordings() {
		$loadUrl=$this->serviceUrl."recordings.sl?ajax";
		$data=$this->get($loadUrl);

		return json_decode($data);
	}
	function addScheduledRecording($programId, $folderid=null) {
		$loadUrl=$this->serviceUrl."program.sl?record=$programId".($folder!=null?"&folderid=$folderid":"")."&ajax";
		$data=$this->get($loadUrl);

		return json_decode($data);
	}
	function removeScheduledRecording($programId) {
		$loadUrl=$this->serviceUrl."program.sl?remover=$programId&ajax";
		$data=$this->get($loadUrl);

		return json_decode($data);
	}
	function getRecordingWildCards() {
		$loadUrl=$this->serviceUrl."wildcards.sl?ajax";
		$data=$this->get($loadUrl);
		return json_decode($data);
	}
	function addRecordingWildCard($wildcard,$channel, $folder) {
		$loadUrl=$this->serviceUrl."wildcards.sl?wildcard=$wildcard&channel=$channel&folderid=$folder&record=true&ajax";
		$data=$this->get($loadUrl);
		return json_decode($data);
	}
	function removeRecordingWildCard($wildcardid) {
		$loadUrl=$this->serviceUrl."wildcards.sl?remover=$wildcardid&ajax";
		$data=$this->get($loadUrl);
		return json_decode($data);
	}
	function getWeekSchedule() {
		$loadUrl=$this->serviceUrl."ajaxprograminfo.sl";
		$data=$this->get($loadUrl);

		return json_decode($data);
	}
	function get24HScheduleForChannel($channel) {
		$loadUrl=$this->serviceUrl."ajaxprograminfo.sl?24h=$channel";
		$data=$this->get($loadUrl);
		return json_decode($data);
	}
	function login() {
		$loadUrl=$this->serviceUrl."default.sl?username=".$this->username."&password=".$this->password."&ajax";
		$data=$this->get($loadUrl);

		return json_decode($data);
	}

	function getChannels() {

		$loadUrl=$this->serviceUrl."ajaxprograminfo.sl?channels";
		$data=$this->get($loadUrl);
		return json_decode($data);
	}

	function getTopList() {
		$loadUrl=$this->serviceUrl."channels.sl?ajax";
		$data=$this->get($loadUrl);
		return json_decode($data);
	}
	function getReady($folderid="", $pos=null) {
		$loadUrl=$this->serviceUrl."ready.sl?folderid=$folderid".($pos!=null?"&ppos=$pos":"")."&ajax";
		$data=$this->get($loadUrl);
		return json_decode($data);

	}
	function getVideoFileUrl($id) {
		$html=$this->get($this->serviceUrl.'program.sl?programid='.$id.'&view=true');
		return $this->get_string_between($html,"doGo('","')");
	}

	private function open_page($url,$f=1,$c=2,$r=0,$a=0,$cf=0,$pd=""){
		global $oldheader;
		$url = str_replace("http://","",$url);
		if (preg_match("#/#","$url")){
			$page = $url;
			$url = @explode("/",$url);
			$url = $url[0];
			$page = str_replace($url,"",$page);
			if (!$page || $page == ""){
				$page = "/";
			}
			$ip = gethostbyname($url);
		}else{
			$ip = gethostbyname($url);
			$page = "/";
		}
		$open = fsockopen($ip, 80, $errno, $errstr, 60);
		if ($pd){
			$send = "POST $page HTTP/1.0\r\n";
		}else{
			$send = "GET $page HTTP/1.0\r\n";
		}
		$send .= "Host: $url\r\n";
		if ($r){
			$send .= "Referer: $r\r\n";
		}else{
			if (isset($_SERVER['HTTP_REFERER'])){
				$send .= "Referer: {$_SERVER['HTTP_REFERER']}\r\n";
			}
		}
		if ($cf){
			if (@file_exists($cf)){
				$cookie = urldecode(@file_get_contents($cf));
				if ($cookie){
					$send .= "Cookie: $cookie\r\n";

				}
			}
		}
		$send .= "Accept-Language: en-us, en;q=0.50\r\n";
		if ($a){
			$send .= "User-Agent: $a\r\n";
		}else if(isset($_SERVER['HTTP_USER_AGENT'])){
			$send .= "User-Agent: {$_SERVER['HTTP_USER_AGENT']}\r\n";
		} else {
			$send .= "User-Agent: Mozilla/5.0 (X11; U; Linux i686; fi-FI; rv:1.9.2.13) Gecko/20101206 Ubuntu/10.04 (lucid) Firefox/3.6.13\r\n";
		}
		if ($pd){
			$send .= "Content-Type: application/x-www-form-urlencoded\r\n";
			$send .= "Content-Length: " .strlen($pd) ."\r\n\r\n";
			$send .= $pd;
		}else{
			$send .= "Connection: Close\r\n\r\n";
		}
		fputs($open, $send);
		$results="";
		while (!feof($open)) {
			$results .= fgets($open, 4096);
		}
		fclose($open);
		$results = @explode("\r\n\r\n",$results,2);
		$header = $results[0];
		if ($cf){
			if (preg_match("/Set\-Cookie\: /i","$header")){
				$cookie = @explode("Set-Cookie: ",$header,2);


				$cookie = $cookie[1];

				$cookie = explode("\r",$cookie);

				$cookie = $cookie[0];

				$cookie = str_replace("path=/","",$cookie);

				$add = fopen($cf,'w');
				fwrite($add,$cookie,strlen($cookie));
				fclose($add);


			}
		}
		if ($oldheader){
			$header = "$oldheader<br /><br />\n$header";
		}
		$header = str_replace("\n","<br />",$header);
		if ($results[1]){
			$body = $results[1];
		}else{
			$body = "";
		}
		if ($c === 2){
			if ($body){
				$results = $body;
			}else{
				$results = $header;
			}
		}
		if ($c === 1){
			$results = $header;
		}
		if ($c === 3){
			$results = "$header$body";
		}
		if ($f){
			if (preg_match("/Location\:/","$header")){
				$url = @explode("Location: ",$header);
				$url = $url[1];
				$url = @explode("\r",$url);
				$url = $url[0];
				$oldheader = str_replace("\r\n\r\n","",$header);
				$l = "&#76&#111&#99&#97&#116&#105&#111&#110&#58";
				$oldheader = str_replace("Location:",$l,$oldheader);
				return open_page($url,$f,$c,$r,$a,$cf,$pd);
			}else{
				return $results;
			}
		}else{
			return $results;
		}
	}

	private function get($url) {
		$f = 1;
		$c = 2;
		$r = NULL;
		$a = NULL;
		$cf = $this->cookie_file;
		$pd = NULL;

		$data = $this->open_page($url,$f,$c,$r,$a,$cf,$pd);

		//	echo $url."\n";
		//	echo $data;

		return $data;
	}
	private function get_string_between($string, $start, $end){

		$string = " ". $string;

		$ini = strpos($string,$start);

		if ($ini == 0) return "";

		$ini += strlen($start);

		$len = strpos($string, $end, $ini) - $ini;

		return substr($string, $ini, $len);

	}

}
?>
