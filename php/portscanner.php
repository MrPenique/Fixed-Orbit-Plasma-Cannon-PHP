<?php
if(isset($_POST['scan'])){
	$ip = $_POST['ip'];
	$minport =$_POST['minport'];
	$maxport =$_POST['maxport'];
	for($i=$minport; $i <= $maxport; $i++){/*65535*/
		try{
			$fp[$i]=fsockopen("tcp://$ip", $i,$errno,$errstr, 1);
			if ($fp[$i]) {
			echo "Opened Port: ".$i." at ".$ip;
			}
		}catch (Exception $e){
			echo $e;
		}
	}
}

?>