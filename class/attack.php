<?php
class attack{
	protected $socketn; 
	protected $lenght; 
	protected $timedout;
	protected $ip; 
	protected $srcip; 
	protected $port;
	protected $max_time;
	public $packets = 0; 
	/*function __construct(){
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this,$f='__construct'.$i)) {
            call_user_func_array(array($this,$f),$a);
        }
    }*/
	function __construct($socketn, $lenght, $timedout, $ip, $srcip, $port, $max_time) {
		$this->setSocketn($socketn);
		$this->setLenght($lenght);
		$this->setTimedout($timedout);
		$this->setIp($ip);
		$this->setSrcip($srcip);
		$this->setPort($port);
		$this->setMax_time($max_time);
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

	public function getMax_time(){
		return $this->max_time;
	}

	public function setMax_time($max_time){
		$this->max_time = $max_time;
	}
}
?>