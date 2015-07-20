<?php

function logMessage($logLevel, $message)
{
	$loggedDate = "log-" . date("Y-m-d") . ".log";
	$filename = "$loggedDate";
	$handle = fopen($filename, 'a');
	fwrite($handle,PHP_EOL . date("Y-m-d H:i:s ")."[{$logLevel}] $message".PHP_EOL);
	fclose($handle);
}
date_default_timezone_set("America/Chicago");

function logInfo(){
	logMessage("INFO",$message);
}
function errorInfo(){
	logMessage("ERROR",$message);
}

logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an error message.");
