<?php

$sv = 'localhost';
$us = 'root';
$ps = '';
$db = 'cb_webbima';

$con = mysqli_connect($sv,$us,$ps);

if(!$con) {
	die('connection failed '. mysqli_connect_error());
	
}
mysqli_select_db($con,$db);

?>