<?php

DEFINE('DB_USER', 'jji233');
DEFINE('DB_PASSWORD', 'coo%v7eiN');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'jji233ict301');

//Make the connection
$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('could not connect to MySQL: ' . mysqli_error());

?>