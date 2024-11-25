<?php
$pythonPath = 'C:/Users/Administrator/AppData/Local/Programs/Python/Python312/python.ex'; 
$scriptPath = 'C:/Users/Administrator/Desktop/python/main.py'; 

$command = escapeshellcmd("$pythonPath $scriptPath");
echo "Command: $command<br>";

$integration = shell_exec($command);
var_dump($integration);


error_reporting(E_ALL);
ini_set('display_errors', 1);
echo "Hello from PHP!";
?>
