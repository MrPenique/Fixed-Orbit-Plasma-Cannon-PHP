<?php
class Portscan(){
	private $host;
	private $ports;
	private $method;
	public function __construct($host, $ports, $method){
		$this->host = $host;
		$this->ports = array($ports);
		$this->method = $method;
	}
	private function scanner($port){
		$fp=fsockopen($this->method."://".$this->host, $port,$errno,$errstr, 1);
		if ($fp) {
			echo "Opened Port: ".$port." at ".$this->host;
		}
	}
	public function start(){
		$port = $this->ports;
		for($i=0; $i <= sizeof($port)-1; $i++){/*65535*/
			$this->scanner($port[$i]);
		}
	}
}


?>