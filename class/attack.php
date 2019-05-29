<?php
class attack{
	protected $socketn; 
	protected $lenght; 
	protected $timedout;
	protected $ip; 
	protected $srcip; 
	protected $port;
	protected $exec_time;
	function __construct($socketn, $lenght, $timedout, $ip, $srcip, $port, $exec_time) {
		$this->setSocketn($socketn);
		$this->setLenght($lenght);
		$this->setTimedout($timedout);
		$this->setIp($ip);
		$this->setSrcip($srcip);
		$this->setPort($port);
		$this->setExec_time($exec_time);
	}
	public function getSocketn(){
		return $this->socketn;
	}

	public function setSocketn($socketn){
		$this->socketn = $socketn;
	}

	public function getLenght(){
		return $this->lenght;
	}

	public function setLenght($lenght){
		$this->lenght = $lenght;
	}

	public function getTimedout(){
		return $this->timedout;
	}

	public function setTimedout($timedout){
		$this->timedout = $timedout;
	}

	public function getIp(){
		return $this->ip;
	}

	public function setIp($ip){
		$this->ip = $ip;
	}

	public function getSrcip(){
		return $this->srcip;
	}

	public function setSrcip($srcip){
		$this->srcip = $srcip;
	}
	public function getPort(){
		return $this->port;
	}

	public function setPort($port){
		$this->port = $port;
	}

	public function getExec_time(){
		return $this->exec_time;
	}

	public function setExec_time($exec_time){
		$this->exec_time = $exec_time;
	}
}
?>