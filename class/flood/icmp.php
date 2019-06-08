<?php
include_once "../header.php";
class icmp{
	public $ip;
	public $max_time;
	public function __construct($ip, $max_time) {
		$this->ip = $ip;
		$this->max_time = $max_time;
	}
	function start(){
		$packet=0;
		while(1){ 
			$packet++; 
			if(time() > $this->max_time){
				return $packet;
				break; 
			}
			$package = "\x08\x00\x19\x2f\x00\x00\x00\x00\x70\x69\x6e\x67";
			$socket = socket_create(AF_INET, SOCK_RAW, 1);
			socket_set_option($socket, SOL_SOCKET, SO_RCVTIMEO, array("sec" => 1, "usec" => 0));
			socket_connect($socket, $this->ip, null);
			socket_send($socket, $package, strlen($package), 0);
			}
		}
	}
}
?>