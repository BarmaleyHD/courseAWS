<?php

$username = 'dmitry';
$password = 'dimkaloli';
$hostname = "hostnamehere";
$dbname = "ng1";

// connect to the database
$dbhandle = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
echo 'Connected to MySQL using!';
$selected = mysql_select_db("$dbanme", $dbhandle) or die('UUnable to connect -> check credentials!');

>?