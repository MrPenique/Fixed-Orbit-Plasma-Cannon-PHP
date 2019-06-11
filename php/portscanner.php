<?php
include_once "header.php";
class Portscan{
	private $host;
	private $ports;
	private $protokol;
	public function __construct($host, $ports, $protokol){
		$this->host = $host;
		$this->ports = $ports;
		$this->protokol = $protokol;
	}
	private function scanner($port){
		try{
			$fp=fsockopen($this->protokol."://".$this->host, $port,$errno,$errstr, 30);
			if ($fp) {
				echo "Opened Port: ".$port." at ".$this->host."<br>";
			}
		}catch (Exception $e) {
			echo "plz no";
		}
	}
	public function start(){
		$port = $this->ports;
		for($i=0; $i <= sizeof($port)-1; $i++){/*65535*/
			$this->scanner($port[$i]);
		}
	}
}
//if(isset($_POST['ip'])){
	$ports = array();
	$ip = $_POST['ip'];
	$protokol = $_POST['protokol'];
	$method = $_POST['method'];
	if($method == "rgscan"){
		$minport = $_POST['minport'];
		$maxport = $_POST['maxport'];
		$j=0;
		for($i = $minport; $i <= $maxport; $i++){
			$ports[$j] = $i;
			$j++;
		}
	}else if($method == "onebyonescan"){
		$onebyone = $_POST['onebyone'];
		$ports = explode(", ", $onebyone);
	}else{
		for($i = 0; $i <= 65535; $i++){
			$ports[$i] = $i;
		}
	}
	//echo $ip . " ".print_r($ports)." ".$protokol." ".$method." ";
	$portscan = new Portscan($ip, $ports, $protokol);
	$portscan->start();
//}

?>