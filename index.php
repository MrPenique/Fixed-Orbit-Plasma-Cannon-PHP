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
	<nav class="navbar navbar-expand-sm navbar-dark menu">
		<a class="navbar-brand" href=""></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		  	<span class="navbar-toggler-icon"></span>
		  </button>
  		<div class="collapse navbar-collapse " id="collapsibleNavbar">
    		<ul class="navbar-nav">
			    <li class="nav-item navbars"><a class="nav-link" href="index.php?page=attack">DOS</a></li>
			    <li class="nav-item navbars"><a class="nav-link" href="">DDOS</a></li>
			    <li class="nav-item navbars"><a class="nav-link" href="index.php?page=portscan">PORT SCAN</a></li>
			    <li class="nav-item navbars"><a class="nav-link" href="https://github.com/mogyiii/Fixed-Orbit-Plasma-Cannon-PHP"><img class="menu-img" src="https://github.githubassets.com/images/modules/logos_page/Octocat.png" width="30"></a></li>
			    <li class="nav-item navbars"><a class="nav-link" href="https://www.youtube.com/channel/UCt2EuaiD_6CbfTV0uGUsX1g"><img class="menu-img" src="https://seeklogo.com/images/Y/youtube-icon-logo-521820CDD7-seeklogo.com.png" width="40"></a></li>
			    <li class="nav-item navbars"><a class="nav-link" href="https://www.patreon.com/user?u=19370638"><img class="menu-img" src="https://s3.amazonaws.com/pas-wordpress-media/content/uploads/2015/03/Patreon-Logo.png" width="30"></a></li>
			</ul>
		</div>
	</nav>
</div><!head END->

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


