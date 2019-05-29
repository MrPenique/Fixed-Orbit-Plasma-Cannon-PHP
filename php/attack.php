<?php
?>
<form name="input" action="" method="post"> 
	Method:
	<select name="method" class="inputs" onchange="Check(this);" required>
		<option  selected disabled selected value> -- select a Method -- </option>
		<optgroup label="Layer 3:">
			<option value="icmp">ICMP</option>
			<!--<option value="smurf">ICMP SMURF</option>-->
		<optgroup label="Layer 4:">
		  <option value="udp" <?php if(!function_exists('fsockopen')){echo "disabled";}?>>UDP Flood</option>
		  <option value="tcp" <?php if(!function_exists('fsockopen')){echo "disabled";}?>>TCP Flood</option>
		  <option value="ntpattack">NTP Attack(DNS Attack)</option>
		  <option value="ssdpattack">SSDP Attack</option>

		<optgroup label="Layer 7:">
			<option value="post" <?php if(!function_exists('curl_version')){echo "disabled";}?>>POST Flood</option>
			<option value="get" <?php if(!function_exists('curl_version')){echo "disabled";}?>>GET Flood</option>
			<option value="ssl" <?php if(!function_exists('fsockopen')){echo "disabled";}?>>SSL Flood</option>
		  
			<option value="404" <?php if(!function_exists('curl_version')){echo "disabled";}?>>Evade CDN service</option>
			<option value="slowloris" <?php if(!function_exists('fsockopen')){echo "disabled";}?>>Slowloris Attack</option>
			<option value="arme" <?php if(!function_exists('fsockopen')){echo "disabled";}?>>ARME Attack</option>
			<option value="rudy">R.U.D.Y Attack</option>

		<optgroup label="Layer 7 - to Minecraft:">
			<option value="minecraftbandwitdh">bandwitdh Flood</option>
	</select>
	<input class="inputs" type="text" name="ip" size="15" maxlength="150" class="main" placeholder="Target" value = "" id="sinput1" style="display: none;"> 
	<input class="inputs" type="text" name="srcip" size="15" maxlength="150" class="main" placeholder="Source HOST" value = "" id="sinput1_2" style="display: none;"> 
	<input class="inputs" type="number" name="time" size="14" maxlength="20" class="main" placeholder="Time (in seconds)" value = "" id="sinput2" style="display: none;"> 
	<input class="inputs" type="number" name="port" size="5" maxlength="5" class="main" placeholder="Port" value = "" style="display: none;" id="sinput3"> 
	<input class="inputs" type="number" name="timedout" size="5" maxlength="5" class="main" placeholder="Timedout (default: 30)" value = "30" style="display: none;" id="sinput5">
	<input class="inputs" type="number" name="builds" size="15" maxlength="150" class="main" placeholder="Build socket" value = "100" id="sinput6" style="display: none;"> 
	<input class="inputs" type="submit" name="attack" value="Start the Attack"> 
</form>