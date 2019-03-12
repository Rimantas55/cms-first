<?php

//Creating connection to MySql
$connection = mysqli_connect('localhost', 'root', '', 'cms');

//Checking if connection is working
if($connection) {

	echo " connection to database is successful" . "<br>";
} else {

	die('Database connection failed');
}




















?>