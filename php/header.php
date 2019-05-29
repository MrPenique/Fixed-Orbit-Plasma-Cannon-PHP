<?php
ob_start();
@set_time_limit(0);
ini_set('memory_limit', '512M');
header('Content-Type: text/html; charset=charset=UTF-8');
date_default_timezone_set ("UTC");
error_reporting(0);
$serverip = $_SERVER['SERVER_ADDR'];
?>