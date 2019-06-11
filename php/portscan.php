<?php if(!function_exists('fsockopen')){echo "<h1 color='red'>fsocket: disabled!</h1>";}?>
<form name="input" action="" method="post"> 
	<div><input class="inputs" type="text" name="ip" size="15" maxlength="150" class="main" placeholder="HOST" value = "" id="host"></div>
	<div><select name="method" id="method" class="inputs" onchange="Checkport(this);" required>
		<option  selected disabled selected value> -- select a Method -- </option>
		<option value="fscn">Full Scan</option>
		<option value="rgscan">Range Scan</option>
		<option value="onebyonescan">one by one Scan</option>
	</select></div>
	<div><select name="protokol" id="protokol" class="inputs" required>
		<option value="tcp">TCP</option>
		<option value="udp">UDP</option>
	</select></div>
	<div><input class="inputs" type="number" name="minport" size="5" maxlength="5"  placeholder="Minimum Port number" value = ""  id="minport" style="display: none;"></div>
	<div><input class="inputs" type="number" name="maxport" size="5" maxlength="5"  placeholder="Maximum Port number" value = ""  id="maxport" style="display: none;"></div>
	<textarea name="onebyone" class="inputs" id="textarea" style="display: none;">80, 443</textarea>
</form> 
<div><button class="start-btn" type="submit" name="scan">Start the Scanner</button></div>
<div id="response">
	
</div>
<script>
	$(document).ready(function(){
		$(".start-btn").click(function(){
            $.post("php/portscanner.php",
    		{
    			method: $('#method').val(),
      			ip: $('#host').val(),
      			protokol: $('#protokol').val(),
      			minport: $('#minport').val(),
      			maxport: $('#maxport').val(),
      			onebyone: $('#textarea').val()
    		},
    		function(result){
      			$("#response").html(result);
    		}
    		);
    	});
    });
</script>