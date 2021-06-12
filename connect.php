<?php

$serverName='localhost';
$username='root';
$password='';
$databaseName='projekt';

$dbc=mysqli_connect($serverName,$username,$password,$databaseName) or die('Error DB'.mysqli_connect_error());
$dbc->set_charset("utf8");



?>
