<?php
?>
<form name="input" id="form"> 
	<select name="method" id="select" class="inputs" onchange="Check(this);" required>
		<option  selected disabled selected value> -- select a Method -- </option>
		<optgroup label="Layer 3:">
			<option value="icmp" <?php if(!(phpversion() < 7.1)){echo "disabled";}?>>ICMP</option>
			<!--<option value="smurf">ICMP SMURF</option>-->
		<optgroup label="Layer 4:">
		  <option value="udp" <?php if(!function_exists('fsockopen')){echo "disabled";}?>>UDP Flood</option>
		  <option value="tcp" <?php if(!function_exists('fsockopen')){echo "disabled";}?>>TCP Flood</option>
		  <option value="ntpattack" <?php if(!(phpversion() < 7.1)){echo "disabled";}?>>NTP Attack(DNS Attack)</option>
		  <option value="ssdpattack" <?php if(!(phpversion() < 7.1)){echo "disabled";}?>>SSDP Attack</option>

		<optgroup label="Layer 7 - for websites:">
			<option value="post" <?php if(!function_exists('curl_version')){echo "disabled";}?>>POST Flood</option>
			<option value="get" <?php if(!function_exists('curl_version')){echo "disabled";}?>>GET Flood</option>
			<option value="ssl" <?php if(!function_exists('fsockopen')){echo "disabled";}?>>SSL Flood</option>
		  	<option value="toxicssl" <?php if(!function_exists('fsockopen')){echo "disabled";}?>>Toxic SSL Flood</option>
			<option value="404" <?php if(!function_exists('curl_version')){echo "disabled";}?>>Evade CDN service</option>
			<option value="slowloris" <?php if(!function_exists('fsockopen')){echo "disabled";}?>>Slowloris Attack</option>
			<option value="arme" <?php if(!function_exists('fsockopen')){echo "disabled";}?>>ARME Attack</option>
			<option value="hulk" <?php if(!function_exists('fsockopen')){echo "disabled";}?>>HULK Attack</option>
			<option value="rudy" <?php if(!(phpversion() < 7.1)){echo "disabled";}?>>R.U.D.Y Attack</option>

		<optgroup label="Layer 7 - for Minecraft:">
			<option value="minecraftbandwitdh">Header Flood</option>
	</select>
	<div><input class="inputs main" type="text" name="ip" size="15" maxlength="150"  placeholder="Target" value = "" id="sinput1" style="display: none;"></div>
	<div><input class="inputs main" type="text" name="srcip" size="15" maxlength="150"  placeholder="Source HOST" value = "" id="sinput1_2" style="display: none;"></div>
	<div><input class="inputs main" type="number" name="time" size="14" maxlength="20"  placeholder="Time (in seconds)" value = "" id="sinput2" style="display: none;"></div>
	<div><input class="inputs main" type="number" name="port" size="5" maxlength="5"  placeholder="Port" value = "" style="display: none;" id="sinput3"></div>
	<div><input class="inputs main" type="number" name="timedout" size="5" maxlength="5"  placeholder="Timedout (default: 30)" value = "30" style="display: none;" id="sinput5"></div>
	<div><input class="inputs main" type="number" name="builds" size="15" maxlength="150"  placeholder="Build socket" value = "100" id="sinput6" style="display: none;"></div>
	<textarea name="panels" class="inputs" id="textarea"></textarea>
	<div><input class="start-btn" type="submit" value="Start the Attack"></div>
</form>
