<?php
//define variables
$host = 'localhost';
$user = 'root';
$pass = 'asmodeos123';
$realm = 'auth';
$realm_id = '1';

$db_connect = mysql_connect($host, $user, $pass);


//Getting the info from db

$uptime_query = mysql_query("SELECT * FROM $realm.`uptime` WHERE realmid=$realm_id ORDER BY `starttime` DESC LIMIT 1", $db_connect)or die(mysql_error()); 

$uptime_results = mysql_fetch_array($uptime_query);


//calculate uptime
//days

if ($uptime_results['uptime'] > 86400) { 

    $days =  floor(($uptime_results['uptime'] / 24 / 60 / 60))." Dias ";
    $uptime_results['uptime'] = $uptime_results['uptime'] - ($days * 24 * 60 * 60);

}
else {
	$days = " ";
}

//hours
if ($uptime_results['uptime'] > 3600) {

    $hours =  floor(($uptime_results['uptime'] / 60 / 60))." Horas ";
    $uptime_results['uptime'] = $uptime_results['uptime'] - ($hours * 60 * 60);

}
else {
	$hours = " ";
}

//minutes
if ($uptime_results['uptime'] > 60) {

    $minutes =  floor(($uptime_results['uptime'] / 60))." Minutos ";

}
else {
	$minutes = " ";
}
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-us" lang="en-us">
<link href="./styles/{style}/css/style.css" rel="stylesheet" type="text/css" media="screen"/>
<p style="text-align:left;font-size:12px;color:white;"><span><?php echo $days.$hours.$minutes;?></span></p>
</html>
