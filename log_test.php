<?php
require_once 'Log.php';
$log = new Log('cli');


$log->info("This is an info message.");
$log->error("This is an error message.");
$log->logMessage("WARNING", "this is a warning");