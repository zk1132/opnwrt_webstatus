<?php

error_reporting(0);

$dbhost = "";
$dbuser = "";
$dbpassword = "";
$database = "status";

$host = $_SERVER['HTTP_HOST'];
$workingdir = dirname($_SERVER['PHP_SELF']);

$hostname = "aCC Server";
$refreshRate = "2500"; // ms
$version = "v2.0";
$interface = "eth0.2"; // interface to display data rate
$WANrxlimit = "1280"; // kb/s
$WANtxlimit = "128"; // kb/s
$LANrxlimit = "125000"; // kb/s
$LANtxlimit = "125000"; // kb/s
$WLANrxlimit = "125000"; // kb/s
$WLANtxlimit = "125000"; // kb/s
$connectionlimit = "16384";

?>