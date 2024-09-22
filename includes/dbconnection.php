<?php
$host = 'localhost';
$username = 'root';
$pw = '';
$database = 'smcnews';

$conn = mysqli_connect($host, $username, $pw, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}