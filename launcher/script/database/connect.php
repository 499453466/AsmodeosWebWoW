<?php
	require 'config.php';
	$launcherDB = mysqli_connect('localhost',$GLOBALS['user'],$GLOBALS['pass'],'launcher');
	$authDB = mysqli_connect('localhost',$GLOBALS['user'],$GLOBALS['pass'],$GLOBALS['auth']);
	$charDB = mysqli_connect('localhost',$GLOBALS['user'],$GLOBALS['pass'],$GLOBALS['chars']);

	// Check if connected to all DBs
	if($launcherDB->connect_error || $authDB->connect_error || $charDB->connect_error)
		die(mysqli_close());
?>