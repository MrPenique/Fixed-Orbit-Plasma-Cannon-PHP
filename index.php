<?php 
include_once "php/header.php";
include_once "html/header.html";
?> 
	<div class="head background-grey">
		<img src="http://img15.deviantart.net/cbf5/i/2011/084/1/6/ion_cannon_by_zoriy-d3cfk9f.jpg" class="logo">
		<h5>Fixed Orbit Plasma Cannon PHP</h5>
		<b>Your IP:</b> <font color="red"><?php echo $_SERVER['REMOTE_ADDR']; ;?></font>
		<b>Your SERVER IP:</b> <font color="red"><?php echo $serverip;?></font>
		<pre class="title">Coded by: Mogyiii</pre>
	</div><!head END->
	<nav class="navbar navbar-inverse menu">
	  	<ul class="nav navbar-nav">
	    	<li><a href="index.php?page=attack">Dos</a></li>
	    	<li><a href="">DDos</a></li>
	    	<li><a href="index.php?page=portscan">Port scan</a></li>
	  	</ul>
	</nav>
<div class="container-fluid background-grey">
	<div class="container background-grey">
		<div class="form background-grey">
			<?
			switch ($_GET['page']) {
			    case "":
			       	header("location: index.php?page=attack");
			       	break;
			    case "attack":
			    	include_once "php/attack.php";
			    	break;
			    case "portscan":
			    	include_once "html/portscanner.html";
			    	break;
			    default:
			        echo "<h3 class='bg-danger'>404 Error page not found!</h3>";
			        http_response_code(404);
			}
			?>
		</div><!form END->
	</div>
</div>
<div class="break">
</div>
</body> 
</html> 


