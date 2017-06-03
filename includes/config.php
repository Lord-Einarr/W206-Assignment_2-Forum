<?php
	// require 'functions.php';
	
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'forum';

$conn = mysqli_connect($host, $username, $password, $dbname);

if(!$conn){
    die("connect failed");
}
