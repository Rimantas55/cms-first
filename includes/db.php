<?php

$db["db_host"] = 'localhost';
$db["db_user"] = 'root';
$db["db_pass"] = '';
$db["db_name"] = 'cms';

foreach ($db as $key => $value) {

	define(strtoupper($key), $value);

}

//Creating connection to MySql
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Checking if connection is working
if($connection) {

	echo '<div class="alert alert-success">Connection to database is successful</div>';
} else {

	die('Database connection failed');
}


















?>