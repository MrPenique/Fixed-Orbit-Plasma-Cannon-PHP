<?php
if(isset($_POST['attack'])){
	$socketn = $_POST['builds'];
	$lenght = $_POST['lenght'];
	$timedout = $_POST['timedout'];
	$ip = $_POST['ip'];
	$srcip = $_POST['srcip'];
	$method = $_POST['method'];  
	$port = $_POST['port']; 
	$exec_time = $_POST['time']; 
	$thread = $_POST['thread']; 

	$packets = 0; 
	$starttime = date("Y-m-d H:i:s");
	ignore_user_abort(FALSE); 
	$time = time(); 
	$max_time = $time+$exec_time; 
	ini_set('max_execution_time', $max_time);

	switch ($method) {
    case "icmp":
        
        break;
    case "smurf":
        
        break;
    case "udp":
        
        break;
    case "tcp":
        
        break;
    case "syn":
		
		break;
	case "get":
		
		break;
	case "post":
		
		break;
	case "slowloris":
		
		break;
	case "arme":
		
		break;
	case "rudy":
		
		break;
	case "ntpattack":
		
		break;
	case "ssdpattack":
		
		break;
	case "ssl":
		
		break;
	case "minecraftbandwitdh":
		
		break;
	case "hoic": 
		
		break;
	case "":
		echo "404 - Method Not Found";
		break;
	}

	
}

?>
